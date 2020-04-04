<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:31 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\payments;


class Invoice  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $title	; //String	Product name
public $description	; //String	Product description
public $start_parameter	; //String	Unique bot deep-linking parameter that can be used to generate this invoice
public $currency	; //String	Three-letter ISO 4217 currency code
public $total_amount	; //Integer	Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).

}