<?php


namespace App\Http\Controllers\TelegramBotEngine\types;


class Chat extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

  public $id;//Integer	Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
  public $type;//String	Type of chat, can be either “private”, “group”, “supergroup” or “channel”
  public $title;//String	Optional. Title, for supergroups, channels and group chats
  public $username;//String	Optional. Username, for private chats, supergroups and channels if available
  public $first_name;//String	Optional. First name of the other party in a private chat
  public $last_name;//String	Optional. Last name of the other party in a private chat
  public $photo;//ChatPhoto	Optional. Chat photo. Returned only in getChat.
  public $description;//String	Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
  public $invite_link;//String	Optional. Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in getChat.
  public $pinned_message;//Message	Optional. Pinned message, for groups, supergroups and channels. Returned only in getChat.
  public $permissions;//ChatPermissions	Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
  public $slow_mode_delay	;//Integer	Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user. Returned only in getChat.
  public $sticker_set_name;//String	Optional. For supergroups, name of group sticker set. Returned only in getChat.
  public $can_set_sticker_set;//Boolean	Optional. True, if the bot can change the group sticker set. Returned only in getChat.


}