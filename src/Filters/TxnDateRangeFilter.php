<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;
use QBXML\Enums\DateMacro;

/**
 * Trait TxnDateRangeFilter
 * @package QBXML\Filters
 */
trait TxnDateRangeFilter
{
  /**
   * @var DateTime|null
   */
  private ?DateTime $fromTxnDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $toTxnDate;

  /**
   * @var DateMacro|null
   */
  private ?DateMacro $dateMacro;

  /**
   * @return DateTime|null
   */
  public function getFromTxnDate(): ?DateTime
  {
    return $this->fromTxnDate;
  }

  /**
   * @param DateTime|null $fromTxnDate
   * @return self
   */
  public function setFromTxnDate(?DateTime $fromTxnDate): self
  {
    $this->fromTxnDate = $fromTxnDate;
    return $this;
  }

  /**
   * @return DateTime|null
   */
  public function getToTxnDate(): ?DateTime
  {
    return $this->toTxnDate;
  }

  /**
   * @param DateTime|null $toTxnDate
   * @return self
   */
  public function setToTxnDate(?DateTime $toTxnDate): self
  {
    $this->toTxnDate = $toTxnDate;
    return $this;
  }
}