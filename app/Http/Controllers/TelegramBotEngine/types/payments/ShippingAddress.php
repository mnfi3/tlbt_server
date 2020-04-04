<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:31 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\payments;


class ShippingAddress  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $country_code	; //String	ISO 3166-1 alpha-2 country code
public $state	; //String	State, if applicable
public $city	; //String	City
public $street_line1	; //String	First line for the address
public $street_line2	; //String	Second line for the address
public $post_code	; //String	Address post code

}