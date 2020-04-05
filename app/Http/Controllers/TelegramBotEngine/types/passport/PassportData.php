<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:05 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\passport;


class PassportData  extends Type {

  protected $sub_entities = [
    'data'=>EncryptedPassportElement::class,
    'credentials'=>EncryptedCredentials::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $data 	; //Array of EncryptedPassportElement 	Array with information about documents and other Telegram Passport elements that was shared with the bot
public $credentials 	; //EncryptedCredentials 	Encrypted credentials required to decrypt the data

}