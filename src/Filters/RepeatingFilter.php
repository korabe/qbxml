<?php
declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Queries\FilterInterface;

/**
 * Class RepeatingFilter
 *
 * @package QBXML\Filters
 */
abstract class RepeatingFilter implements FilterInterface
{
  protected array $values = [];
  
  /**
   * Returns the filter's QBXML
   *
   * @return string
   */
  abstract public function __toString(): string;
  
  public function __construct(string ...$values)
  {
    $this->values = $values;
  }
  
  public function set(string ...$values): self
  {
    $this->values = $values;
    return $this;
  }
  
  public function add(string $value): self
  {
    $this->values[] = $value;
    return $this;
  }
}
