<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class NameRangeFilter
 * @package QBXML\Filters
 */
class NameRangeFilter implements FilterInterface
{
  /**
   * @var ?string
   */
  private ?string $fromName;

  /**
   * @var ?string
   */
  private ?string $toName;

  /**
   * @return string|null
   */
  public function getFromName(): ?string
  {
    return $this->fromName;
  }

  /**
   * @param string|null $fromName
   * @return self
   */
  public function setFromName(?string $fromName): self
  {
    $this->fromName = $fromName;
    return $this;
  }

  /**
   * @return string|null
   */
  public function getToName(): ?string
  {
    return $this->toName;
  }

  /**
   * @param string|null $toName
   * @return  self
   */
  public function setToName(?string $toName): self
  {
    $this->toName = $toName;
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
