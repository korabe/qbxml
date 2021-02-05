<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class RefNumberRangeFilter
 * @package QBXML\Filters
 */
class RefNumberRangeFilter implements FilterInterface
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
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $property = '';
    $weighted_properties = ['fromRefNumber', 'toRefNumber'];
    foreach ($weighted_properties as $prop) {
      if (!empty($this->$prop)) {
        $property = $prop;
        break;
      }
    }
    return empty($property) ? '' : $this->toXml($property);
  }
}
