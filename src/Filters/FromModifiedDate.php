<?php
declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class FromModifiedDate
 *
 * @package QBXML\Filters
 */
class FromModifiedDate implements FilterInterface
{
  private \DateTimeInterface $fromModifiedDate;
  
  /**
   * FromModifiedDate constructor.
   *
   * @param  \DateTimeInterface  $from_modified_date
   */
  public function __construct(\DateTimeInterface $from_modified_date)
  {
    $this->fromModifiedDate = $from_modified_date;
  }
  
  /**
   * @param  \DateTimeInterface  $from_modified_date
   * @return $this
   */
  public function setFromModifiedDate(\DateTimeInterface $from_modified_date): self
  {
    $this->fromModifiedDate = $from_modified_date;
    return $this;
  }
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return "<FromModifiedDate>{$this->fromModifiedDate->format('Y-m-d')}</FromModifiedDate>";
  }
  
}
