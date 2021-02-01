<?php

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;
use QBXML\Enums\AccountType as Type;

class AccountTypeTest extends TestCase
{
  
  public function test__toString()
  {
    $sut = new AccountType(Type::CostOfGoodsSold());
    $expected = '<AccountType>CostOfGoodsSold</AccountType>';
    $this->assertSame($expected, (string)$sut);
    
    $expected = '<AccountType>Expense</AccountType>';
    $sut->setAccountType(Type::Expense());
    $this->assertSame($expected, (string)$sut);
  }
  
}
