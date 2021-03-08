<?php
declare(strict_types=1);

namespace QBXML\Filters;

use QBXML\Enums\MatchCriterion;

class MatchCriterionTest extends \PHPUnit\Framework\TestCase
{
  public function testStartsWith()
  {
    $sut = MatchCriterion::StartsWith();
    $expected = 'StartsWith';
    $actual = (string)$sut;
    $this->assertSame($expected, $actual);
  }

  public function testContains()
  {
    $sut = MatchCriterion::Contains();
    $expected = 'Contains';
    $actual = (string)$sut;
    $this->assertSame($expected, $actual);
  }

  public function testEndsWith()
  {
    $sut = MatchCriterion::EndsWith();
    $expected = 'EndsWith';
    $actual = (string)$sut;
    $this->assertSame($expected, $actual);
  }
}
