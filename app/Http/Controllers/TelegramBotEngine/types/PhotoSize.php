<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:25 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class PhotoSize extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


  public $file_id	; //String	Identifier for this file, which can be used to download or reuse the file
  public $file_unique_id	; //String	Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
  public $width	; //Integer	Photo width
  public $height	; //Integer	Photo height
  public $file_size	; //Integer	Optional. File size

}