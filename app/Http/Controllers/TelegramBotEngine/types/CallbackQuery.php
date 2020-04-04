<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:50 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class CallbackQuery extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $id	; //String	Unique identifier for this query
public $from	; //User	Sender
public $message	; //Message	Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
public $inline_message_id	; //String	Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
public $chat_instance	; //String	Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
public $data	; //String	Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
public $game_short_name	; //String	Optional. Short name of a Game to be returned, serves as the unique identifier for the game

}