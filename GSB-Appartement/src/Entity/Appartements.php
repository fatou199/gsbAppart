<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartements
 *
 * @ORM\Table(name="appartements", indexes={@ORM\Index(name="I_FK_APPARTEMENTS_PROPRIETAIRES", columns={"NUMERO"})})
 * @ORM\Entity
 */
class Appartements
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMAPPART", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numappart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMERO", type="smallint", nullable=true)
     */
    private $numero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPEAPPART", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $typeappart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIXLOC", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $prixloc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIXCHARG", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $prixcharg;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=40, nullable=false, options={"fixed"=true})
     */
    private $adresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODEPOSTAL", type="integer", nullable=true)
     */
    private $codepostal;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ARRONDISSEMENT", type="integer", nullable=true)
     */
    private $arrondissement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ETAGE", type="integer", nullable=true)
     */
    private $etage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ASCENSEUR", type="boolean", nullable=true)
     */
    private $ascenseur;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PREAVIS", type="boolean", nullable=true)
     */
    private $preavis;

    /**
     * @var \Date|null
     *
     * @ORM\Column(name="DATELIBRE", type="date", nullable=true)
     */
    private $datelibre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMEROPROP", type="smallint", nullable=true)
     */
    private $numeroprop;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMEROLOC", type="smallint", nullable=true)
     */
    private $numeroloc;

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


    public function getNumappart(): ?int
    {
        return $this->numappart;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getTypeappart(): ?string
    {
        return $this->typeappart;
    }

    public function setTypeappart(?string $typeappart): self
    {
        $this->typeappart = $typeappart;

        return $this;
    }

    public function getPrixloc(): ?string
    {
        return $this->prixloc;
    }

    public function setPrixloc(?string $prixloc): self
    {
        $this->prixloc = $prixloc;

        return $this;
    }

    public function getPrixcharg(): ?string
    {
        return $this->prixcharg;
    }

    public function setPrixcharg(?string $prixcharg): self
    {
        $this->prixcharg = $prixcharg;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?int
    {
        return $this->codepostal;
    }

    public function setCodepostal(?int $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getArrondissement(): ?int
    {
        return $this->arrondissement;
    }

    public function setArrondissement(?int $arrondissement): self
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(?int $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getAscenseur(): ?bool
    {
        return $this->ascenseur;
    }

    public function setAscenseur(?bool $ascenseur): self
    {
        $this->ascenseur = $ascenseur;

        return $this;
    }

    public function getPreavis(): ?bool
    {
        return $this->preavis;
    }

    public function setPreavis(?bool $preavis): self
    {
        $this->preavis = $preavis;

        return $this;
    }

    public function getDatelibre(): ?\DateTimeInterface
    {
        return $this->datelibre;
    }

    public function setDatelibre(?\DateTimeInterface $datelibre): self
    {
        $this->datelibre = $datelibre;

        return $this;
    }

    public function getNumeroprop(): ?int
    {
        return $this->numeroprop;
    }

    public function setNumeroprop(?int $numeroprop): self
    {
        $this->numeroprop = $numeroprop;

        return $this;
    }

    public function getNumeroloc(): ?int
    {
        return $this->numeroloc;
    }

    public function setNumeroloc(?int $numeroloc): self
    {
        $this->numeroloc = $numeroloc;

        return $this;
    }

    public function getprixlocmin(): ?int
    {
        return $this->prixlocmin;
    }

    public function setprixlocmin(int $prixlocmin): self
    { 
        $this->prixlocmin = $prixlocmin;

        return $this;
    }

    public function getprixlocmax(): ?int
    {
        return $this->prixlocmax;
    }

    public function setprixlocmax(int $prixlocmax): self
    {
        $this->prixlocmax = $prixlocmax;

        return $this; 
    }

}
