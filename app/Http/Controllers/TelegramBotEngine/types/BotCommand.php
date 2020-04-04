<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:55 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class BotCommand extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $command	; //String	Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
public $description	; //String	Description of the command, 3-256 characters.

}