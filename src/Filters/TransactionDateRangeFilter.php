<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;
use QBXML\Enums\DateMacro;

/**
 * Trait TransactionDateRangeFilter
 * @package QBXML\Filters
 */
trait TransactionDateRangeFilter
{
  /**
   * @var DateTime|null
   */
  private ?DateTime $FromTxnDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $ToTxnDate;

  /**
   * @var DateMacro|null
   */
  private ?DateMacro $DateMacro;

  /**
   * @return DateTime|null
   */
  public function getFromTxnDate(): ?DateTime
  {
    return $this->FromTxnDate;
  }

  /**
   * @param DateTime|null $FromTxnDate
   * @return self
   */
  public function setFromTxnDate(?DateTime $FromTxnDate): self
  {
    $this->FromTxnDate = $FromTxnDate;
    return $this;
  }


  /**
   * @return DateTime|null
   */
  public function getToTxnDate(): ?DateTime
  {
    return $this->ToTxnDate;
  }

  /**
   * @param DateTime|null $ToTxnDate
   * @return self
   */
  public function setToTxnDate(?DateTime $ToTxnDate): self
  {
    $this->ToTxnDate = $ToTxnDate;
    return $this;
  }

}