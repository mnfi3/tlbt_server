<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:10 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\passport;


class PassportElementErrorReverseSide extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $source 	; //String 	Error source, must be reverse_side
public $type 	; //String 	The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
public $file_hash 	; //String 	Base64-encoded hash of the file with the reverse side of the document
public $message 	; //String 	Error message

}