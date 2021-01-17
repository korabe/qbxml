<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;
use QBXML\Queries\FilterInterface;

/**
 * Class DeletedDateRangeFilter
 * @package QBXML\Filters
 */
class DeletedDateRangeFilter implements FilterInterface
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
