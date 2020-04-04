<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:36 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class Dice  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $value	; //Integer	Value of the dice, 1-6

}