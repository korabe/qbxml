<?php
declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

class IncludeLinkedTxns implements FilterInterface
{
  private bool $includeLinkedTxns;
  
  /**
   * IncludeLinkedTxns constructor.
   *
   * @param  bool  $include_linked_txns
   */
  public function __construct(bool $include_linked_txns = true)
  {
    $this->includeLinkedTxns = $include_linked_txns;
  }
  
  /**
   * @param  bool  $include_linked_txns
   */
  public function setIncludeLinkedTxns(bool $include_linked_txns)
  {
    $this->includeLinkedTxns = $include_linked_txns;
  }
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $include = (int)$this->includeLinkedTxns;
    return "<IncludeLinkedTxns>{$include}</IncludeLinkedTxns>";
  }
  
}
