<?php declare(strict_types=1);

namespace QBXML\Queries;

use Illuminate\Support\Collection;

/**
 * Class Query
 *
 * @package QBXML\Queries
 */
class Query implements QueryInterface
{
  protected string $name;
  protected Collection $filters;

  /**
   * @inheritDoc
   */
  public function __construct(string $name, Collection $filters = null)
  {
    $this->name = $name;
    $this->filters = $filters ?: new Collection();
  }

  /**
   * @inheritDoc
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param  \QBXML\Queries\FilterInterface  $filter
   * @return $this
   */
  public function addFilter(FilterInterface $filter): self
  {
    $this->filters->add($filter);
    return $this;
  }

  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    $tag = "{$this->name}QueryRq";
    $fn = static fn ($qbxml, $filter) => $qbxml . (string)$filter;
    return "<{$tag}>{$this->filters->reduce($fn, '')}</{$tag}>";
  }

  /**
   * @inheritDoc
   */
  public function merge(QueryInterface $query): QueryInterface
  {
    // TODO: Implement merge() method.
  }
}
