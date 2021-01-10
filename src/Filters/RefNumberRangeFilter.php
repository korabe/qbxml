<?php declare(strict_types=1);

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
  private string $fromRefNumber;

  /**
   * @var string
   */
  private string $toRefNumber;

  /**
   * @return string
   */
  public function getFromRefNumber(): string
  {
    return $this->fromRefNumber;
  }

  /**
   * @param string $fromRefNumber
   * @return self
   */
  public function setFromRefNumber(string $fromRefNumber): self
  {
    $this->fromRefNumber = $fromRefNumber;
    return $this;
  }

  /**
   * @return string
   */
  public function getToRefNumber(): string
  {
    return $this->toRefNumber;
  }

  /**
   * @param string $toRefNumber
   * @return self
   */
  public function setToRefNumber(string $toRefNumber): self
  {
    $this->toRefNumber = $toRefNumber;
    return $this;
  }
}