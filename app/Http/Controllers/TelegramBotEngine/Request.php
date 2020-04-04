<?php


namespace App\Http\Controllers\TelegramBotEngine;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;
use Psr\Http\Message\ResponseInterface;

class Request {

  private $client = null;
  private $request_mode = Config::REQUEST_MODE;
  private $api_key;
  private $url ;

  public function __construct($api_key) {
    $this->client = new  Client();
    $this->api_key = $api_key;
  }




  public function get($action, $params = []){
    $this->url = Config::API_URL . $this->api_key . '/' . $action ;

    //sync
    if ($this->request_mode == 'sync') {
      try {
        return $this->client->get($this->url, ['query' => $params])->getBody();
      } catch (RequestException  $e) {
        Log::error('telegram GET request failed.error=' . $e->getMessage(). '\turl=' . $this->url);
        return null;
      }

    }


    //async
    else{
      $res = $this->client->getAsync($this->url, ['query' => $params]);
      $res->then(
        function (ResponseInterface $res) {
          return $res->getBody();
        },
        function (RequestException $e) {
          Log::error('telegram GET async request failed.error=' . $e->getMessage(). '\turl=' . $this->url);
          return null;
        });

    }

  }





  public function post($action, $params = []){
    $this->url = Config::API_URL . Config::TOKEN . '/' . $action ;

    //sync
    if ($this->request_mode == 'sync') {
      try {
        return $this->client->post($this->url, ['form_params' => $params])->getBody();
      } catch (RequestException  $e) {
        Log::error('telegram POST request failed.error=' . $e->getMessage(). '\turl=' . $this->url);
        return null;
      }

    }

    //async
    else {
      $res = $this->client->postAsync($this->url, ['form_params' => $params]);
      $res->then(
        function (ResponseInterface $res) {
          return $res->getBody();
        },
        function (RequestException $e) {
          Log::error('telegram POST async request failed.error=' . $e->getMessage(). '\turl=' . $this->url);
          return null;
        });
    }
  }
}