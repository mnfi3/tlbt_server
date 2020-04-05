<?php

namespace App\Http\Controllers\TelegramBotEngine\types;




abstract class Type {

  protected $sub_entities = [];
  public $object;

  public function __construct($object = null) {
    $this->object = $object;
    $this->parse();
  }


  protected function parse(){
    foreach($this->object as $key=>$value){

      if (key_exists($key, $this->sub_entities)){
        $class_name = $this->sub_entities[$key];

        if(is_array($value)){
          $this->$key = array();

          foreach ($value as $item){

            //this is for array of array
            if (is_array($item)){
              foreach ($item as $sub_item){
                $this->$key [] =  new $class_name($sub_item);
              }
            }else {
              $this->$key [] = new $class_name($item);
            }
          }
        }else{
          $this->$key = new $class_name($value);
        }

      }else{
        $this->$key = $value;
      }
    }
  }

  public static function build($params = []){
    $class_name = static::class;
    $plain_obj = $params;
    $obj = new $class_name($plain_obj);
    return $obj;
  }







}