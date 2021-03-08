<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandes
 *
 * @ORM\Table(name="demandes")
 * @ORM\Entity
 */
class Demandes
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUM_DEM", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numDem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPE_DEM", type="text", length=65535, nullable=true)
     */
    private $typeDem;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_LIMITE", type="date", nullable=true)
     */
    private $dateLimite;


}
