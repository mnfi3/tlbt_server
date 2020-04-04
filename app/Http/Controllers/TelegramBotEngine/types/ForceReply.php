<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:52 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class ForceReply  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $force_reply	; //True	Shows reply interface to the user, as if they manually selected the bot‘s message and tapped ’Reply'
public $selective	; //Boolean	Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.

}