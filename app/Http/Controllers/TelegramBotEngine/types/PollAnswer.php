<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:46 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class PollAnswer extends Type {

  protected $sub_entities = [
    'user'=>User::class,
  ];


public $poll_id 	; //String 	Unique poll identifier
public $user 	; //User 	The user, who changed the answer to the poll
public $option_ids 	; //Array of Integer 	0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
}