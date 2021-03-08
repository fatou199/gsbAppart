<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Clients
 *
 * @ORM\Table(name="clients", indexes={@ORM\Index(name="I_FK_CLIENTS_DEMANDES", columns={"NUM_DEM"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
 */
class Clients implements UserInterface
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
     * @ORM\Column(name="NUM_DEM", type="smallint", nullable=false)
     */
    private $numDem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE_C", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $adresseC;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODE_VILLE_C", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $codeVilleC;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TEL_C", type="integer", precision=5, scale=2, nullable=true)
     */
    private $telC;

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
     * @ORM\Column(name="USERNAME", type="string", length=128, nullable=false)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PASSWORD", type="string", length=128, nullable=false)
     */
    private $password;

    /**
     * 
     *
     * @ORM\Column(name="ROLES", type="json", length=128, nullable=true)
     */
    private $roles=[];

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function getNumDem(): ?int
    {
        return $this->numDem;
    }

    public function setNumDem(int $numDem): self
    {
        $this->numDem = $numDem;

        return $this;
    }

    public function getAdresseC(): ?string
    {
        return $this->adresseC;
    }

    public function setAdresseC(?string $adresseC): self
    {
        $this->adresseC = $adresseC;

        return $this;
    }

    public function getCodeVilleC(): ?string
    {
        return $this->codeVilleC;
    }

    public function setCodeVilleC(?string $codeVilleC): self
    {
        $this->codeVilleC = $codeVilleC;

        return $this;
    }

    public function getTelC(): ?int
    {
        return $this->telC;
    }

    public function setTelC(?int $telC): self
    {
        $this->telC = $telC;

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

    public function getTel(): ?float
    {
        return $this->tel;
    }

    public function setTel(?float $tel): self
    {
        $this->tel = $tel;

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

    public function eraseCredentials() {}

    public function getSalt() {
        return null;
    }

    public function getRoles(): array
    {
        $roles=$this->roles;
        $roles[]='ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $roles=$this->roles;
        
        return $this;
    }

    




}
