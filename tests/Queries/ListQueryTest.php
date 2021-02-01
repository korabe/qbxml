<?php
declare(strict_types=1);

namespace QBXML\Queries;

use PHPUnit\Framework\TestCase;
use QBXML\Enums\ListQueryType;
use QBXML\Filters\FullName;
use QBXML\Filters\IncludeRetElement;
use QBXML\Filters\ListId;
use QBXML\Filters\MaxReturned;

/**
 * Class ListQueryTest
 *
 * @package QBXML\Queries
 */
class ListQueryTest extends TestCase
{
  public function testToString()
  {
    $sut = (new ListQuery(ListQueryType::Customer()))
      ->addFilter(new ListId(...['1', '2', '3']))
      ->addFilter(new FullName(...['Foo', 'Bar']))
      ->addFilter(new MaxReturned(3))
      ->addFilter(new IncludeRetElement(...['FooElement', 'BazElement']));
    $expected = '<CustomerQueryRq>'
      . '<ListID>1</ListID><ListID>2</ListID><ListID>3</ListID>'
      . '<FullName>Foo</FullName><FullName>Bar</FullName>'
      . '<MaxReturned>3</MaxReturned>'
      . '<IncludeRetElement>FooElement</IncludeRetElement><IncludeRetElement>BazElement</IncludeRetElement>'
      . '</CustomerQueryRq>';
    $this->assertSame($expected, (string)$sut);
  }
}
