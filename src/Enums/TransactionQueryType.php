<?php declare(strict_types=1);

namespace QBXML\Enums;

use Spatie\Enum\Enum;

/**
 * Class TransactionQueryType
 * @package QBXML\Enums
 *
 * @method static self Bill()
 * @method static self BillPaymentCheck()
 * @method static self BillPaymentCreditCard()
 * @method static self BuildAssembly()
 * @method static self Charge()
 * @method static self Check()
 * @method static self CreditCardCharge()
 * @method static self CreditCardCredit()
 * @method static self CreditCardRefund()
 * @method static self CreditMemo()
 * @method static self Deposit()
 * @method static self Estimate()
 * @method static self InventoryAdjustment()
 * @method static self Invoice()
 * @method static self ItemReceipt()
 * @method static self JournalEntry()
 * @method static self PurchaseOrder()
 * @method static self ReceivePayment()
 * @method static self SalesOrder()
 * @method static self SalesReceipt()
 * @method static self SalesTaxPaymentCheck()
 * @method static self TimeTracking()
 * @method static self VehicleMileage()
 * @method static self VendorCredit()
 */
class TransactionQueryType extends Enum
{
}
