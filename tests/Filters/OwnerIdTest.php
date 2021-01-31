<?php
declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

/**
 * Class OwnerIdTest
 *
 * @package QBXML\Filters
 */
class OwnerIdTest extends TestCase
{
  public function testToString()
  {
    $owner_ids = ['1', '2', '3'];
    $sut = new OwnerId(...$owner_ids);
    $expected = '<OwnerID>1</OwnerID><OwnerID>2</OwnerID><OwnerID>3</OwnerID>';
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new OwnerId())
      ->set(...$owner_ids);
    $this->assertSame($expected, (string)$sut);
    
    $sut = (new OwnerId())
      ->add('1')
      ->add('2')
      ->add('3');
    $this->assertSame($expected, (string)$sut);
  }
  
}
