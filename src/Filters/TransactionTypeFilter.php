<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\TxnTypeFilter;
use QBXML\Queries\FilterInterface;

/**
 * Class TransactionTypeFilter
 * @package QBXML\Filters
 */
class TransactionTypeFilter implements FilterInterface
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
    return "<TxnTypeFilter>{$this->txnTypeFilter}</TxnTypeFilter>";
  }
}
