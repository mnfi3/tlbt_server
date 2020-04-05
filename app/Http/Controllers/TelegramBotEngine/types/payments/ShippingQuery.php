<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:34 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\payments;


use App\Http\Controllers\TelegramBotEngine\types\User;

class ShippingQuery extends Type {

  protected $sub_entities = [
    'from'=>User::class,
    'shipping_address'=>ShippingAddress::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $id	; //String	Unique query identifier
public $from	; //User	User who sent the query
public $invoice_payload	; //String	Bot specified invoice payload
public $shipping_address	; //ShippingAddress	User specified shipping address

}