<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:32 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\payments;


class OrderInfo  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $name	; //String	Optional. User name
public $phone_number	; //String	Optional. User's phone number
public $email	; //String	Optional. User email
public $shipping_address	; //ShippingAddress	Optional. User shipping address

}