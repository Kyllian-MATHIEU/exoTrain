<?php
namespace App\class;

use App\class\ModeleTrain;


class Ligne
{
 private string $nom;

 public function __construct(string $nom, string $ligne, string $ajouterEtape, string $donneinfo){
     $this->nom = $nom;
     $this-> ligne = $ligne;
     $this-> ajouterEtape =  $donneinfo;
     $this-> donneinfo = $donneinfo;

 }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getLigne(): string
    {
        return $this->ligne;
    }

    public function getAjouterEtape(): string
    {
        return $this->ajouterEtape;
    }


    public function getDonneinfo(): string
    {
        return $this->donneinfo;
    }




}