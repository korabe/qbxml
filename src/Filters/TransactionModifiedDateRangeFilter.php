<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;
use QBXML\Enums\DateMacro;

/**
 * Trait TransactionModifiedDateRangeFilter
 * @package QBXML\Filters
 */
trait TransactionModifiedDateRangeFilter
{
  /**
   * @var DateTime|null
   */
  private ?DateTime $FromModifiedDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $ToModifiedDate;

  /**
   * @var DateMacro|null
   */
  private ?DateMacro $DateMacro;

  /**
   * @return DateTime|null
   */
  public function getFromModifiedDate(): ?DateTime
  {
    return $this->FromModifiedDate;
  }

  /**
   * @param DateTime|null $FromModifiedDate
   * @return self
   */
  public function setFromModifiedDate(?DateTime $FromModifiedDate): self
  {
    $this->FromModifiedDate = $FromModifiedDate;
    return $this;
  }


  /**
   * @return DateTime|null
   */
  public function getToModifiedDate(): ?DateTime
  {
    return $this->ToModifiedDate;
  }

  /**
   * @param DateTime|null $ToModifiedDate
   * @return self
   */
  public function setToModifiedDate(?DateTime $ToModifiedDate): self
  {
    $this->ToModifiedDate = $ToModifiedDate;
    return $this;
  }


  /**
   * @return DateMacro|null
   */
  public function getDateMacro(): ?DateMacro
  {
    return $this->DateMacro;
  }

  /**
   * @param DateMacro|null $DateMacro
   * @return self
   */
  public function setDateMacro(?DateMacro $DateMacro): self
  {
    $this->DateMacro = $DateMacro;
    return $this;
  }

}