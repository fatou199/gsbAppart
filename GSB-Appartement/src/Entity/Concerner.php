<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concerner
 *
 * @ORM\Table(name="concerner", indexes={@ORM\Index(name="I_FK_CONCERNER_DEMANDES", columns={"NUM_DEM"}), @ORM\Index(name="I_FK_CONCERNER_ARRONDISSEMENTS", columns={"AROONDISSEMENT_DEM"})})
 * @ORM\Entity
 */
class Concerner
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUM_DEM", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numDem;

    /**
     * @var int
     *
     * @ORM\Column(name="AROONDISSEMENT_DEM", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $aroondissementDem;


}
