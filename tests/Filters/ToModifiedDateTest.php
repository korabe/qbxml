<?php

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

/**
 * Class ToModifiedDateTest
 *
 * @package QBXML\Filters
 */
class ToModifiedDateTest extends TestCase
{
  public function testToString()
  {
    $sut = new ToModifiedDate(new \DateTimeImmutable('20210101'));
    $expected = '<ToModifiedDate>2021-01-01</ToModifiedDate>';
    $this->assertSame($expected, (string)$sut);
    
    $expected = '<ToModifiedDate>2020-02-20</ToModifiedDate>';
    $sut->setToModifiedDate(new \DateTimeImmutable('20200220'));
    $this->assertSame($expected, (string)$sut);
  }
}
