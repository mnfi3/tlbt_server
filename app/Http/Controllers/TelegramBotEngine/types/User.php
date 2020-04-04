<?php

namespace App\Http\Controllers\TelegramBotEngine\types;


class User extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

  public $id	;//Integer	Unique identifier for this user or bot
  public $is_bot	;//Boolean	True, if this user is a bot
  public $first_name	;//String	User‘s or bot’s first name
  public $last_name	;//String	Optional. User‘s or bot’s last name
  public $username	;//String	Optional. User‘s or bot’s username
  public $language_code	;//String	Optional. IETF language tag of the user's language
  public $can_join_groups	;//Boolean	Optional. True, if the bot can be invited to groups. Returned only in getMe.
  public $can_read_all_group_messages	;//Boolean	Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
  public $supports_inline_queries	;//Boolean	Optional. True, if the bot supports inline queries. Returned only in getMe.


}