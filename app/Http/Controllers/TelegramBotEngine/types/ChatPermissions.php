<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:54 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class ChatPermissions extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $can_send_messages	; //Boolean	Optional. True, if the user is allowed to send text messages, contacts, locations and venues
public $can_send_media_messages	; //Boolean	Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
public $can_send_polls	; //Boolean	Optional. True, if the user is allowed to send polls, implies can_send_messages
public $can_send_other_messages	; //Boolean	Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
public $can_add_web_page_previews	; //Boolean	Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
public $can_change_info	; //Boolean	Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
public $can_invite_users	; //Boolean	Optional. True, if the user is allowed to invite new users to the chat
public $can_pin_messages	; //Boolean	Optional. True, if the user is allowed to pin messages. Ignored in public supergroups

}