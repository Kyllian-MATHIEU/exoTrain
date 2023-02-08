<?php

namespace App\class;
use App\class\train;
use App\class\Ligne;


class rouler
{
    private Train $train;
    private Ligne $ligne;
    private \DateTime $heureDepart;

    private function __construct(Train $train, Ligne $ligne, $heureDepart)
    {
        $this->train = $train;
        $this->ligne = $ligne;
        $this->heureDepart = $heureDepart;
    }

    private function donneInfo(): string
    {
        return "Train ".$this->train->getnumeroSerie()." ".$this->train->getModele()->donneInfo().
            " Ligne ".$this->ligne->getNumero()." ".$this->ligne->getNom().
            " Heure de départ ".$this->heureDepart->format('H:i:s').
            $this->ligne->donneInfo();



    }

}