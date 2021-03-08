<?php
declare(strict_types=1);

namespace QBXML;

use PHPUnit\Util\Filter;
use QBXML\Enums\ListQueryType;
use QBXML\Enums\MatchCriterion;
use QBXML\Filters\AccountType;
use QBXML\Filters\ActiveStatus;
use QBXML\Filters\CurrencyFilter;
use QBXML\Filters\FromModifiedDate;
use QBXML\Filters\FullName;
use QBXML\Filters\IncludeRetElement;
use QBXML\Filters\ListId;
use QBXML\Filters\MaxReturned;
use QBXML\Filters\NameFilter;
use QBXML\Filters\OwnerId;
use QBXML\Filters\ToModifiedDate;
use QBXML\Queries\ListQuery;

class RequestTest extends \PHPUnit\Framework\TestCase
{
  public function testMultiQuery()
  {
    $account_query_1 = (new ListQuery(ListQueryType::Account()))
      ->addFilter(new MaxReturned(3))
      ->addFilter(new AccountType(\QBXML\Enums\AccountType::CostOfGoodsSold()));
    $account_query_2 = (new ListQuery(ListQueryType::Account()))
      ->addFilter(new AccountType(\QBXML\Enums\AccountType::Bank()));
    $vendor_query = (new ListQuery(ListQueryType::Vendor()))
      ->addFilter(new ListId('1234-abcd-1234-0ab1c'));
    $request = (new Request())
      ->addQuery($account_query_1)
      ->addQuery($account_query_2)
      ->addQuery($vendor_query);

    $expected = '<?xml version="1.0" ?>
        <?qbxml version="14.0" ?>
        <QBXML>
          <QBXMLMsgsRq onError="stopOnError">
            <AccountQueryRq>
              <AccountType>Bank</AccountType>
              <AccountType>CostOfGoodsSold</AccountType>
              <MaxReturned>3</MaxReturned>
            </AccountQueryRq>
            <VendorQueryRq>
              <ListID>1234-abcd-1234-0ab1c</ListID>
            </VendorQueryRq>
          </QBXMLMsgsRq>
        </QBXML>';
    $expected = preg_replace('/>\s+</', '><', $expected);
    $actual = (string)$request;
    $this->assertSame($expected, $actual);
  }

  public function testAccountQuery()
  {
    $account_query = (new ListQuery(ListQueryType::Account()))
      ->addFilter(new ListId('1', '2', '3'))
      ->addFilter(new FullName('Bank of America Checking'))
      ->addFilter(new MaxReturned(3))
      ->addFilter(new ActiveStatus(\QBXML\Enums\ActiveStatus::All()))
      ->addFilter(new FromModifiedDate(new \DateTime('20200101')))
      ->addFilter(new ToModifiedDate(new \DateTime('20201231')))
      ->addFilter(new NameFilter(new MatchCriterion('StartsWith'), 'Expense'))
      ->addFilter(new AccountType(\QBXML\Enums\AccountType::CostOfGoodsSold()))
      ->addFilter(new CurrencyFilter(3))
      ->addFilter(new IncludeRetElement('ListID', 'FullName', 'IsActive'))
      ->addFilter(new OwnerId('0'));
    $sut = (new Request())
      ->addQuery($account_query);
    $xml = '<?xml version="1.0" ?>
      <?qbxml version="14.0" ?>
      <QBXML>
        <QBXMLMsgsRq onError="stopOnError">
          <AccountQueryRq>
            <ListID>1</ListID>
            <ListID>2</ListID>
            <ListID>3</ListID>
            <FullName>Bank of America Checking</FullName>
            <MaxReturned>3</MaxReturned>
            <ActiveStatus>All</ActiveStatus>
            <FromModifiedDate>2020-01-01</FromModifiedDate>
            <ToModifiedDate>2020-12-31</ToModifiedDate>
            <NameFilter>
              <MatchCriterion>StartsWith</MatchCriterion>
              <Name>Expense</Name>
            </NameFilter>
            <AccountType>CostOfGoodsSold</AccountType>
            <CurrencyFilter>
              <ListID>3</ListID>
            </CurrencyFilter>
            <IncludeRetElement>ListID</IncludeRetElement>
            <IncludeRetElement>FullName</IncludeRetElement>
            <IncludeRetElement>IsActive</IncludeRetElement>
            <OwnerID>0</OwnerID>
          </AccountQueryRq>
        </QBXMLMsgsRq>
      </QBXML>';
    $expected = preg_replace('/>\s+</', '><', $xml);
    $actual = (string)$sut;
    $this->assertSame($expected, $actual);
  }
}
