<?php

namespace QBXML\Queries;

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
   * @return void
   */
  public function merge(QueryInterface $query): void;

  /**
   * @param  \QBXML\Queries\FilterInterface  $filter
   * @return $this
   */
  public function addFilter(FilterInterface $filter): self;
}
