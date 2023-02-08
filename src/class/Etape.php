<?php
namespace App\class;

class Etape
{
    private Ville $ville;
    private int $ordre;

    public function __construct(Ville $ville, int $ordre)
    {
        $this->ville = $ville;
        $this->ordre = $ordre;
    }

    public function getVille(): Ville
    {
        return $this->ville;
    }

    public function getOrdre(): int
    {
        return $this->ordre;
    }
}