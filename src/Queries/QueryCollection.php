<?php declare(strict_types=1);

namespace QBXML\Queries;

use Illuminate\Support\Collection;

/**
 * Class QueryCollection
 * @package QBXML\Queries
 */
class QueryCollection extends Collection
{
  /**
   * Add a QBXML query
   *
   * @param QueryInterface $query
   * @return $this
   */
  public function addQuery(QueryInterface $query): self
  {
    $key = $query->getName();
    if ($this->offsetExists($key)) {
      $query->merge($this->offsetGet($key));
    }
    $this->offsetSet($key, $query);
    return $this;
  }
}
