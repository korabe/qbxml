<?php

namespace QBXML\Filters;

/**
 * Trait RefNumberRangeFilter
 * @package QBXML\Filters
 */
trait RefNumberRangeFilter
{
    /**
     * @var string
     */
    private string $FromRefNumber;

    /**
     * @var string
     */
    private string $ToRefNumber;

    /**
     * @return string
     */
    public function getFromRefNumber(): string
    {
        return $this->FromRefNumber;
    }

    /**
     * @param string $FromRefNumber
     * @return self
     */
    public function setFromRefNumber(string $FromRefNumber): self
    {
        $this->FromRefNumber = $FromRefNumber;
    }

    /**
     * @return string
     */
    public function getToRefNumber(): string
    {
        return $this->ToRefNumber;
    }

    /**
     * @param string $ToRefNumber
     * @return self
     */
    public function setToRefNumber(string $ToRefNumber): self
    {
        $this->ToRefNumber = $ToRefNumber;
    }
}