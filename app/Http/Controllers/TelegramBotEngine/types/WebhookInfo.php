<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:35 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types;


class WebhookInfo extends Type {

  protected $sub_entities = [
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }


public $url 	; //String 	Webhook URL, may be empty if webhook is not set up
public $has_custom_certificate 	; //Boolean 	True, if a custom certificate was provided for webhook certificate checks
public $pending_update_count 	; //Integer 	Number of updates awaiting delivery
public $last_error_date 	; //Integer 	Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
public $last_error_message 	; //String 	Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
public $max_connections 	; //Integer 	Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
public $allowed_updates 	; //Array of String 	Optional. A list of update types the bot is subscribed to. Defaults to all update types



}