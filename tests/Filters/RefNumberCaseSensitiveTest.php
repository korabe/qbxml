<?php

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

class RefNumberCaseSensitiveTest extends TestCase
{
  
  public function test__toString()
  {
    $ref_nos = ['a1', 'b2', 'c3'];
    $sut = new RefNumberCaseSensitive(...$ref_nos);
    $expected = '<RefNumberCaseSensitive>a1</RefNumberCaseSensitive><RefNumberCaseSensitive>b2</RefNumberCaseSensitive><RefNumberCaseSensitive>c3</RefNumberCaseSensitive>';
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new RefNumberCaseSensitive())
      ->set(...$ref_nos);
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new RefNumberCaseSensitive())
      ->add('a1')
      ->add('b2')
      ->add('c3');
    $this->assertSame($expected, (string)$sut);
  }
  
}
