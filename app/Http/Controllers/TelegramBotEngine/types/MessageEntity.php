<?php


namespace App\Http\Controllers\TelegramBotEngine\types;


class MessageEntity extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }

  public $type	; //String	Type of the entity. Can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames)
  public $offset	; //Integer	Offset in UTF-16 code units to the start of the entity
  public $length	; //Integer	Length of the entity in UTF-16 code units
  public $url	; //String	Optional. For “text_link” only, url that will be opened after user taps on the text
  public $user	; //User	Optional. For “text_mention” only, the mentioned user
  public $language	; //String	Optional. For “pre” only, the programming language of the entity text

}