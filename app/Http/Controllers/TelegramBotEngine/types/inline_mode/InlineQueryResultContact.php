<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:17 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


use App\Http\Controllers\TelegramBotEngine\types\InlineKeyboardMarkup;

class InlineQueryResultContact extends Type {

  protected $sub_entities = [
    'reply_markup'=>InlineKeyboardMarkup::class,
  ];


  public function __construct($object = null) {
    parent::__construct($object);
  }


public $type	; //String	Type of the result, must be contact
public $id	; //String	Unique identifier for this result, 1-64 Bytes
public $phone_number	; //String	Contact's phone number
public $first_name	; //String	Contact's first name
public $last_name	; //String	Optional. Contact's last name
public $vcard	; //String	Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the contact
public $thumb_url	; //String	Optional. Url of the thumbnail for the result
public $thumb_width	; //Integer	Optional. Thumbnail width
public $thumb_height	; //Integer	Optional. Thumbnail height

}