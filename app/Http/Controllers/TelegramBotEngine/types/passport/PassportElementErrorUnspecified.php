<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:14 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\passport;


class PassportElementErrorUnspecified extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $source 	; //String 	Error source, must be unspecified
public $type 	; //String 	Type of element of the user's Telegram Passport which has the issue
public $element_hash 	; //String 	Base64-encoded element hash
public $message 	; //String 	Error message

}