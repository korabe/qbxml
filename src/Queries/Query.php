<?php declare(strict_types=1);

namespace QBXML\Queries;

/**
 * Class Query
 * @package QBXML\Queries
 */
class Query implements QueryInterface
{
  protected string $name;

  /**
   * @inheritDoc
   */
  public function __construct(string $name)
  {
    $this->name = $name;
  }

  /**
   * @inheritDoc
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    // TODO: Implement __toString() method.
  }

  /**
   * @inheritDoc
   */
  public function merge(QueryInterface $query): QueryInterface
  {
    // TODO: Implement merge() method.
  }
}
