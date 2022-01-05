<?php

namespace App\Entity;

use App\Repository\ArticleUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleUserRepository::class)
 */
class ArticleUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=article::class)
     */
    private $id_article;

    /**
     * @ORM\ManyToMany(targetEntity=user::class)
     */
    private $id_user;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Updated_at;

    public function __construct()
    {
        $this->id_article = new ArrayCollection();
        $this->id_user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|article[]
     */
    public function getIdArticle(): Collection
    {
        return $this->id_article;
    }

    public function addIdArticle(article $idArticle): self
    {
        if (!$this->id_article->contains($idArticle)) {
            $this->id_article[] = $idArticle;
        }

        return $this;
    }

    public function removeIdArticle(article $idArticle): self
    {
        $this->id_article->removeElement($idArticle);

        return $this;
    }

    /**
     * @return Collection|user[]
     */
    public function getIdUser(): Collection
    {
        return $this->id_user;
    }

    public function addIdUser(user $idUser): self
    {
        if (!$this->id_user->contains($idUser)) {
            $this->id_user[] = $idUser;
        }

        return $this;
    }

    public function removeIdUser(user $idUser): self
    {
        $this->id_user->removeElement($idUser);

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->Updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $Updated_at): self
    {
        $this->Updated_at = $Updated_at;

        return $this;
    }
}
