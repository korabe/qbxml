<?php declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\Operator;
use QBXML\Queries\FilterInterface;

/**
 * Class TotalBalanceFilter
 * @package QBXML\Filters
 */
class TotalBalanceFilter implements FilterInterface
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
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $property = '';
    $weighted_properties = ['operator', 'amount'];
    foreach ($weighted_properties as $prop) {
      if (!empty($this->$prop)) {
        $property = $prop;
        break;
      }
    }
    return empty($property) ? '' : $this->toXml($property);
  }
}
