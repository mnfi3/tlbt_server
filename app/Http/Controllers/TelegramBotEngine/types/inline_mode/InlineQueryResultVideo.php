<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/4/2020
 * Time: 10:12 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\inline_mode;


use App\Http\Controllers\TelegramBotEngine\types\InlineKeyboardMarkup;

class InlineQueryResultVideo extends Type {

  protected $sub_entities = [
    'reply_markup'=>InlineKeyboardMarkup::class,
  ];


  public function __construct($object = null) {
    parent::__construct($object);
  }


public $type	; //String	Type of the result, must be video
public $id	; //String	Unique identifier for this result, 1-64 bytes
public $video_url	; //String	A valid URL for the embedded video player or video file
public $mime_type	; //String	Mime type of the content of video url, “text/html” or “video/mp4”
public $thumb_url	; //String	URL of the thumbnail (jpeg only) for the video
public $title	; //String	Title for the result
public $caption	; //String	Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
public $parse_mode	; //String	Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
public $video_width	; //Integer	Optional. Video width
public $video_height	; //Integer	Optional. Video height
public $video_duration	; //Integer	Optional. Video duration in seconds
public $description	; //String	Optional. Short description of the result
public $reply_markup	; //InlineKeyboardMarkup	Optional. Inline keyboard attached to the message
public $input_message_content	; //InputMessageContent	Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).

}