<?php

namespace App\Entity;

use App\Repository\CompetenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompetenceRepository::class)
 */
class Competence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $technologies;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $frameworks;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $environnement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTechnologies(): ?string
    {
        return $this->technologies;
    }

    public function setTechnologies(?string $technologies): self
    {
        $this->technologies = $technologies;

        return $this;
    }

    public function getFrameworks(): ?string
    {
        return $this->frameworks;
    }

    public function setFrameworks(?string $frameworks): self
    {
        $this->frameworks = $frameworks;

        return $this;
    }

    public function getEnvironnement(): ?string
    {
        return $this->environnement;
    }

    public function setEnvironnement(?string $environnement): self
    {
        $this->environnement = $environnement;

        return $this;
    }
}
