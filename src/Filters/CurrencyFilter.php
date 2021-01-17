<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class CurrencyFilter
 * @package QBXML\Filters
 */
class CurrencyFilter implements FilterInterface
{
  /**
   * @var ?int
   */
  private ?int $listId;

  /**
   * @var ?string
   */
  private ?string $fullName;

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
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    // TODO: Implement __toString() method.
  }
}
