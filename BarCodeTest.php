<?php

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

class BarCodeTest extends TestCase
{
  
  public function testToString()
  {
    $bar_codes = ['1010', '1011', '1101'];
    $sut = new BarCode(...$bar_codes);
    $expected = '<BarCodeValue>1010</BarCodeValue><BarCodeValue>1011</BarCodeValue><BarCodeValue>1101</BarCodeValue>';
    $this->assertEquals($expected, (string)$sut);
    
    $sut = (new BarCode())
      ->set(...$bar_codes);
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new BarCode())
      ->add('1010')
      ->add('1011')
      ->add('1101');
    $this->assertSame($expected, (string)$sut);
  }
  
}
