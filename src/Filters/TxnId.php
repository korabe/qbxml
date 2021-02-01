<?php
declare(strict_types=1);


namespace QBXML\Filters;


use QBXML\Queries\FilterInterface;

class TxnId extends RepeatingFilter implements FilterInterface
{
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return implode(
      '',
      array_map(
        static fn ($txn_id) => "<TxnID>{$txn_id}</TxnID>",
        $this->values
      )
    );
  }
  
}
