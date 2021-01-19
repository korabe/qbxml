<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\TxnTypeFilter;
use QBXML\Queries\FilterInterface;

/**
 * Class ReportTxnTypeFilter
 * @package QBXML\Filters
 */
class ReportTxnTypeFilter implements FilterInterface
{
  /**
   * @var TxnTypeFilter
   */
  private TxnTypeFilter $txnTypeFilter;

  /**
   * @return TxnTypeFilter
   */
  public function getTxnTypeFilter(): TxnTypeFilter
  {
    return $this->txnTypeFilter;
  }

  /**
   * @param TxnTypeFilter $txnTypeFilter
   * @return self
   */
  public function setTxnTypeFilter(TxnTypeFilter $txnTypeFilter): self
  {
    $this->txnTypeFilter = $txnTypeFilter;
    return $this;
  }
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    // TODO: Implement __toString() method.
  }
}
