<?php

namespace QBXML\Filters;

/**
 * Trait TaxAgencyVendorRef
 * @package QBXML\Filters
 */
trait TaxAgencyVendorRef
{
    /**
     * @var ?int
     */
    private ?int $ListID;

    /**
     * @var ?string
     */
    private ?string $FullName;

    /**
     * @return int|null
     */
    public function getListID(): ?int
    {
        return $this->ListID;
    }

    /**
     * @param int|null $ListID
     * @return self
     */
    public function setListID(?int $ListID): self
    {
        $this->ListID = $ListID;
    }

    /**
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->FullName;
    }

    /**
     * @param string|null $FullName
     * @return self
     */
    public function setFullName(?string $FullName): self
    {
        $this->FullName = $FullName;
    }
}
