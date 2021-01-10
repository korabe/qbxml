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