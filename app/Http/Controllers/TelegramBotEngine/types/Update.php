<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:31 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


use App\Http\Controllers\TelegramBotEngine\types\inline_mode\ChosenInlineResult;
use App\Http\Controllers\TelegramBotEngine\types\inline_mode\InlineQuery;
use App\Http\Controllers\TelegramBotEngine\types\payments\PreCheckoutQuery;
use App\Http\Controllers\TelegramBotEngine\types\payments\ShippingQuery;

class Update extends Type {

  protected $sub_entities = [
    'message'=>Message::class,
    'edited_message'=>Message::class,
    'channel_post'=>Message::class,
    'edited_channel_post'=>Message::class,
    'inline_query'=>InlineQuery::class,
    'chosen_inline_result'=>ChosenInlineResult::class,
    'callback_query'=>CallbackQuery::class,
    'shipping_query'=>ShippingQuery::class,
    'pre_checkout_query'=>PreCheckoutQuery::class,
    'poll'=>Poll::class,
    'poll_answer'=>PollAnswer::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $update_id 	; //Integer 	The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
public $message 	; //Message 	Optional. New incoming message of any kind — text, photo, sticker, etc.
public $edited_message 	; //Message 	Optional. New version of a message that is known to the bot and was edited
public $channel_post 	; //Message 	Optional. New incoming channel post of any kind — text, photo, sticker, etc.
public $edited_channel_post 	; //Message 	Optional. New version of a channel post that is known to the bot and was edited
public $inline_query 	; //InlineQuery 	Optional. New incoming inline query
public $chosen_inline_result 	; //ChosenInlineResult 	Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
public $callback_query 	; //CallbackQuery 	Optional. New incoming callback query
public $shipping_query 	; //ShippingQuery 	Optional. New incoming shipping query. Only for invoices with flexible price
public $pre_checkout_query 	; //PreCheckoutQuery 	Optional. New incoming pre-checkout query. Contains full information about checkout
public $poll 	; //Poll 	Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
public $poll_answer 	; //PollAnswer 	Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.

}