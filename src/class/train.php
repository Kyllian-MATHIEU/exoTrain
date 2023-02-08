<?php


namespace App\class;
use App\class\ModeleTrain;


class train
{
    private string $numeroSerie;

    public function __construct(string $numeroSerie, string $train, string $donneInfo){

        $this-> numeroSerie = $numeroSerie;
        $this-> train = $train;
        $this-> donneInfo = $donneInfo;

    }

    public function getnumeroSerie(): string{
        return $this->numeroSerie;
    }

    public function getDonneInfo(): ModeleTrain
    {
        return $this->donneInfo;
    }

    public function getTrain(): string
    {
        return $this->train;
    }





}