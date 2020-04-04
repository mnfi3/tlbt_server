<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:14 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InlineQueryResultDocument extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type	; //String	Type of the result, must be document
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $title	; //String	Title for the result
public $caption	; //String	Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
public $document_url	; //String	A valid URL for the file
public $mime_type	; //String	Mime type of the content of the file, either “application/pdf” or “application/zip”
public $description	; //String	Optional. Short description of the result
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the file
public $thumb_url	; //String	Optional. URL of the thumbnail (jpeg only) for the file
public $thumb_width	; //Integer	Optional. Thumbnail width
public $thumb_height	; //Integer	Optional. Thumbnail height

}