<?php

namespace App\Entity;

use App\Repository\APIINSTALLPERMRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=APIINSTALLPERMRepository::class)
 */
class APIINSTALLPERM
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $branch_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $install_id;

    /**
     * @ORM\Column(type="string")
     */
    private $client_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $members_read;

    /**
     * @ORM\Column(type="boolean")
     */
    private $members_add;

    /**
     * @ORM\Column(type="boolean")
     */
    private $members_products_add;

    /**
     * @ORM\Column(type="boolean")
     */
    private $members_payement_shedules_read;

    /**
     * @ORM\Column(type="boolean")
     */
    private $members_satistiques_read;

    /**
     * @ORM\Column(type="boolean")
     */
    private $members_subscription_read;

    /**
     * @ORM\Column(type="boolean")
     */
    private $payement_schedules_write;

    /**
     * @ORM\Column(type="boolean")
     */
    private $payement_schedules_read;

    /**
     * @ORM\Column(type="boolean")
     */
    private $payement_day_read;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBranchId(): ?string
    {
        return $this->branch_id;
    }

    public function setBranchId(string $branch_id): self
    {
        $this->branch_id = $branch_id;

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

    public function getClientId(): ?string
    {
        return $this->client_id;
    }

    public function setClientId(int $client_id): self
    {
        $this->client_id = $client_id;

        return $this;
    }

    public function isMembersRead(): ?bool
    {
        return $this->members_read;
    }

    public function setMembersRead(bool $members_read): self
    {
        $this->members_read = $members_read;

        return $this;
    }

    public function isMembersAdd(): ?bool
    {
        return $this->members_add;
    }

    public function setMembersAdd(bool $members_add): self
    {
        $this->members_add = $members_add;

        return $this;
    }

    public function isMembersProductsAdd(): ?bool
    {
        return $this->members_products_add;
    }

    public function setMembersProductsAdd(bool $members_products_add): self
    {
        $this->members_products_add = $members_products_add;

        return $this;
    }

    public function isMembersPayementShedulesRead(): ?bool
    {
        return $this->members_payement_shedules_read;
    }

    public function setMembersPayementShedulesRead(bool $members_payement_shedules_read): self
    {
        $this->members_payement_shedules_read = $members_payement_shedules_read;

        return $this;
    }

    public function isMembersSatistiquesRead(): ?bool
    {
        return $this->members_satistiques_read;
    }

    public function setMembersSatistiquesRead(bool $members_satistiques_read): self
    {
        $this->members_satistiques_read = $members_satistiques_read;

        return $this;
    }

    public function isMembersSubscriptionRead(): ?bool
    {
        return $this->members_subscription_read;
    }

    public function setMembersSubscriptionRead(bool $members_subscription_read): self
    {
        $this->members_subscription_read = $members_subscription_read;

        return $this;
    }

    public function isPayementSchedulesWrite(): ?bool
    {
        return $this->payement_schedules_write;
    }

    public function setPayementSchedulesWrite(bool $payement_schedules_write): self
    {
        $this->payement_schedules_write = $payement_schedules_write;

        return $this;
    }

    public function isPayementSchedulesRead(): ?bool
    {
        return $this->payement_schedules_read;
    }

    public function setPayementSchedulesRead(bool $payement_schedules_read): self
    {
        $this->payement_schedules_read = $payement_schedules_read;

        return $this;
    }

    public function isPayementDayRead(): ?bool
    {
        return $this->payement_day_read;
    }

    public function setPayementDayRead(bool $payement_day_read): self
    {
        $this->payement_day_read = $payement_day_read;

        return $this;
    }
}
