<?php

namespace App\Entity;

use App\Repository\HasWatchedRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HasWatchedRepository::class)
 */
class HasWatched
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Video::class, inversedBy="hasWatcheds")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_video;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ip_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVideo(): ?Video
    {
        return $this->id_video;
    }

    public function setIdVideo(?Video $id_video): self
    {
        $this->id_video = $id_video;

        return $this;
    }

    public function getIpUser(): ?string
    {
        return $this->ip_user;
    }

    public function setIpUser(string $ip_user): self
    {
        $this->ip_user = $ip_user;

        return $this;
    }
}
