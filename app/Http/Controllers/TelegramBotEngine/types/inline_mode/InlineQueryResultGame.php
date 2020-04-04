<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:18 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class InlineQueryResultGame extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type	; //String	Type of the result, must be game
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $game_short_name	; //String	Short name of the game
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message

}