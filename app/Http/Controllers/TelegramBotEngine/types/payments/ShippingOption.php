<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:33 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\payments;


class ShippingOption extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $id	; //String	Shipping option identifier
public $title	; //String	Option title
public $prices	; //Array of LabeledPrice	List of price portions

}