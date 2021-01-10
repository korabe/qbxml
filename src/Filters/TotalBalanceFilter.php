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
  private Operator $operator;

  /**
   * @var float
   */
  private float $amount;

  /**
   * @return Operator
   */
  public function getOperator(): Operator
  {
    return $this->operator;
  }

  /**
   * @param Operator $operator
   * @return self
   */
  public function setOperator(Operator $operator): self
  {
    $this->operator = $operator;
    return $this;
  }

  /**
   * @return float
   */
  public function getAmount(): float
  {
    return $this->amount;
  }

  /**
   * @param float $amount
   * @return self
   */
  public function setAmount(float $amount): self
  {
    $this->amount = $amount;
    return $this;
  }
}
