<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\Operator;

/**
 * Trait TotalBalanceFilter
 * @package QBXML\Filters
 */
trait TotalBalanceFilter
{
    /**
     * @var Operator
     */
    private Operator $Operator;

    /**
     * @var float
     */
    private float $Amount;

    /**
     * @return Operator
     */
    public function getOperator(): Operator
    {
        return $this->Operator;
    }

    /**
     * @param Operator $Operator
     * @return self
     */
    public function setOperator(Operator $Operator): self
    {
        $this->Operator = $Operator;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return self
     */
    public function setAmount(float $Amount): self
    {
        $this->Amount = $Amount;
    }
}
