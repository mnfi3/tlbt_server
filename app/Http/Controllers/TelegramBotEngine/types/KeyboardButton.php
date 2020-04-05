<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:42 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class KeyboardButton extends Type {

  protected $sub_entities = [
    'request_poll'=>KeyboardButtonPollType::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

  public $text	; //String	Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
  public $request_contact	; //Boolean	Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
  public $request_location	; //Boolean	Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only
  public $request_poll	; //KeyboardButtonPollType	Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only

//Note: request_contact and request_location options will only work in Telegram versions released after 9 April, 2016. Older clients will display unsupported message.
//Note: request_poll option will only work in Telegram versions released after 23 January, 2020. Older clients will display unsupported message.

}