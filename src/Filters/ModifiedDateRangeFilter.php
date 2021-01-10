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
    private ?DateTime $FromModifiedDate;

    /**
     * @var DateTime|null
     */
    private ?DateTime $ToModifiedDate;

    /**
     * @return DateTime|null
     */
    public function getFromModifiedDate(): ?DateTime
    {
        return $this->FromModifiedDate;
    }

    /**
     * @param DateTime|null $FromModifiedDate
     * @return self
     */
    public function setFromModifiedDate(?DateTime $FromModifiedDate): self
    {
        $this->FromModifiedDate = $FromModifiedDate;
    }

    /**
     * @return DateTime|null
     */
    public function getToModifiedDate(): ?DateTime
    {
        return $this->ToModifiedDate;
    }

    /**
     * @param DateTime|null $ToModifiedDate
     * @return self
     */
    public function setToModifiedDate(?DateTime $ToModifiedDate): self
    {
        $this->ToModifiedDate = $ToModifiedDate;
    }
}