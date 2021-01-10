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
  private ?int $listId;

  /**
   * @var ?string
   */
  private ?string $fullName;

  /**
   * @var ?int
   */
  private ?int $listIdWithChildren;

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
  public function getListId(): ?int
  {
    return $this->listId;
  }

  /**
   * @param int|null $listId
   * @return self
   */
  public function setListId(?int $listId): self
  {
    $this->listId = $listId;
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
  public function getListIdWithChildren(): ?int
  {
    return $this->listIdWithChildren;
  }

  /**
   * @param int|null $listIdWithChildren
   * @return self
   */
  public function setListIdWithChildren(?int $listIdWithChildren): self
  {
    $this->listIdWithChildren = $listIdWithChildren;
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
