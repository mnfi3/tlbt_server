<?php


namespace App\Http\Controllers\TelegramBotEngine\types;


use App\Http\Controllers\TelegramBotEngine\types\games\Game;
use App\Http\Controllers\TelegramBotEngine\types\passport\PassportData;
use App\Http\Controllers\TelegramBotEngine\types\payments\Invoice;
use App\Http\Controllers\TelegramBotEngine\types\payments\SuccessfulPayment;

class Message extends Type {

  protected $sub_entities = [
    'from'=>User::class,
    'chat'=>Chat::class,
    'forward_from'=>User::class,
    'forward_from_chat'=>Chat::class,
    'reply_to_message'=>Message::class,
    'entities'=>MessageEntity::class,
    'caption_entities'=>MessageEntity::class,
    'audio'=>Audio::class,
    'document'=>Document::class,
    'animation'=>Animation::class,
    'game'=>Game::class,
    'photo'=>PhotoSize::class,
    'sticker'=>Sticker::class,
    'video'=>Video::class,
    'voice'=>Voice::class,
    'video_note'=>VideoNote::class,
    'contact'=>Contact::class,
    'location'=>Location::class,
    'venue'=>Venue::class,
    'poll'=>Poll::class,
    'dice'=>Dice::class,
    'new_chat_members'=>User::class,
    'left_chat_member'=>User::class,
    'new_chat_photo'=>PhotoSize::class,
    'pinned_message'=>Message::class,
    'invoice'=>Invoice::class,
    'successful_payment'=>SuccessfulPayment::class,
    'passport_data'=>PassportData::class,
    'reply_markup'=>InlineKeyboardMarkup::class,
    ];

  public function __construct($object = null) {
    parent::__construct($object);
  }



  public $message_id	; //Integer	Unique message identifier inside this chat
  public $from	; //User	Optional. Sender, empty for messages sent to channels
  public $date	; //Integer	Date the message was sent in Unix time
  public $chat	; //Chat	Conversation the message belongs to
  public $forward_from	; //User	Optional. For forwarded messages, sender of the original message
  public $forward_from_chat	; //Chat	Optional. For messages forwarded from channels, information about the original channel
  public $forward_from_message_id	; //Integer	Optional. For messages forwarded from channels, identifier of the original message in the channel
  public $forward_signature	; //String	Optional. For messages forwarded from channels, signature of the post author if present
  public $forward_sender_name	; //String	Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
  public $forward_date	; //Integer	Optional. For forwarded messages, date the original message was sent in Unix time
  public $reply_to_message	; //Message	Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
  public $edit_date	; //Integer	Optional. Date the message was last edited in Unix time
  public $media_group_id	; //String	Optional. The unique identifier of a media message group this message belongs to
  public $author_signature	; //String	Optional. Signature of the post author for messages in channels
  public $text	; //String	Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
  public $entities	; //Array of MessageEntity	Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
  public $caption_entities	; //Array of MessageEntity	Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
  public $audio	; //Audio	Optional. Message is an audio file, information about the file
  public $document	; //Document	Optional. Message is a general file, information about the file
  public $animation	; //Animation	Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
  public $game	; //Game	Optional. Message is a game, information about the game. More about games »
  public $photo	; //Array of PhotoSize	Optional. Message is a photo, available sizes of the photo
  public $sticker	; //Sticker	Optional. Message is a sticker, information about the sticker
  public $video	; //Video	Optional. Message is a video, information about the video
  public $voice	; //Voice	Optional. Message is a voice message, information about the file
  public $video_note	; //VideoNote	Optional. Message is a video note, information about the video message
  public $caption	; //String	Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
  public $contact	; //Contact	Optional. Message is a shared contact, information about the contact
  public $location	; //Location	Optional. Message is a shared location, information about the location
  public $venue	; //Venue	Optional. Message is a venue, information about the venue
  public $poll	; //Poll	Optional. Message is a native poll, information about the poll
  public $dice	; //Dice	Optional. Message is a dice with random value from 1 to 6
  public $new_chat_members	; //Array of User	Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
  public $left_chat_member	; //User	Optional. A member was removed from the group, information about them (this member may be the bot itself)
  public $new_chat_title	; //String	Optional. A chat title was changed to this value
  public $new_chat_photo	; //Array of PhotoSize	Optional. A chat photo was change to this value
  public $delete_chat_photo	; //True	Optional. Service message: the chat photo was deleted
  public $group_chat_created	; //True	Optional. Service message: the group has been created
  public $supergroup_chat_created	; //True	Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
  public $channel_chat_created	; //True	Optional. Service message: the channel has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
  public $migrate_to_chat_id	; //Integer	Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
  public $migrate_from_chat_id	; //Integer	Optional. The supergroup has been migrated from a group with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
  public $pinned_message	; //Message	Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
  public $invoice	; //Invoice	Optional. Message is an invoice for a payment, information about the invoice. More about payments »
  public $successful_payment	; //SuccessfulPayment	Optional. Message is a service message about a successful payment, information about the payment. More about payments »
  public $connected_website	; //String	Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
  public $passport_data	; //PassportData	Optional. Telegram Passport data
  public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.

}