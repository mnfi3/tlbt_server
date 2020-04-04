<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:25 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InputTextMessageContent extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $message_text	; //String	Text of the message to be sent, 1-4096 characters
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
public $disable_web_page_preview	; //Boolean	Optional. Disables link previews for links in the sent message

}