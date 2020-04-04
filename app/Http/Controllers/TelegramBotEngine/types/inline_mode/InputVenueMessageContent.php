<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:26 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InputVenueMessageContent  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $latitude	; //Float	Latitude of the venue in degrees
public $longitude	; //Float	Longitude of the venue in degrees
public $title	; //String	Name of the venue
public $address	; //String	Address of the venue
public $foursquare_id	; //String	Optional. Foursquare identifier of the venue, if known
public $foursquare_type	; //String	Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)

}