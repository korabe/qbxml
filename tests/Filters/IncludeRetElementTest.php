<?php

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

class IncludeRetElementTest extends TestCase
{
  public function testToString()
  {
    $elements = ['Foo', 'Bar', 'Baz'];
    $sut = new IncludeRetElement(...$elements);
    $expected = '<IncludeRetElement>Foo</IncludeRetElement><IncludeRetElement>Bar</IncludeRetElement><IncludeRetElement>Baz</IncludeRetElement>';
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new IncludeRetElement())
      ->set(...$elements);
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new IncludeRetElement())
      ->add('Foo')
      ->add('Bar')
      ->add('Baz');
    $this->assertSame($expected, (string)$sut);
  }
}
