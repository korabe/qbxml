<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;

/**
 * Trait DeletedDateRangeFilter
 * @package QBXML\Filters
 */
trait DeletedDateRangeFilter
{
  /**
   * @var DateTime|null
   */
  private ?DateTime $fromDeletedDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $toDeletedDate;

  /**
   * @return DateTime|null
   */
  public function getFromDeletedDate(): ?DateTime
  {
    return $this->fromDeletedDate;
  }

  /**
   * @param DateTime|null $fromDeletedDate
   * @return self
   */
  public function setFromDeletedDate(?DateTime $fromDeletedDate): self
  {
    $this->fromDeletedDate = $fromDeletedDate;
    return $this;
  }

  /**
   * @return DateTime|null
   */
  public function getToDeletedDate(): ?DateTime
  {
    return $this->toDeletedDate;
  }

  /**
   * @param DateTime|null $toDeletedDate
   * @return self
   */
  public function setToDeletedDate(?DateTime $toDeletedDate): self
  {
    $this->toDeletedDate = $toDeletedDate;
    return $this;
  }
}