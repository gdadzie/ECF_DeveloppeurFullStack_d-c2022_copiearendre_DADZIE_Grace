<?php

namespace App\Entity;

use App\Repository\ApiClientsGrantsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApiClientsGrantsRepository::class)
 */
class ApiClientsGrants
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
    private $client_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $install_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $active;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $perms;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $branch_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): ?string
    {
        return $this->client_id;
    }

    public function setClientId(?string $client_id): self
    {
        $this->client_id = $client_id;

        return $this;
    }

    public function getInstallId(): ?int
    {
        return $this->install_id;
    }

    public function setInstallId(?int $install_id): self
    {
        $this->install_id = $install_id;

        return $this;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(?string $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getPerms(): ?string
    {
        return $this->perms;
    }

    public function setPerms(?string $perms): self
    {
        $this->perms = $perms;

        return $this;
    }

    public function getBranchId(): ?int
    {
        return $this->branch_id;
    }

    public function setBranchId(?int $branch_id): self
    {
        $this->branch_id = $branch_id;

        return $this;
    }
}
