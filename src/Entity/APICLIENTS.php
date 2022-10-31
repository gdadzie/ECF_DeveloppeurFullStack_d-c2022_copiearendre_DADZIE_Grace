<?php

namespace App\Entity;

use App\Repository\APICLIENTSRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=APICLIENTSRepository::class)
 */
class APICLIENTS
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $client_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $client_secret;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): ?int
    {
        return $this->client_id;
    }

    public function setClientId(int $client_id): self
    {
        $this->client_id = $client_id;

        return $this;
    }

    public function getClientSecret(): ?string
    {
        return $this->client_secret;
    }

    public function setClientSecret(?string $client_secret): self
    {
        $this->client_secret = $client_secret;

        return $this;
    }
}
