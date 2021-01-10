<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\TxnTypeFilter;

/**
 * Trait ReportTxnTypeFilter
 * @package QBXML\Filters
 */
trait ReportTxnTypeFilter
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
}