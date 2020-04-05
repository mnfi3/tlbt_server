<?php

namespace App\Http\Controllers\PublicLinkBot;

use App\Http\Controllers\TelegramBotEngine\Telegram;
use App\Http\Controllers\TelegramBotEngine\types\Message;
use App\Http\Controllers\TelegramBotEngine\types\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicLinkBotController extends Controller
{

  private $api_key = '963731874:AAGbQWz-V-ke0zH7FI2Z1ghq68xuLFAHzNE';

  public function index(Request $request){

//    $message = new Message($request->message);
//    $message = $request->message;
////    $array = json_decode(json_encode($message), true);
////    $text = $message->text;
//
//    $from = $message->from;
//    $chat = $message->chat;
//    $document = $message->document;
//
//
//    $telegram = new Telegram($this->api_key);
////    $result = $telegram->getFile($document->file_id);
////    $result = json_decode($result)->result;
//
////    $url = "https://api.telegram.org/file/bot$this->api_key/" . $result->file_path;
//    $telegram->sendMessage($chat->id, 'hello');
  }

}
