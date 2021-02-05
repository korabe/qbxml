<?php declare(strict_types=1);

namespace QBXML\Filters;

use DateTime;
use QBXML\Queries\FilterInterface;

/**
 * Class ModifiedDateRangeFilter
 * @package QBXML\Filters
 */
class ModifiedDateRangeFilter implements FilterInterface
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
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $property = '';
    $weighted_properties = ['fromModifiedDate', 'toModifiedDate'];
    foreach ($weighted_properties as $prop) {
      if (!empty($this->$prop)) {
        $property = $prop;
        break;
      }
    }
    return empty($property) ? '' : $this->toXml($property);
  }
}
