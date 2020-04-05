<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:09 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\passport;


class PassportElementErrorDataField  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $source 	; //String 	Error source, must be data
public $type 	; //String 	The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
public $field_name 	; //String 	Name of the data field which has the error
public $data_hash 	; //String 	Base64-encoded data hash
public $message 	; //String 	Error message

}