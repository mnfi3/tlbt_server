<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:22 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InlineQueryResultCachedDocument  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $type	; //String	Type of the result, must be document
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $title	; //String	Title for the result
public $document_file_id	; //String	A valid file identifier for the file
public $description	; //String	Optional. Short description of the result
public $caption	; //String	Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the file
//Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.

}