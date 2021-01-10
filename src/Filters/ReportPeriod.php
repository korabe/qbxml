<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;

/**
 * Trait ReportPeriod
 * @package QBXML\Filters
 */
trait ReportPeriod
{
  /**
   * @var DateTime|null
   */
  private ?DateTime $fromReportDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $toReportDate;

  /**
   * @return DateTime|null
   */
  public function getFromReportDate(): ?DateTime
  {
    return $this->fromReportDate;
  }

  /**
   * @param DateTime|null $fromReportDate
   * @return self
   */
  public function setFromReportDate(?DateTime $fromReportDate): self
  {
    $this->fromReportDate = $fromReportDate;
    return $this;
  }

  /**
   * @return DateTime|null
   */
  public function getToReportDate(): ?DateTime
  {
    return $this->toReportDate;
  }

  /**
   * @param DateTime|null $toReportDate
   * @return self
   */
  public function setToReportDate(?DateTime $toReportDate): self
  {
    $this->toReportDate = $toReportDate;
    return $this;
  }
}
