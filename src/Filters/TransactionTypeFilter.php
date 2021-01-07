<?php

namespace QBXML\Filters;

use QBXML\Enums\TxnTypeFilter;

/**
 * Trait TransactionTypeFilter
 * @package QBXML\Filters
 */
trait TransactionTypeFilter
{
    /**
     * @var TxnTypeFilter
     */
    private TxnTypeFilter $TxnTypeFilter;

    /**
     * @return TxnTypeFilter
     */
    public function getTxnTypeFilter(): TxnTypeFilter
    {
        return $this->TxnTypeFilter;
    }

    /**
     * @param TxnTypeFilter $TxnTypeFilter
     * @return self
     */
    public function setTxnTypeFilter(TxnTypeFilter $TxnTypeFilter): self
    {
        $this->TxnTypeFilter = $TxnTypeFilter;
    }
}