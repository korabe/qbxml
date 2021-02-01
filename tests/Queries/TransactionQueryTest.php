<?php
declare(strict_types=1);

namespace QBXML\Queries;

use PHPUnit\Framework\TestCase;
use QBXML\Enums\TransactionQueryType;
use QBXML\Filters\IncludeRetElement;
use QBXML\Filters\MaxReturned;
use QBXML\Filters\RefNumber;
use QBXML\Filters\TxnId;

class TransactionQueryTest extends TestCase
{
  public function testToString()
  {
    $sut = (new TransactionQuery(TransactionQueryType::CreditCardCharge()))
      ->addFilter(new TxnId(...['1', '2', '3']))
      ->addFilter(new RefNumber(...['a1', 'b2']))
      ->addFilter(new MaxReturned(3))
      ->addFilter(new IncludeRetElement(...['FooElement', 'BazElement']));
    $expected = '<CreditCardChargeQueryRq>'
      . '<TxnID>1</TxnID><TxnID>2</TxnID><TxnID>3</TxnID>'
      . '<RefNumber>a1</RefNumber><RefNumber>b2</RefNumber>'
      . '<MaxReturned>3</MaxReturned>'
      . '<IncludeRetElement>FooElement</IncludeRetElement><IncludeRetElement>BazElement</IncludeRetElement>'
      . '</CreditCardChargeQueryRq>';
    $this->assertSame($expected, (string)$sut);
  }
}
