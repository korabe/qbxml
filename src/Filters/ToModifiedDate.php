<?php
declare(strict_types=1);

namespace QBXML\Filters;

/**
 * Class ToModifiedDate
 *
 * @package QBXML\Filters
 */
class ToModifiedDate implements \QBXML\Queries\FilterInterface
{
  private \DateTimeInterface $toModifiedDate;
  
  /**
   * ToModifiedDate constructor.
   *
   * @param  \DateTimeInterface  $to_modified_date
   */
  public function __construct(\DateTimeInterface $to_modified_date)
  {
    $this->toModifiedDate = $to_modified_date;
  }
  
  /**
   * @param  \DateTimeInterface  $to_modified_date
   * @return $this
   */
  public function setToModifiedDate(\DateTimeInterface $to_modified_date): self
  {
    $this->toModifiedDate = $to_modified_date;
    return $this;
  }
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return "<ToModifiedDate>{$this->toModifiedDate->format('Y-m-d')}</ToModifiedDate>";
  }
  
}
