<?php
declare(strict_types=1);

namespace QBXML\Filters;


use QBXML\Queries\FilterInterface;

/**
 * Class MaxReturned
 *
 * @package QBXML\Filters
 */
class MaxReturned implements FilterInterface
{
  private int $maxReturned;
  
  public function __construct(int $max_returned)
  {
    $this->maxReturned = $max_returned;
  }
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    return "<MaxReturned>{$this->maxReturned}</MaxReturned>";
  }
  
}
