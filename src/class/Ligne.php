<?php
namespace App\class;

use App\class\ModeleTrain;


class Ligne
{
 private string $nom;
private Ville $villeDepart;
private Ville $villeArrivee;
private array $etape = [];
 public function __construct(string $nom, Ville $villeDepart, Ville $villeArrivee)
 {
     $this->nom = $nom;
     $this->villeDepart = $villeDepart;
     $this->villeArrivee = $villeArrivee;

 }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function ajouterEtape(Ville $ville, int $ordre): void
    {
        $this->etape[] = new Etape($ville, $ordre);
    }

    public function donneTexte() : string{
        $texte = "Ligne ".$this->getNom()." : ".$this->villeDepart->getNom()." - ".$this->villeArrivee->getNom()."\n";

        usort($this->etape, function ($a, $b) {
            return $a->getOrdre() > $b->getOrdre();
        });
        foreach ($this->etape as $etape){
            $texte .= "Etape ".$etape->getOrdre()." : ".$etape->getVille()->getNom()."\n";
        }
        return $texte;
    }

}