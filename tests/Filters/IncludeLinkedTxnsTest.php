<?php
declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

/**
 * Class IncludeLinkedTxnsTest
 *
 * @package QBXML\Filters
 */
class IncludeLinkedTxnsTest extends TestCase
{
  public function testToString()
  {
    $sut = new IncludeLinkedTxns();
    $expected = '<IncludeLinkedTxns>1</IncludeLinkedTxns>';
    $this->assertSame($expected, (string)$sut);
    
    $expected = '<IncludeLinkedTxns>0</IncludeLinkedTxns>';
    $sut->setIncludeLinkedTxns(false);
    $this->assertSame($expected, (string)$sut);
  }
}
