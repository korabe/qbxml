<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\ItemTypeFilter;

/**
 * Trait TransactionItemFilter
 * @package QBXML\Filters
 */
trait TransactionItemFilter
{
  /**
   * @var ?ItemTypeFilter
   */
  private ?ItemTypeFilter $ItemTypeFilter;

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
   * @return ItemTypeFilter|null
   */
  public function getItemTypeFilter(): ?ItemTypeFilter
  {
    return $this->ItemTypeFilter;
  }

  /**
   * @param ItemTypeFilter|null $ItemTypeFilter
   * @return self
   */
  public function setItemTypeFilter(?ItemTypeFilter $ItemTypeFilter): self
  {
    $this->ItemTypeFilter = $ItemTypeFilter;
    return $this;
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
    return $this;
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
    return $this;
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
    return $this;
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
    return $this;
  }

}
