<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;

/**
 * Trait ModifiedDateRangeFilter
 * @package QBXML\Filters
 */
trait ModifiedDateRangeFilter
{
  /**
   * @var DateTime|null
   */
  private ?DateTime $fromModifiedDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $toModifiedDate;

  /**
   * @return DateTime|null
   */
  public function getFromModifiedDate(): ?DateTime
  {
    return $this->fromModifiedDate;
  }

  /**
   * @param DateTime|null $fromModifiedDate
   * @return self
   */
  public function setFromModifiedDate(?DateTime $fromModifiedDate): self
  {
    $this->fromModifiedDate = $fromModifiedDate;
    return $this;
  }

  /**
   * @return DateTime|null
   */
  public function getToModifiedDate(): ?DateTime
  {
    return $this->toModifiedDate;
  }

  /**
   * @param DateTime|null $toModifiedDate
   * @return self
   */
  public function setToModifiedDate(?DateTime $toModifiedDate): self
  {
    $this->toModifiedDate = $toModifiedDate;
    return $this;
  }
}