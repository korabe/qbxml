<?php declare(strict_types=1);

namespace QBXML\Filters;

use PHPUnit\Framework\TestCase;
use QBXML\Enums\AccountType;
use QBXML\Enums\MatchCriterion;

class FilterTest extends TestCase
{
  public function test__toString()
  {
    $sut = new class () extends \QBXML\Filters\Filter {
      protected array $listId;
      protected string $name;
      protected AccountType $accountType;
      public function __construct()
      {
        parent::__construct('Foo');
        $this->listId = [1, 2, 3];
        $this->name = 'Bar Bar';
        $this->accountType = AccountType::Equity();
      }
    };
    $expected = '<Foo><ListID>1</ListID><ListID>2</ListID><ListID>3</ListID><Name>Bar Bar</Name><MatchCriterion>StartsWith</MatchCriterion>';
    $actual = (string)$sut;
    $this->assertSame($expected, $actual);
  }
}
