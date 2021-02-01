<?php
declare(strict_types=1);


namespace QBXML\Filters;


class BarCode extends RepeatingFilter implements \QBXML\Queries\FilterInterface
{
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return implode(
      '',
      array_map(
        static fn ($code) => "<BarCodeValue>{$code}</BarCodeValue>",
        $this->values
      )
    );
  }
  
}
