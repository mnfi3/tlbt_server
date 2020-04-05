<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:40 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class ReplyKeyboardMarkup extends Type {

  protected $sub_entities = [
    'keyboard'=>KeyboardButton::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $keyboard	; //Array of Array of KeyboardButton	Array of button rows, each represented by an Array of KeyboardButton objects
public $resize_keyboard	; //Boolean	Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
public $one_time_keyboard	; //Boolean	Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
public $selective	; //Boolean	Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.

//Example: A user requests to change the bot‘s language, bot replies to the request with a keyboard to select the new language. Other users in the group don’t see the keyboard.

}