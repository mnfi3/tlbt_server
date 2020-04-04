<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:57 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class ResponseParameters extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $migrate_to_chat_id	; //Integer	Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
public $retry_after	; //Integer	Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated

}