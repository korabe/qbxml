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
    private ?DateTime $FromDeletedDate;

    /**
     * @var DateTime|null
     */
    private ?DateTime $ToDeletedDate;

    /**
     * @return DateTime|null
     */
    public function getFromDeletedDate(): ?DateTime
    {
        return $this->FromDeletedDate;
    }

    /**
     * @param DateTime|null $FromDeletedDate
     * @return self
     */
    public function setFromDeletedDate(?DateTime $FromDeletedDate): self
    {
        $this->FromDeletedDate = $FromDeletedDate;
    }

    /**
     * @return DateTime|null
     */
    public function getToDeletedDate(): ?DateTime
    {
        return $this->ToDeletedDate;
    }

    /**
     * @param DateTime|null $ToDeletedDate
     * @return self
     */
    public function setToDeletedDate(?DateTime $ToDeletedDate): self
    {
        $this->ToDeletedDate = $ToDeletedDate;
    }
}