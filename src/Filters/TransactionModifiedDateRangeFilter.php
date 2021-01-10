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
  private ?DateTime $fromModifiedDate;

  /**
   * @var DateTime|null
   */
  private ?DateTime $toModifiedDate;

  /**
   * @var DateMacro|null
   */
  private ?DateMacro $dateMacro;

  /**
   * @return DateTime|null
   */
  public function getFromModifiedDate(): ?DateTime
  {
    return $this->fromModifiedDate;
  }

  /**
   * @param DateTime|null $fromModifiedDate
   * @return self
   */
  public function setFromModifiedDate(?DateTime $fromModifiedDate): self
  {
    $this->fromModifiedDate = $fromModifiedDate;
    return $this;
  }

  /**
   * @return DateTime|null
   */
  public function getToModifiedDate(): ?DateTime
  {
    return $this->toModifiedDate;
  }

  /**
   * @param DateTime|null $toModifiedDate
   * @return self
   */
  public function setToModifiedDate(?DateTime $toModifiedDate): self
  {
    $this->toModifiedDate = $toModifiedDate;
    return $this;
  }

  /**
   * @return DateMacro|null
   */
  public function getDateMacro(): ?DateMacro
  {
    return $this->dateMacro;
  }

  /**
   * @param DateMacro|null $dateMacro
   * @return self
   */
  public function setDateMacro(?DateMacro $dateMacro): self
  {
    $this->dateMacro = $dateMacro;
    return $this;
  }
}
