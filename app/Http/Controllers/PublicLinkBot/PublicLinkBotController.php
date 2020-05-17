<?php

namespace App\Http\Controllers\PublicLinkBot;

use App\Http\Controllers\TelegramBotEngine\Telegram;
use App\Http\Controllers\TelegramBotEngine\types\Animation;
use App\Http\Controllers\TelegramBotEngine\types\Audio;
use App\Http\Controllers\TelegramBotEngine\types\Document;
use App\Http\Controllers\TelegramBotEngine\types\File;
use App\Http\Controllers\TelegramBotEngine\types\Message;
use App\Http\Controllers\TelegramBotEngine\types\PhotoSize;
use App\Http\Controllers\TelegramBotEngine\types\User;
use App\Http\Controllers\TelegramBotEngine\types\Video;
use App\Http\Controllers\TelegramBotEngine\types\VideoNote;
use App\Http\Controllers\TelegramBotEngine\types\Voice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicLinkBotController extends Controller
{

  private $api_key = '963731874:AAGbQWz-V-ke0zH7FI2Z1ghq68xuLFAHzNE';

  public function index(Request $request){

    $json = file_get_contents('php://input');
    $json = urldecode ($json);
//    $results = json_decode($json);


    $message = $request->message;
    $message = json_decode(json_encode($message));
    $message = new Message($message);
    $from = $message->from;

    $document = new Document($message->document);
    $audio = new Audio($message->audio);
    $video = new Video($message->video);
    $voice = new Voice($message->voice);
    $photo = new PhotoSize($message->photo);
    $video_note = new VideoNote($message->video_note);
    $animation = new Animation($message->animation);

    $file_id = '';
    $file_name = '';

    if(strlen($document->file_id) > 0) {
      $file_id = $document->file_id;
      $file_name = $document->file_name;
    }
    elseif (strlen($audio->file_id ) > 0) {
      $file_id = $audio->file_id;
      $file_name = $audio->title;
    }
    elseif (strlen($video->file_id ) > 0) {
      $file_id = $video->file_id;
      $file_name = 'video';
    }
    elseif (strlen($video_note->file_id ) > 0) {
      $file_id = $video_note->file_id;
      $file_name = 'video_note';
    }
    elseif (strlen($voice->file_id ) > 0) {
      $file_id = $voice->file_id;
      $file_name = 'voice';
    }
    elseif (strlen($animation->file_id ) > 0) {
      $file_id = $animation->file_id;
      $file_name = 'animation';
    }
    elseif (strlen($photo->file_id ) > 0) {
      $file_id = $photo->file_id;
      $file_name = 'photo';
    }else{
      $file_id = '0';
    }



    $telegram = new Telegram($this->api_key);

//    return $telegram->sendMessage($from->id, $file_id);
//    exit();

    if($file_id === '0'){
//      $telegram->sendMessage($from->id, 'پیام شما حاوی فایل نمیباشد');
      exit();
    }else{
//      $result = $telegram->getFile($file_id);
//      $result = new File($result->result);
////      $url = "https://api.telegram.org/file/bot$this->api_key/" . $result->file_path;
//      $telegram->sendMessage($from->id, 'hello');
////      $telegram->sendMessage($from->id, $url);
//      exit();
    }



  }

}
