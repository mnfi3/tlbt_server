<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:10 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InlineQueryResultPhoto extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type	; //String	Type of the result, must be photo
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $photo_url	; //String	A valid URL of the photo. Photo must be in jpeg format. Photo size must not exceed 5MB
public $thumb_url	; //String	URL of the thumbnail for the photo
public $photo_width	; //Integer	Optional. Width of the photo
public $photo_height	; //Integer	Optional. Height of the photo
public $title	; //String	Optional. Title for the result
public $description	; //String	Optional. Short description of the result
public $caption	; //String	Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the photo

}