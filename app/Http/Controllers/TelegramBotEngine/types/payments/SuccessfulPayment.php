<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:33 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\payments;


class SuccessfulPayment extends Type {

  protected $sub_entities = [
    'order_info'=>OrderInfo::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $currency	; //String	Three-letter ISO 4217 currency code
public $total_amount	; //Integer	Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
public $invoice_payload	; //String	Bot specified invoice payload
public $shipping_option_id	; //String	Optional. Identifier of the shipping option chosen by the user
public $order_info	; //OrderInfo	Optional. Order info provided by the user
public $telegram_payment_charge_id	; //String	Telegram payment identifier
public $provider_payment_charge_id	; //String	Provider payment identifier

}