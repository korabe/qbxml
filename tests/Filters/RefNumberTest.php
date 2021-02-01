<?php
declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

/**
 * Class RefNumberTest
 *
 * @package QBXML\Filters
 */
class RefNumberTest extends TestCase
{
  public function testTString()
  {
    $ref_nos = ['1', '2', '3'];
    $sut = new RefNumber(...$ref_nos);
    $expected = '<RefNumber>1</RefNumber><RefNumber>2</RefNumber><RefNumber>3</RefNumber>';
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new RefNumber())
      ->set(...$ref_nos);
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new RefNumber())
      ->add('1')
      ->add('2')
      ->add('3');
    $this->assertSame($expected, (string)$sut);
  }
}
