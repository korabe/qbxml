<?php
declare(strict_types=1);


namespace QBXML\Filters;


class OwnerId extends RepeatingFilter implements \QBXML\Queries\FilterInterface
{
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return implode(
      '',
      array_map(
        static fn ($owner_id) => "<OwnerID>{$owner_id}</OwnerID>",
        $this->values
      )
    );
  }
  
}
