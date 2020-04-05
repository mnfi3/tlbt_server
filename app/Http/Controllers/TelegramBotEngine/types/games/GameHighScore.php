<?php


namespace App\Http\Controllers\TelegramBotEngine\types\games;


use App\Http\Controllers\TelegramBotEngine\types\User;

class GameHighScore extends Type {

  protected $sub_entities = [
    'user'=>User::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }



public $position 	; //Integer 	Position in high score table for the game
public $user 	; //User 	User
public $score 	; //Integer 	Score

}