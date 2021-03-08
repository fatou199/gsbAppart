<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaires
 *
 * @ORM\Table(name="proprietaires")
 * @ORM\Entity
 */
class Proprietaires
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
     * @ORM\Column(name="ADRESSE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $adresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODE_VILLE", type="integer", length=65535, nullable=true)
     */
    private $codeVille;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TEL", type="integer", precision=5, scale=2, nullable=true)
     */
    private $tel;

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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function getadresse(): ?string
    {
        return $this->adresse;
    }

    public function setadresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getcodeVille(): ?int
    {
        return $this->codeVille;
    }

    public function setcodeVille(?int $codeVille): self
    {
        $this->codeVille = $codeVille;

        return $this;
    }

    
    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(?int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }
    
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }


}
