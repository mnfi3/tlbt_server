<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:09 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\passport;


class PassportElementErrorFrontSide  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $source 	; //String 	Error source, must be front_side
public $type 	; //String 	The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
public $file_hash 	; //String 	Base64-encoded hash of the file with the front side of the document
public $message 	; //String 	Error message

}