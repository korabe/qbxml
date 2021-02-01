<?php
declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

/**
 * Class FromModifiedDateTest
 *
 * @package QBXML\Filters
 */
class FromModifiedDateTest extends TestCase
{
  
  public function testToString()
  {
    $from_modified_date = new \DateTimeImmutable('20210101');
    $expected = '<FromModifiedDate>2021-01-01</FromModifiedDate>';
    $sut = new FromModifiedDate($from_modified_date);
    $this->assertSame($expected, (string)$sut);
    
    $expected = '<FromModifiedDate>2020-02-20</FromModifiedDate>';
    $sut->setFromModifiedDate(new \DateTimeImmutable('20200220'));
    $this->assertSame($expected, (string)$sut);
  }
  
  
  
}
