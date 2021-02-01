<?php
declare(strict_types=1);

namespace QBXML\Filters;

/**
 * Class RefNumber
 *
 * @package QBXML\Filters
 */
class RefNumber extends RepeatingFilter implements \QBXML\Queries\FilterInterface
{
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return implode(
      '',
      array_map(
        static fn ($refs) => "<RefNumber>{$refs}</RefNumber>",
        $this->values
      )
    );
  }
  
}
