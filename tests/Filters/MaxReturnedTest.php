<?php
declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

/**
 * Class MaxReturnedTest
 *
 * @package QBXML\Filters
 */
class MaxReturnedTest extends TestCase
{
  public function testToString()
  {
    $sut = new MaxReturned(10);
    $expected = '<MaxReturned>10</MaxReturned>';
    $this->assertSame($expected, (string)$sut);
  }
}
