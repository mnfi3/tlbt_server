<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:30 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class Voice extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


  public $file_id	; //String	Identifier for this file, which can be used to download or reuse the file
  public $file_unique_id	; //String	Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
  public $duration	; //Integer	Duration of the audio in seconds as defined by sender
  public $mime_type	; //String	Optional. MIME type of the file as defined by sender
  public $file_size	; //Integer	Optional. File size

}