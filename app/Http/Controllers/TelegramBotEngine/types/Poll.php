<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:35 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class Poll extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $id	; //String	Unique poll identifier
public $question	; //String	Poll question, 1-255 characters
public $options	; //Array of PollOption	List of poll options
public $total_voter_count	; //Integer	Total number of users that voted in the poll
public $is_closed	; //Boolean	True, if the poll is closed
public $is_anonymous	; //Boolean	True, if the poll is anonymous
public $type	; //String	Poll type, currently can be “regular” or “quiz”
public $allows_multiple_answers	; //Boolean	True, if the poll allows multiple answers
public $correct_option_id	; //Integer	Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.

}