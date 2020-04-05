<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:03 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class Sticker extends Type {

  protected $sub_entities = [
    'thumb'=>PhotoSize::class,
    'mask_position'=>MaskPosition::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $file_id	; //String	Identifier for this file, which can be used to download or reuse the file
public $file_unique_id	; //String	Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
public $width	; //Integer	Sticker width
public $height	; //Integer	Sticker height
public $is_animated	; //Boolean	True, if the sticker is animated
public $thumb	; //PhotoSize	Optional. Sticker thumbnail in the .WEBP or .JPG format
public $emoji	; //String	Optional. Emoji associated with the sticker
public $set_name	; //String	Optional. Name of the sticker set to which the sticker belongs
public $mask_position	; //MaskPosition	Optional. For mask stickers, the position where the mask should be placed
public $file_size	; //Integer	Optional. File size

}