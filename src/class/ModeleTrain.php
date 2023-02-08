<?php

namespace App\class;


class ModeleTrain
{
    private string $libelle;
    private int    $vitesseMax;

    public function __construct(string $libelle, int $vitesseMax, string $modeleTrain,string $donneInfo){
        $this->libelle      =$libelle;
        $this->vitesseMax   =$vitesseMax;
        $this->modeleTrain  =$modeleTrain;
        $this->donneInfo    =$donneInfo;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }


    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }


    public function getModeleTrain(): string
    {
        return $this->modeleTrain;
    }


    public function getDonneInfo(): string
    {
        return $this->donneInfo;
    }



}