<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:28 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


class ChosenInlineResult extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $result_id	; //String	The unique identifier for the result that was chosen
public $from	; //User	The user that chose the result
public $location	; //Location	Optional. Sender location, only for bots that require user location
public $inline_message_id	; //String	Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
public $query	; //String	The query that was used to obtain the result

}