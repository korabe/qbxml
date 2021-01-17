<?php declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;

class AccountFilterTest extends TestCase
{
  
  public function testSetFullName()
  {
  }
  
  public function testGetFullName()
  {
  }
  
  public function testGetFullNameWithChildren()
  {
  }
  
  public function testSetFullNameWithChildren()
  {
  }
  
  /**
   * Test __toString() given multiple properties set
   *
   * This test demonstrates that there may only be one property type present in
   * the filter. Properties are are preferred in order of listId, fullName,
   * listIdWithChildren, then fullNameWithChildren. Note listId and fullName
   * may have more than one child per filter.
   */
  public function test__toString()
  {
    // Test all properties are set but only listId property is output
    $sut = new AccountFilter();
    $sut->setListId([1, 2])
      ->setFullName(['Foo foo', 'Bar bar'])
      ->setListIdWithChildren('1A2B3C4D5F')
      ->setFullNameWithChildren('Direct Sales:Allowable');
    $expected = '<AccountFilter><ListID>1</ListID><ListID>2</ListID></AccountFilter>';
    $actual   = (string) $sut;
    $this->assertSame($expected, $actual);
    
    // Test all properties except listId are set, only fullName is output
    $sut = new AccountFilter();
    $sut->setFullName(['Foo foo', 'Bar bar'])
      ->setListIdWithChildren('1A2B3C4D5F')
      ->setFullNameWithChildren('Direct Sales:Allowable');
    $expected
            = '<AccountFilter><FullName>Foo foo</FullName><FullName>Bar bar</FullName></AccountFilter>';
    $actual = (string) $sut;
    $this->assertSame($expected, $actual);
    
    // Test all properties except listId, fullName are set, only
    // listIdWithChildren is output
    $sut = new AccountFilter();
    $sut->setListIdWithChildren('1A2B3C4D5F')
      ->setFullNameWithChildren('Direct Sales:Allowable');
    $expected
            = '<AccountFilter><ListIDWithChildren>1A2B3C4D5F</ListIDWithChildren></AccountFilter>';
    $actual = (string) $sut;
    $this->assertSame($expected, $actual);
    
    // Test setFullNameWithChildren only output when no other properties set
    $sut = new AccountFilter();
    $sut->setFullNameWithChildren('Direct Sales:Allowable');
    $expected = '<AccountFilter><FullNameWithChildren>Direct Sales:Alowable</FullNameWithChildren></AccountFilter>';
    $actual   = (string) $sut;
    $this->assertSame($expected, $actual);
  }
  
  public function testSetListId()
  {
  }
  
  public function testGetListIdWithChildren()
  {
  }
  
  public function testSetListIdWithChildren()
  {
  }
  
  public function testGetListId()
  {
  }
  
}
