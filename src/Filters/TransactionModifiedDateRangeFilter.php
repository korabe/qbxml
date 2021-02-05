<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;
use QBXML\Enums\DateMacro;
use QBXML\Queries\FilterInterface;

/**
 * Class TransactionModifiedDateRangeFilter
 * @package QBXML\Filters
 */
class TransactionModifiedDateRangeFilter implements FilterInterface
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
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $property = '';
    $weighted_properties = ['fromModifiedDate', 'toModifiedDate', 'dateMacro'];
    foreach ($weighted_properties as $prop) {
      if (!empty($this->$prop)) {
        $property = $prop;
        break;
      }
    }
    return empty($property) ? '' : $this->toXml($property);
  }
}
