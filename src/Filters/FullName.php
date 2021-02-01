<?php
declare(strict_types=1);


namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class FullName
 *
 * @package QBXML\Filters
 */
class FullName extends RepeatingFilter implements FilterInterface
{
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return implode(
      '',
      array_map(
        static fn ($fullName) => "<FullName>{$fullName}</FullName>",
        $this->values)
    );
  }
  
}
