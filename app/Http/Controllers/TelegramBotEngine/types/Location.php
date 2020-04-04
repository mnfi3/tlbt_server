<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:33 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class Location extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $longitude	; //Float	Longitude as defined by sender
public $latitude	; //Float	Latitude as defined by sender

}