<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:15 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\games;


use App\Http\Controllers\TelegramBotEngine\types\Animation;
use App\Http\Controllers\TelegramBotEngine\types\MessageEntity;
use App\Http\Controllers\TelegramBotEngine\types\PhotoSize;

class Game extends Type {

  protected $sub_entities = [
    'photo'=>PhotoSize::class,
    'text_entities'=>MessageEntity::class,
    'animation'=>Animation::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $title 	; //String 	Title of the game
public $description 	; //String 	Description of the game
public $photo 	; //Array of PhotoSize 	Photo that will be displayed in the game message in chats.
public $text 	; //String 	Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
public $text_entities 	; //Array of MessageEntity 	Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
public $animation 	; //Animation 	Optional. Animation that will be displayed in the game message in chats. Upload via BotFather

}