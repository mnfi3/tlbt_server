<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:16 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InlineQueryResultVenue extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type	; //String	Type of the result, must be venue
public $id	; //String	Unique identifier for this result, 1-64 Bytes
public $latitude	; //Float	Latitude of the venue location in degrees
public $longitude	; //Float	Longitude of the venue location in degrees
public $title	; //String	Title of the venue
public $address	; //String	Address of the venue
public $foursquare_id	; //String	Optional. Foursquare identifier of the venue if known
public $foursquare_type	; //String	Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the venue
public $thumb_url	; //String	Optional. Url of the thumbnail for the result
public $thumb_width	; //Integer	Optional. Thumbnail width
public $thumb_height	; //Integer	Optional. Thumbnail height


}