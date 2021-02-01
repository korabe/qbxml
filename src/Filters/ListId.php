<?php
declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class ListId
 *
 * @package QBXML\Filters
 */
class ListId extends RepeatingFilter implements FilterInterface
{
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return implode(
      '',
      array_map(
        static fn ($listId) => "<ListID>{$listId}</ListID>",
        $this->values
      )
    );
  }
  
}
