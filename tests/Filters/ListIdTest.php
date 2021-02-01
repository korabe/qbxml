<?php
declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

/**
 * Class ListIdTest
 *
 * @package QBXML\Filters
 */
class ListIdTest extends TestCase
{
  public function testToString()
  {
    $listIds = ['1', '2', '3'];
    $expected = '<ListID>1</ListID><ListID>2</ListID><ListID>3</ListID>';
    $sut = (string)(new ListId(...$listIds));
    $this->assertSame($expected, $sut);
    
    $sut = (string)(new ListId())
      ->set(...$listIds);
    $this->assertSame($expected, $sut);
    
    $sut = (string)(new ListId())
      ->add('1')
      ->add('2')
      ->add('3');
    $this->assertSame($expected, $sut);
  }
}
