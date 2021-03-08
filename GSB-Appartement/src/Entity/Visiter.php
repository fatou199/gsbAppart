<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visiter
 *
 * @ORM\Table(name="visiter", indexes={@ORM\Index(name="I_FK_VISITER_APPARTEMENTS", columns={"NUMAPPART"}), @ORM\Index(name="I_FK_VISITER_CLIENTS", columns={"NUMERO"})})
 * @ORM\Entity
 */
class Visiter
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMAPPART", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numappart;

    /**
     * @var int
     *
     * @ORM\Column(name="NUMERO", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numero;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_VISITE", type="date", nullable=true)
     */
    private $dateVisite;


}
