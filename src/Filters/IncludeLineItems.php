<?php
declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

class IncludeLineItems implements FilterInterface
{
  private bool $includeLineItems;
  
  /**
   * IncludeLineItems constructor.
   *
   * @param  bool  $include_line_items
   */
  public function __construct(bool $include_line_items = true)
  {
    $this->includeLineItems = $include_line_items;
  }
  
  /**
   * @param  bool  $include_line_items
   * @return $this
   */
  public function setIncludeLineItems(bool $include_line_items): self
  {
    $this->includeLineItems = $include_line_items;
    return $this;
  }
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  public function __toString(): string
  {
    $include = (int)$this->includeLineItems;
    return "<IncludeLineItems>{$include}</IncludeLineItems>";
  }
  
}
