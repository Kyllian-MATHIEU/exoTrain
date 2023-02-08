<?php

namespace App\class;


class ModeleTrain
{
    private string $libelle;
    private int    $vitesseMax;

    public function __construct(string $libelle, int $vitesseMax){
        $this->libelle      =$libelle;
        $this->vitesseMax   =$vitesseMax;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }


    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }


    public function donneInfo():string
    {
        return "Train ".$this->getLibelle()." Vitesse maximale  : ".$this->getVitesseMax()." km/h\n";
    }
}