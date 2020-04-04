<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:08 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InlineQuery extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $id	; //String	Unique identifier for this query
public $from	; //User	Sender
public $location	; //Location	Optional. Sender location, only for bots that request user location
public $query	; //String	Text of the query (up to 256 characters)
public $offset	; //String	Offset of the results to be returned, can be controlled by the bot

}