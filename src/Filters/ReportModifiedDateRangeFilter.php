<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;
use QBXML\Queries\FilterInterface;

/**
 * Class ReportModifiedDateRangeFilter
 * @package QBXML\Filters
 */
class ReportModifiedDateRangeFilter implements FilterInterface
{
  /**
   * @var DateTime|null
   */
  private ?DateTime $fromReportModifiedDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $toReportModifiedDate;

  /**
   * @return DateTime|null
   */
  public function getFromReportModifiedDate(): ?DateTime
  {
    return $this->fromReportModifiedDate;
  }

  /**
   * @param DateTime|null $fromReportModifiedDate
   * @return self
   */
  public function setFromReportModifiedDate(?DateTime $fromReportModifiedDate): self
  {
    $this->fromReportModifiedDate = $fromReportModifiedDate;
    return $this;
  }

  /**
   * @return DateTime|null
   */
  public function getToReportModifiedDate(): ?DateTime
  {
    return $this->toReportModifiedDate;
  }

  /**
   * @param DateTime|null $toReportModifiedDate
   * @return self
   */
  public function setToReportModifiedDate(?DateTime $toReportModifiedDate): self
  {
    $this->toReportModifiedDate = $toReportModifiedDate;
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
