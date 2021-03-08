<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity
 */
class Administrateur
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
