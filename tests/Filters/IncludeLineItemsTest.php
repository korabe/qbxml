<?php

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

/**
 * Class IncludeLineItemsTest
 *
 * @package QBXML\Filters
 */
class IncludeLineItemsTest extends TestCase
{
  public function testToString()
  {
    $sut = new IncludeLineItems();
    $expected = '<IncludeLineItems>1</IncludeLineItems>';
    $this->assertSame($expected, (string)$sut);
    
    $expected = '<IncludeLineItems>0</IncludeLineItems>';
    $sut->setIncludeLineItems(false);
    $this->assertSame($expected, (string)$sut);
  }
}
