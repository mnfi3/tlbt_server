<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:53 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class ChatMember  extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $user	; //User	Information about the user
public $status	; //String	The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
public $custom_title	; //String	Optional. Owner and administrators only. Custom title for this user
public $until_date	; //Integer	Optional. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
public $can_be_edited	; //Boolean	Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
public $can_post_messages	; //Boolean	Optional. Administrators only. True, if the administrator can post in the channel; channels only
public $can_edit_messages	; //Boolean	Optional. Administrators only. True, if the administrator can edit messages of other users and can pin messages; channels only
public $can_delete_messages	; //Boolean	Optional. Administrators only. True, if the administrator can delete messages of other users
public $can_restrict_members	; //Boolean	Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
public $can_promote_members	; //Boolean	Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
public $can_change_info	; //Boolean	Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and other settings
public $can_invite_users	; //Boolean	Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
public $can_pin_messages	; //Boolean	Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups and supergroups only
public $is_member	; //Boolean	Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
public $can_send_messages	; //Boolean	Optional. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
public $can_send_media_messages	; //Boolean	Optional. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
public $can_send_polls	; //Boolean	Optional. Restricted only. True, if the user is allowed to send polls
public $can_send_other_messages	; //Boolean	Optional. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
public $can_add_web_page_previews	; //Boolean	Optional. Restricted only. True, if the user is allowed to add web page previews to their messages

}