<?php


namespace App\Http\Controllers\TelegramBotEngine;




//last update March 30, 2020

class Telegram {

  private $api_key;
  private $request;

  public function __construct($api_key = null) {
    $api_key != null ? $this->api_key = $api_key : $this->api_key = Config::TOKEN;
    $this->request = new Request($this->api_key);
  }




  //--------------------------------------updating messages------------------------------------
  public function getUpdates($offset = null, $limit = null, $timeout = null, $allowed_updates = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setWebhook($url, $certificate = null, $max_connections = null, $allowed_updates = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function deleteWebhook(){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getWebhookInfo(){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }







  //--------------------------------------available methods------------------------------------
  public function getMe(){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendMessage($chat_id, $text, $parse_mode = null, $disable_web_page_preview = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function forwardMessage($chat_id, $from_chat_id, $message_id, $disable_notification = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendPhoto($chat_id, $photo, $caption = null, $parse_mode = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendAudio($chat_id, $audio, $caption = null, $parse_mode = null, $duration = null, $performer = null, $title = null, $thumb = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendDocument($chat_id, $document, $thumb = null, $caption = null, $parse_mode = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendVideo($chat_id, $video, $duration = null, $with = null, $height = null, $thumb = null, $caption = null, $parse_mode = null, $supports_streaming = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendAnimation($chat_id, $animation, $duration = null, $with = null, $height = null, $thumb = null, $caption = null, $parse_mode = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendVoice($chat_id, $voice, $caption = null, $parse_mode = null, $duration = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendVideoNote($chat_id, $voice_note, $duration = null, $lenght = null, $thumb = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendMediaGroup($chat_id, $media,  $disable_notification = null, $reply_to_message_id = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendLocation($chat_id, $latitude, $longitude, $live_period = null,  $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function editMessageLiveLocation($chat_id = null, $message_id = null, $inline_message_id = null, $latitude, $longitude, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function stopMessageLiveLocation($chat_id = null, $message_id = null, $inline_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendVenue($chat_id, $latitude, $longitude, $title, $address, $foursquare_id = null, $foursquare_type = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendContact($chat_id, $phone_number, $first_name, $last_name = null, $vcard = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendPoll($chat_id, $question, $options, $is_anonymous = null, $type = null, $allows_multiple_answers = null, $correct_option_id = null, $is_closed = null, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendDice($chat_id, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendChatAction($chat_id, $action){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getUserProfilePhotos($user_id, $offset = null, $limit = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getFile($file_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function kickChatMember($chat_id, $user_id, $until_date = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function unbanChatMember($chat_id, $user_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function restrictChatMember($chat_id, $user_id, $permissions, $until_date = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function promoteChatMember($chat_id, $user_id, $can_change_info = null, $can_post_messages = null, $can_edit_messages = null, $can_delete_messages = null, $can_invite_users = null, $can_restrict_members = null, $can_pin_messages = null, $can_promote_members = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setChatAdministratorCustomTitle($chat_id, $user_id, $custom_title){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setChatPermissions($chat_id, $permissions){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function exportChatInviteLink($chat_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setChatPhoto($chat_id, $photo){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function deleteChatPhoto($chat_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setChatTitle($chat_id, $title){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setChatDescription($chat_id, $description = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function pinChatMessage($chat_id, $message_id, $disable_notification = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function unpinChatMessage($chat_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function leaveChat($chat_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getChat($chat_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getChatAdministrators($chat_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getChatMembersCount($chat_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getChatMember($chat_id, $user_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setChatStickerSet($chat_id, $sticker_set_name){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function deleteChatStickerSet($chat_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function answerCallbackQuery($callback_query_id, $text = null, $show_alert = null, $url = null, $cache_time = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setMyCommands($commands){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getMyCommands(){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  //--------------------------------------updating messages------------------------------------

  public function editMessageText($chat_id = null, $message_id = null, $inline_message_id = null, $text, $parse_mode = null, $disable_web_page_preview = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function editMessageCaption($chat_id = null, $message_id = null, $inline_message_id = null, $caption = null, $parse_mode = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function editMessageMedia($chat_id = null, $message_id = null, $inline_message_id = null, $media, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function editMessageReplyMarkup($chat_id = null, $message_id = null, $inline_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function stopPoll($chat_id, $message_id, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function deleteMessage($chat_id, $message_id){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }


  //--------------------------------------stickers------------------------------------

  public function Sticker($file_id, $file_unique_id, $with, $height, $is_animated, $thumb = null, $emoji = null, $set_name = null, $mask_position = null, $file_size = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function StickerSet($name, $title, $is_animated, $contains_masks, $stickers, $thumb = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function MaskPosition($point, $x_shift, $y_shift, $scale){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function sendSticker($chat_id, $sticker, $disable_notification = null, $reply_to_message_id = null, $reply_markup = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function getStickerSet($name){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function uploadStickerFile($user_id, $png_sticker){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function createNewStickerSet($user_id, $name, $title, $png_sticker = null, $tgs_sticker = null, $emojies, $contains_masks = null, $mask_position = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function addStickerToSet($user_id, $name, $title, $png_sticker, $tgs_sticker = null, $emojies, $mask_position = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setStickerPositionInSet($sticker, $position){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function deleteStickerFromSet($sticker){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function setStickerSetThumb($name, $user_id, $thumb = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }


  //--------------------------------------------------inline mode----------------------------------------------------

  public function InlineQuery($id, $from, $location = null, $query, $offset){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function answerInlineQuery($inline_query_id, $results, $cache_time = null, $is_personal = null, $next_offset = null, $switch_pm_text = null, $switch_pm_parameter = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function InlineQueryResultArticle($type, $id, $title, $input_message_content, $reply_markup = null, $url = null, $hide_url = null, $description = null, $thumb_url = null, $thumb_with = null, $thumb_height = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function InlineQueryResultPhoto($type, $id, $photo_url, $thumb_url, $photo_with = null, $photo_height = null, $title = null, $description = null, $caption = null, $parse_mode = null, $reply_mrkup = null, $input_message_content = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }

  public function InlineQueryResultGif($type, $id, $gif_url, $gif_with = null, $gif_height = null, $gif_duration = null, $thumb_url, $title = null, $caption = null, $parse_mode = null, $reply_mrkup = null, $input_message_content = null){
    $args = get_func_args_array(__METHOD__, func_get_args());
    return $this->request->get(__FUNCTION__, $args);
  }



}