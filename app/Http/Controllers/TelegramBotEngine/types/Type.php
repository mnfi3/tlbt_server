<?php

namespace App\Http\Controllers\TelegramBotEngine\types;




abstract class Type {

  protected $sub_entities = [];

  public function __construct($object = null) {
    $object = ($object);
    $this->parse($object);
  }


  protected function parse($object){
    foreach($object as $key=>$value){
      if (key_exists($key, $this->sub_entities)){
        $class_name = $this->sub_entities[$key];
        $this->$key = new $class_name($value);
      }else{
        $this->$key = $value;
      }
    }
  }

  public static function create($params = []){
    $class_name = static::class;
    $plain_obj = $params;
    $obj = new $class_name($plain_obj);
    return $obj;
  }







}