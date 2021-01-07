<?php

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
    private ?DateTime $FromReportDate;

    /**
     * @var DateTime|null
     */
    private ?DateTime $ToReportDate;

    /**
     * @return DateTime|null
     */
    public function getFromReportDate(): ?DateTime
    {
        return $this->FromReportDate;
    }

    /**
     * @param DateTime|null $FromReportDate
     * @return self
     */
    public function setFromReportDate(?DateTime $FromReportDate): self
    {
        $this->FromReportDate = $FromReportDate;
    }

    /**
     * @return DateTime|null
     */
    public function getToReportDate(): ?DateTime
    {
        return $this->ToReportDate;
    }

    /**
     * @param DateTime|null $ToReportDate
     * @return self
     */
    public function setToReportDate(?DateTime $ToReportDate): self
    {
        $this->ToReportDate = $ToReportDate;
    }
}