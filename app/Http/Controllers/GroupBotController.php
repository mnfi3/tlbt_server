<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TelegramBotEngine\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GroupBotController extends Controller
{
  public function index(Request $request){

//    $json = file_get_contents('php://input');
//    $json = urldecode ($json);
//    $results = json_decode($json);


    $message = $request->message;
    $message = json_decode(json_encode($message));
//    $array = json_decode(json_encode($message), true);
    $text = $message->text;
    $chat = $message->chat;
    $user_id = $chat->id;

    $telegram = new Telegram();
    $telegram->sendMessage($user_id, $text);


// // send reply
//    $token = '1282921104:AAFy-1E3dV0rVYJCbRCnHRYwiafl4Rxmig0';
//    $url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$user_id.'&text='.$json;
//    file_get_contents($url);


  }

}
