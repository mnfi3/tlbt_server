<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 9:38 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class UserProfilePhotos extends Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $total_count	; //Integer	Total number of profile pictures the target user has
public $photos	; //Array of Array of PhotoSize	Requested profile pictures (in up to 4 sizes each)

}