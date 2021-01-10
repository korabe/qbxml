<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\ItemTypeFilter;

/**
 * Trait ReportAccountFilter
 * @package QBXML\Filters
 */
trait ReportItemFilter
{
  /**
   * @var ?ItemTypeFilter
   */
  private ?ItemTypeFilter $itemTypeFilter;

  /**
   * @var ?int
   */
  private ?int $listID;

  /**
   * @var ?string
   */
  private ?string $fullName;

  /**
   * @var ?int
   */
  private ?int $listIDWithChildren;

  /**
   * @var ?string
   */
  private ?string $fullNameWithChildren;

  /**
   * @return ItemTypeFilter|null
   */
  public function getItemTypeFilter(): ?ItemTypeFilter
  {
    return $this->itemTypeFilter;
  }

  /**
   * @param ItemTypeFilter|null $itemTypeFilter
   * @return self
   */
  public function setItemTypeFilter(?ItemTypeFilter $itemTypeFilter): self
  {
    $this->itemTypeFilter = $itemTypeFilter;
    return $this;
  }

  /**
   * @return int|null
   */
  public function getListID(): ?int
  {
    return $this->listID;
  }

  /**
   * @param int|null $listID
   * @return self
   */
  public function setListID(?int $listID): self
  {
    $this->listID = $listID;
    return $this;
  }

  /**
   * @return string|null
   */
  public function getFullName(): ?string
  {
    return $this->fullName;
  }

  /**
   * @param string|null $fullName
   * @return self
   */
  public function setFullName(?string $fullName): self
  {
    $this->fullName = $fullName;
    return $this;
  }

  /**
   * @return int|null
   */
  public function getListIDWithChildren(): ?int
  {
    return $this->listIDWithChildren;
  }

  /**
   * @param int|null $listIDWithChildren
   * @return self
   */
  public function setListIDWithChildren(?int $listIDWithChildren): self
  {
    $this->listIDWithChildren = $listIDWithChildren;
    return $this;
  }

  /**
   * @return string|null
   */
  public function getFullNameWithChildren(): ?string
  {
    return $this->fullNameWithChildren;
  }

  /**
   * @param string|null $fullNameWithChildren
   * @return self
   */
  public function setFullNameWithChildren(?string $fullNameWithChildren): self
  {
    $this->fullNameWithChildren = $fullNameWithChildren;
    return $this;
  }
}
