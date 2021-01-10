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
  private ?DateTime $FromReportModifiedDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $ToReportModifiedDate;

  /**
   * @return DateTime|null
   */
  public function getFromReportModifiedDate(): ?DateTime
  {
    return $this->FromReportModifiedDate;
  }

  /**
   * @param DateTime|null $FromReportModifiedDate
   * @return self
   */
  public function setFromReportModifiedDate(?DateTime $FromReportModifiedDate): self
  {
    $this->FromReportModifiedDate = $FromReportModifiedDate;
    return $this;
  }


  /**
   * @return DateTime|null
   */
  public function getToReportModifiedDate(): ?DateTime
  {
    return $this->ToReportModifiedDate;
  }

  /**
   * @param DateTime|null $ToReportModifiedDate
   * @return self
   */
  public function setToReportModifiedDate(?DateTime $ToReportModifiedDate): self
  {
    $this->ToReportModifiedDate = $ToReportModifiedDate;
    return $this;
  }

}