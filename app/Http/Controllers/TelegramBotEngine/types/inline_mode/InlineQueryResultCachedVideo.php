<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:23 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


use App\Http\Controllers\TelegramBotEngine\types\InlineKeyboardMarkup;

class InlineQueryResultCachedVideo extends Type {

  protected $sub_entities = [
    'reply_markup'=>InlineKeyboardMarkup::class,
  ];


  public function __construct($object = null) {
    parent::__construct($object);
  }


public $type	; //String	Type of the result, must be video
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $video_file_id	; //String	A valid file identifier for the video file
public $title	; //String	Title for the result
public $description	; //String	Optional. Short description of the result
public $caption	; //String	Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the video

}