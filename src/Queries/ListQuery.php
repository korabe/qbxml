<?php declare(strict_types=1);

namespace QBXML\Queries;

use QBXML\Enums\ListQueryType;

/**
 * Class ListQuery
 * @package QBXML\Queries
 */
class ListQuery extends Query
{
  /**
   * ListQuery constructor
   *
   * @param ListQueryType $name
   */
  public function __construct(ListQueryType $name)
  {
    parent::__construct((string)$name);
  }
}
