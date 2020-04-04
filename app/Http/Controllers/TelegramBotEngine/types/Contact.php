<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:32 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class Contact extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $phone_number	; //String	Contact's phone number
public $first_name	; //String	Contact's first name
public $last_name	; //String	Optional. Contact's last name
public $user_id	; //Integer	Optional. Contact's user identifier in Telegram
public $vcard	; //String	Optional. Additional data about the contact in the form of a vCard

}