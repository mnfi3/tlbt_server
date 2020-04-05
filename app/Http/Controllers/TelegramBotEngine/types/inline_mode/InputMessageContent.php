<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 4:10 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InputMessageContent extends Type {

  protected $sub_entities = [
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }



//This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 4 types:
//
//InputTextMessageContent
//InputLocationMessageContent
//InputVenueMessageContent
//InputContactMessageContent


}