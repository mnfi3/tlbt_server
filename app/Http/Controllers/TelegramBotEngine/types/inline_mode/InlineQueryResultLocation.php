<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:15 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InlineQueryResultLocation extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type	; //String	Type of the result, must be location
public $id	; //String	Unique identifier for this result, 1-64 Bytes
public $latitude	; //Float number	Location latitude in degrees
public $longitude	; //Float number	Location longitude in degrees
public $title	; //String	Location title
public $live_period	; //Integer	Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the location
public $thumb_url	; //String	Optional. Url of the thumbnail for the result
public $thumb_width	; //Integer	Optional. Thumbnail width
public $thumb_height	; //Integer	Optional. Thumbnail height

}