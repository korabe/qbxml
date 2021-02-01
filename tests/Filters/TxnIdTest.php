<?php

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

class TxnIdTest extends TestCase
{
  public function testToString()
  {
    $txn_ids = ['1', '2', '3'];
    $sut = new TxnId(...$txn_ids);
    $expected = '<TxnID>1</TxnID><TxnID>2</TxnID><TxnID>3</TxnID>';
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new TxnId())
      ->set(...$txn_ids);
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new TxnId())
      ->add('1')
      ->add('2')
      ->add('3');
    $this->assertSame($expected, (string)$sut);
  }
}
