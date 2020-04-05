<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:57 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\games;


class CallbackGame  extends Type {

  protected $sub_entities = [
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

}