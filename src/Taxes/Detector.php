<?php

namespace App\Taxes;

class Detector
{
    protected $seuil;
    public function __construct($_seuil)
    {
        $this->seuil = $_seuil;
    }

    public function detect(float $prix): bool
    {
        if ($prix > $this->seuil) {
            return true;
        }
        return false; // else
    }
}