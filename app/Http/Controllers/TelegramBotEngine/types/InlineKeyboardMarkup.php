<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:45 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class InlineKeyboardMarkup  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $inline_keyboard	; //Array of Array of InlineKeyboardButton	Array of button rows, each represented by an Array of InlineKeyboardButton objects
//Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will display unsupported message.

}