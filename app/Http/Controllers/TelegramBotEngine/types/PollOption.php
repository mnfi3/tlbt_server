<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:35 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class PollOption  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $text	; //String	Option text, 1-100 characters
public $voter_count	; //Integer	Number of users that voted for this option

}