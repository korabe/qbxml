<?php

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

class FullNameTest extends TestCase
{
  public function testToString()
  {
    $fullNames = ['Foo', 'Bar', 'Baz'];
    $expected = '<FullName>Foo</FullName><FullName>Bar</FullName><FullName>Baz</FullName>';
    $sut = new FullName(...$fullNames);
    $this->assertSame($expected, (string)$sut);
    
    $sut = (string)(new FullName())
      ->set(...$fullNames);
    $this->assertSame($expected, (string)$sut);
    
    $sut = (string)(new FullName)
      ->add('Foo')
      ->add('Bar')
      ->add('Baz');
    $this->assertSame($expected, $sut);
    
  }
}
