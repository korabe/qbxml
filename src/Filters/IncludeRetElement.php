<?php
declare(strict_types=1);

namespace QBXML\Filters;


use QBXML\Queries\FilterInterface;

/**
 * Class IncludeRetElement
 *
 * @package QBXML\Filters
 */
class IncludeRetElement extends RepeatingFilter implements FilterInterface
{
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return implode(
      '',
      array_map(
        static fn ($element) => "<IncludeRetElement>{$element}</IncludeRetElement>",
        $this->values
      )
    );
  }
  
}
