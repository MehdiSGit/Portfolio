<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 * @Vich\Uploadable
 */
class Document
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $urlProfil;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastUpdate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pieceJointe;

        /**
     * @Vich\UploadableField(mapping="documents", fileNameProperty="pieceJointe")
     * @var File
     */
    private $pieceJointeFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrlProfil(): ?string
    {
        return $this->urlProfil;
    }

    public function setUrlProfil(?string $urlProfil): self
    {
        $this->urlProfil = $urlProfil;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(?\DateTimeInterface $lastUpdate): self
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function setpieceJointeFile(File $pieceJointe = null)
    {
        $this->pieceJointeFile = $pieceJointe;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($pieceJointe) {
            // if 'lastUpdate' is not defined in your entity, use another property
            $this->lastUpdate = new \DateTime('now');
        }
    }

    public function getpieceJointeFile()
    {
        return $this->pieceJointeFile;
    }

    public function getPieceJointe(): ?string
    {
        return $this->pieceJointe;
    }

    public function setPieceJointe(?string $pieceJointe): self
    {
        $this->pieceJointe = $pieceJointe;

        return $this;
    }
}
