<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\AccountTypeFilter;
use QBXML\Queries\FilterInterface;

/**
 * Class ReportAccountFilter
 * @package QBXML\Filters
 */
class ReportAccountFilter implements FilterInterface
{
  /**
   * @var ?AccountTypeFilter
   */
  private ?AccountTypeFilter $accountTypeFilter;

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
   * @return AccountTypeFilter|null
   */
  public function getAccountTypeFilter(): ?AccountTypeFilter
  {
    return $this->accountTypeFilter;
  }

  /**
   * @param AccountTypeFilter|null $accountTypeFilter
   * @return self
   */
  public function setAccountTypeFilter(?AccountTypeFilter $accountTypeFilter): self
  {
    $this->accountTypeFilter = $accountTypeFilter;
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
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $property = '';
    $weighted_properties = ['listId', 'fullName', 'listIdWithChildren', 'fullNameWithChildren'];
    foreach ($weighted_properties as $prop) {
      if (!empty($this->$prop)) {
        $property = $prop;
        break;
      }
    }
    return empty($property) ? '' : $this->toXml($property);
  }
}
