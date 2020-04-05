<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:04 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class StickerSet extends Type {

  protected $sub_entities = [
    'stickers'=>Sticker::class,
    'thumb'=>PhotoSize::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $name	; //String	Sticker set name
public $title	; //String	Sticker set title
public $is_animated	; //Boolean	True, if the sticker set contains animated stickers
public $contains_masks	; //Boolean	True, if the sticker set contains masks
public $stickers	; //Array of Sticker	List of all set stickers
public $thumb	; //PhotoSize	Optional. Sticker set thumbnail in the .WEBP or .TGS format

}