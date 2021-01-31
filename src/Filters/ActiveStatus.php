<?php
declare(strict_types=1);


namespace QBXML\Filters;

/**
 * Class ActiveStatus
 *
 * @package QBXML\Filters
 */
class ActiveStatus implements \QBXML\Queries\FilterInterface
{
  private \QBXML\Enums\ActiveStatus $activeStatus;
  
  /**
   * ActiveStatus constructor.
   *
   * @param  \QBXML\Enums\ActiveStatus  $active_status
   */
  public function __construct(\QBXML\Enums\ActiveStatus $active_status)
  {
    $this->activeStatus = $active_status;
  }
  
  /**
   * @param  \QBXML\Enums\ActiveStatus  $active_status
   *
   * @return $this
   */
  public function setActiveStatus(\QBXML\Enums\ActiveStatus $active_status): self
  {
    $this->activeStatus = $active_status;
    return $this;
  }
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return "<ActiveStatus>{$this->activeStatus}</ActiveStatus>";
  }
  
}
