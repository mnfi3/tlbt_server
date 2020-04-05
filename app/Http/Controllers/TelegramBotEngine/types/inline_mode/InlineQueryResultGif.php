<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:11 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


use App\Http\Controllers\TelegramBotEngine\types\InlineKeyboardMarkup;

class InlineQueryResultGif extends Type {

  protected $sub_entities = [
    'reply_markup'=>InlineKeyboardMarkup::class,
  ];


  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type	; //String	Type of the result, must be gif
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $gif_url	; //String	A valid URL for the GIF file. File size must not exceed 1MB
public $gif_width	; //Integer	Optional. Width of the GIF
public $gif_height	; //Integer	Optional. Height of the GIF
public $gif_duration	; //Integer	Optional. Duration of the GIF
public $thumb_url	; //String	URL of the static thumbnail for the result (jpeg or gif)
public $title	; //String	Optional. Title for the result
public $caption	; //String	Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the GIF animation

}