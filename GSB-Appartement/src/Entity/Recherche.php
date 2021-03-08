<?php

namespace App\Entity;


class Recherche
{
    /**
     * @var string|null
     *
     */
    private $typeappart;

    /**
     * @var int|null
     *
     */
    private $arrondissement;
    
    /**
     * @var int|null
     *
     */
    private $prixlocmin;

    /**
     * @var int|null
     *
     */
    private $prixlocmax;

    public function gettypeappart(): ?int
    {
        return $this->typeappart;
    }

    public function settypeappart(int $typeappart): Recherche
    { 
        $this->typeappart = $typeappart;

        return $this;
    }

    public function getarrondissement(): ?int
    {
        return $this->arrondissement;
    }

    public function setarrondissement(int $arrondissement): Recherche
    { 
        $this->arrondissement = $arrondissement;

        return $this;
    }


    public function getprixlocmin(): ?int
    {
        return $this->prixlocmin;
    }

    public function setprixlocmin(int $prixlocmin): Recherche
    { 
        $this->prixlocmin = $prixlocmin;

        return $this;
    }

    public function getprixlocmax(): ?int
    {
        return $this->prixlocmax;
    }

    public function setprixlocmax(int $prixlocmax): Recherche
    {
        $this->prixlocmax = $prixlocmax;

        return $this; 
    }

}
