<?php
declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\AccountType as Type;

class AccountType implements \QBXML\Queries\FilterInterface
{
  private Type $accountType;
  
  /**
   * AccountType constructor.
   *
   * @param  Type  $account_type
   */
  public function __construct(Type $account_type)
  {
    $this->accountType = $account_type;
  }
  
  /**
   * @param  Type  $account_type
   * @return $this
   */
  public function setAccountType(Type $account_type): self
  {
    $this->accountType = $account_type;
    return $this;
  }
  
  /**
   * @inheritDoc
   */
  public function __toString(): string
  {
    return "<AccountType>{$this->accountType}</AccountType>";
  }
}
