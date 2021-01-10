<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\EntityTypeFilter;

/**
 * Trait TransactionEntityFilter
 * @package QBXML\Filters
 */
trait TransactionEntityFilter
{
    /**
     * @var ?EntityTypeFilter
     */
    private ?EntityTypeFilter $EntityTypeFilter;

    /**
     * @var ?int
     */
    private ?int $ListID;

    /**
     * @var ?string
     */
    private ?string $FullName;

    /**
     * @var ?int
     */
    private ?int $ListIDWithChildren;

    /**
     * @var ?string
     */
    private ?string $FullNameWithChildren;

    /**
     * @return EntityTypeFilter|null
     */
    public function getEntityTypeFilter(): ?EntityTypeFilter
    {
        return $this->EntityTypeFilter;
    }

    /**
     * @param EntityTypeFilter|null $EntityTypeFilter
     * @return self
     */
    public function setEntityTypeFilter(?EntityTypeFilter $EntityTypeFilter): self
    {
        $this->EntityTypeFilter = $EntityTypeFilter;
    }

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

    /**
     * @return int|null
     */
    public function getListIDWithChildren(): ?int
    {
        return $this->ListIDWithChildren;
    }

    /**
     * @param int|null $ListIDWithChildren
     * @return self
     */
    public function setListIDWithChildren(?int $ListIDWithChildren): self
    {
        $this->ListIDWithChildren = $ListIDWithChildren;
    }

    /**
     * @return string|null
     */
    public function getFullNameWithChildren(): ?string
    {
        return $this->FullNameWithChildren;
    }

    /**
     * @param string|null $FullNameWithChildren
     * @return self
     */
    public function setFullNameWithChildren(?string $FullNameWithChildren): self
    {
        $this->FullNameWithChildren = $FullNameWithChildren;
    }
}
