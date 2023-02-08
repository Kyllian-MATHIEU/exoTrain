<?php
use App\class\Ligne;
use PHPUnit\Framework\TestCase;

class TestLigne extends TestCase
{
    public function testAll(): void{
        $ligne = new \App\class\Ligne("TGV BELFORT", "4","Besançon Viotte", "Train partit");
        $this->assertEquals("TGV BELFORT", $Ligne->getNom());
        $this->assertEquals("4", $ligne->getLigne());
    }
}