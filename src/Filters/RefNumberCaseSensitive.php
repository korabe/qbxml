<?php
declare(strict_types=1);


namespace QBXML\Filters;


use QBXML\Queries\FilterInterface;

class RefNumberCaseSensitive extends RepeatingFilter implements FilterInterface
{
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return implode(
      '',
      array_map(
        static fn ($refs) => "<RefNumberCaseSensitive>{$refs}</RefNumberCaseSensitive>",
        $this->values
      )
    );
  }
  
}
