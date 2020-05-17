<?php





function get_func_argNames($funcName) {
  $f = new \ReflectionMethod($funcName);
  $result = array();
  foreach ($f->getParameters() as $param) {
    $result[] = $param->name;
  }
  return $result;
}

function get_func_args_array($funcName, $args){
  $names = get_func_argNames($funcName);
  $result = array();
  $i=0;
  foreach ($args as $arg){
    $result[$names[$i]] = $arg;
    $i++;
  }
  return $result;
}


function get_func_args_object($funcName, $args){
  $names = get_func_argNames($funcName);
  $result = null;
  $i=0;
  foreach ($args as $arg){
    $result->$names[$i] = $arg;
    $i++;
  }
  return $result;
}


function array_to_get_params($array){
  $str = "";
  foreach ($array as $key=>$value){
    $str .= $key . '=' . $value . '&';
  }
  $str = rtrim($str, '&');
  return $str;
}



function generateRandomString($length = 5) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

function generateRandomNumber($length = 6) {
  $characters = '0123456789';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

?>