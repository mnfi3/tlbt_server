<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:13 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


use App\Http\Controllers\TelegramBotEngine\types\InlineKeyboardMarkup;

class InlineQueryResultAudio extends Type {

  protected $sub_entities = [
    'reply_markup'=>InlineKeyboardMarkup::class,
  ];


  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type	; //String	Type of the result, must be audio
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $audio_url	; //String	A valid URL for the audio file
public $title	; //String	Title
public $caption	; //String	Optional. Caption, 0-1024 characters after entities parsing
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
public $performer	; //String	Optional. Performer
public $audio_duration	; //Integer	Optional. Audio duration in seconds
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the audio

}