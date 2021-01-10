<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;

/**
 * Trait ReportModifiedDateRangeFilter
 * @package QBXML\Filters
 */
trait ReportModifiedDateRangeFilter
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
}
