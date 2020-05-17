<?php


namespace App\Http\Controllers\TelegramBotEngine;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Psr\Http\Message\ResponseInterface;

class Request {

  private $client = null;
  private $api_key;
  private $url ;

  public function __construct($api_key) {
    $this->client = new  Client();
    $this->api_key = $api_key;
  }




  public function get($action, $params = []){
    $this->url = Config::API_URL . $this->api_key . '/' . $action ;
//    $result = file_get_contents($this->url . '?' . array_to_get_params($params));
//    return json_decode($result);
    try {
      $result = $this->client->get($this->url, ['query' => $params, ['']])->getBody();
      return json_decode($result);
    } catch (RequestException  $e) {
      Log::error('telegram GET request failed.error=' . $e->getMessage(). '\turl=' . $this->url);
      return null;
    }
  }





  public function post($action, $params = []){
    $this->url = Config::API_URL . $this->api_key . '/' . $action ;
    try {
      $result = $this->client->post($this->url, ['form_params' => $params])->getBody();
      return json_decode($result);
    } catch (RequestException  $e) {
      Log::error('telegram POST request failed.error=' . $e->getMessage(). '\turl=' . $this->url);
      return null;
    }
  }
}