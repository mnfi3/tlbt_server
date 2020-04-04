<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:09 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InlineQueryResultArticle extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type	; //String	Type of the result, must be article
public $id	; //String	Unique identifier for this result, 1-64 Bytes
public $title	; //String	Title of the result
public $input_message_content	; //InputMessageContent	Content of the message to be sent
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $url	; //String	Optional. URL of the result
public $hide_url	; //Boolean	Optional. Pass True, if you don't want the URL to be shown in the message
public $description	; //String	Optional. Short description of the result
public $thumb_url	; //String	Optional. Url of the thumbnail for the result
public $thumb_width	; //Integer	Optional. Thumbnail width
public $thumb_height	; //Integer	Optional. Thumbnail height

}