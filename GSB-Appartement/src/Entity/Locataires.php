<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locataires
 *
 * @ORM\Table(name="locataires", indexes={@ORM\Index(name="I_FK_LOCATAIRES_APPARTEMENTS", columns={"NUMAPPART"})})
 * @ORM\Entity
 */
class Locataires
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMERO", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="NUMAPPART", type="integer", nullable=false)
     */
    private $numappart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATENAISS", type="date", nullable=true)
     */
    private $datenaiss;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TEL_LOC", type="float", precision=5, scale=2, nullable=true)
     */
    private $telLoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="R_I_B", type="bigint", nullable=true)
     */
    private $rIB;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BANQUE", type="text", length=65535, nullable=true)
     */
    private $banque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUE_BANQUE", type="text", length=65535, nullable=true)
     */
    private $rueBanque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODEVILLE_BANQUE", type="text", length=65535, nullable=true)
     */
    private $codevilleBanque;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TEL_BANQUE", type="float", precision=5, scale=2, nullable=true)
     */
    private $telBanque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TEL", type="float", precision=5, scale=2, nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USERNAME", type="string", length=128, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PASSWORD", type="string", length=128, nullable=true)
     */
    private $password;


}
