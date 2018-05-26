<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticlesRepository")
 */
class Articles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $accroche;

    /**
     * @ORM\Column(type="text")
     */
    private $post;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publie_le;

    /**
     * @ORM\Column(type="datetime")
     */
    private $modifie_le;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $auteur;

    /**
     * @ORM\Column(type="boolean")
     */
    private $publie;

    public function getId()
    {
        return $this->id;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAccroche(): ?string
    {
        return $this->accroche;
    }

    public function setAccroche(string $accroche): self
    {
        $this->accroche = $accroche;

        return $this;
    }

    public function getPost(): ?string
    {
        return $this->post;
    }

    public function setPost(string $post): self
    {
        $this->post = $post;

        return $this;
    }

    public function getPublieLe(): ?\DateTimeInterface
    {
        return $this->publie_le;
    }

    public function setPublieLe(\DateTimeInterface $publie_le): self
    {
        $this->publie_le = $publie_le;

        return $this;
    }

    public function getModifieLe(): ?\DateTimeInterface
    {
        return $this->modifie_le;
    }

    public function setModifieLe(\DateTimeInterface $modifie_le): self
    {
        $this->modifie_le = $modifie_le;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getPublie(): ?bool
    {
        return $this->publie;
    }

    public function setPublie(bool $publie): self
    {
        $this->publie = $publie;

        return $this;
    }
}
