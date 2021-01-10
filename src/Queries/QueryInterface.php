<?php

namespace QBXML\Queries;

use Spatie\Enum\Enum;

/**
 * QBXML queries fall in one of three categories:
 *   - List query
 *   - Transaction query
 *   - Special transaction query
 *
 * Interface QueryInterface
 * @package QBXML\Queries
 */
interface QueryInterface
{
  /**
   * Return the name of the query
   *
   * @return string
   */
  public function getName(): string;

  /**
   * Return the query represented as QBXML
   *
   * @return string
   */
  public function __toString(): string;

  /**
   *
   * @param QueryInterface $query
   * @return QueryInterface
   */
  public function merge(QueryInterface $query): QueryInterface;
}