<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:19 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


use App\Http\Controllers\TelegramBotEngine\types\InlineKeyboardMarkup;

class InlineQueryResultCachedGif extends Type {

  protected $sub_entities = [
    'reply_markup'=>InlineKeyboardMarkup::class,
  ];


  public function __construct($object = null) {
    parent::__construct($object);
  }


public $type	; //String	Type of the result, must be gif
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $gif_file_id	; //String	A valid file identifier for the GIF file
public $title	; //String	Optional. Title for the result
public $caption	; //String	Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the GIF animation


}