<?php


namespace App\class;
use App\class\ModeleTrain;


class train
{
    private string $numeroSerie;
    private ModeleTrain $modele;

    public function __construct(string $numeroSerie, ModeleTrain $modele)
    {

        $this-> numeroSerie = $numeroSerie;
        $this-> modele = $modele;
    }

    public function getnumeroSerie(): string{
        return $this->numeroSerie;
    }

    public function getModele(): ModeleTrain{
        return $this->modele;
    }

    public function donneInfo(): string
    {
        return "Train ".$this->getnumeroSerie()." ".$this->getModele()->donneInfo();
    }
}