<?php

namespace QBXML\Queries;

/**
 * Interface FilterInterface
 * @package QBXML\Queries
 */
interface FilterInterface
{
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string;
}
