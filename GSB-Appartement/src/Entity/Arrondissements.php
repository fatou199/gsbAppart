<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arrondissements
 *
 * @ORM\Table(name="arrondissements")
 * @ORM\Entity
 */
class Arrondissements
{
    /**
     * @var int
     *
     * @ORM\Column(name="AROONDISSEMENT_DEM", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aroondissementDem;


}
