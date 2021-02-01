<?php
declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;
use QBXML\Enums\ActiveStatus as Status;

/**
 * Class ActiveStatusTest
 *
 * @package QBXML\Filters
 */
class ActiveStatusTest extends TestCase
{
  public function testToString()
  {
    $active_status = Status::ActiveOnly();
    $sut = new ActiveStatus($active_status);
    $expected = '<ActiveStatus>ActiveOnly</ActiveStatus>';
    $this->assertSame($expected, (string)$sut);
    
    $expected = '<ActiveStatus>InactiveOnly</ActiveStatus>';
    $sut->setActiveStatus(Status::InactiveOnly());
    $this->assertSame($expected, (string)$sut);
  }
}
