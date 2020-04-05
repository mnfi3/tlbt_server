<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:08 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\passport;


class EncryptedCredentials  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $data 	; //String 	Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
public $hash 	; //String 	Base64-encoded data hash for data authentication
public $secret 	; //String 	Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption

}