<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:26 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InputLocationMessageContent  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $latitude	; //Float	Latitude of the location in degrees
public $longitude	; //Float	Longitude of the location in degrees
public $live_period	; //Integer	Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.

}