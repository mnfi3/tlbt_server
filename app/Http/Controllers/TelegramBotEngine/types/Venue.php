<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:34 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class Venue extends Type {

  protected $sub_entities = [
    'location'=>Location::class
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $location	; //Location	Venue location
public $title	; //String	Name of the venue
public $address	; //String	Address of the venue
public $foursquare_id	; //String	Optional. Foursquare identifier of the venue
public $foursquare_type	; //String	Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)

}