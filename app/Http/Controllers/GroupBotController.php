<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TelegramBotEngine\Config;
use App\Http\Controllers\TelegramBotEngine\Telegram;
use App\Http\Controllers\TelegramBotEngine\types\KeyboardButton;
use App\Http\Controllers\TelegramBotEngine\types\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GroupBotController extends Controller
{
  private $api_key = '1282921104:AAFy-1E3dV0rVYJCbRCnHRYwiafl4Rxmig0';

  public function index(Request $request){

    $json = file_get_contents('php://input');
    $json = urldecode ($json);
//    $results = json_decode($json);


    $message = $request->message;
    $message = json_decode(json_encode($message));

    $message = new Message($message);
//    $array = json_decode(json_encode($message), true);
//    $text = $message->text;
    $from = $message->from;
    $chat = $message->chat;
//    $document = $message->document;


    $telegram = new Telegram($this->api_key);
//    $result = $telegram->getFile($document->file_id);
//    $result = json_decode($result)->result;
//    $url = "https://api.telegram.org/file/bot$this->api_key/" . $result->file_path;
    $url = "fdf";
//    $url = urlencode($url);
//    $result = $telegram->sendMessage($chat->id, $url);
//    $photos = $telegram->getUserProfilePhotos($from->id);
//
//    if ($photos == null){
//      $photos = 'images null';
//    }
//    $telegram->sendMessage($chat->id, json_encode($photos));
    $button = KeyboardButton::build(['text'=>'hello']);
    $keyboard = array(
      array(
        array('text'=>'شماره تماس','url'=>'http://websima.com'),
        array('text'=>'اطلاعات','callback_data'=>'1', 'switch_inline_query_current_chat'=>'mohsenf')
      ),
      array(
        array('text'=>'شماره تماس','url'=>'http://websima.com'),
        array('text'=>'اطلاعات2','callback_data'=>'2', 'switch_inline_query'=>'@mohsenfarjami')
      ),
    );

    $replyMarkup = array(
       'keyboard' => $keyboard,
      // 'resize_keyboard' => true
       );
//
    $replyMarkup = array(
      'inline_keyboard' => $keyboard
    );

       $encodedMarkup = json_encode($replyMarkup);

    $telegram->sendMessage($chat->id, $json, null, null, null, null, $encodedMarkup);


//    $message = $request->call;
//    $message = json_decode(json_encode($message));


  }

}
