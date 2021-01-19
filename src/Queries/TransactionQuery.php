<?php declare(strict_types=1);

namespace QBXML\Queries;

use QBXML\Enums\TransactionQueryType;

/**
 * Class TransactionQuery
 * @package QBXML\Queries
 */
class TransactionQuery extends Query implements QueryInterface
{
  /**
   * TransactionQuery constructor
   *
   * @param TransactionQueryType $name
   */
  public function __construct(TransactionQueryType $name)
  {
    parent::__construct((string)$name);
  }
}
