<?php
namespace App\class;




class Ville
{
 private string $nom;

 public function __construct(string $nom, string $ville){
     $this->nom = $nom;
     $this->ville = $ville;

 }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getVille(): string
    {
        return $this->ville;
    }







}