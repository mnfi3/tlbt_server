<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:12 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\passport;


class PassportElementErrorTranslationFile  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }



public $source 	; //String 	Error source, must be translation_file
public $type 	; //String 	Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
public $file_hash 	; //String 	Base64-encoded file hash
public $message 	; //String 	Error message

}