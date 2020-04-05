<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 4/5/2020
 * Time: 3:07 PM
 */

namespace App\Http\Controllers\TelegramBotEngine\types\passport;


class EncryptedPassportElement  extends Type {

  protected $sub_entities = [
    'files'=>PassportFile::class,
    'front_side'=>PassportFile::class,
    'reverse_side'=>PassportFile::class,
    'selfie'=>PassportFile::class,
    'translation'=>PassportFile::class,
  ];

  public function __construct($object = null) {
    parent::__construct($object);
  }

public $type 	; //String 	Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
public $data 	; //String 	Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
public $phone_number 	; //String 	Optional. User's verified phone number, available only for “phone_number” type
public $email 	; //String 	Optional. User's verified email address, available only for “email” type
public $files 	; //Array of PassportFile 	Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
public $front_side 	; //PassportFile 	Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
public $reverse_side 	; //PassportFile 	Optional. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
public $selfie 	; //PassportFile 	Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
public $translation 	; //Array of PassportFile 	Optional. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
public $hash 	; //String 	Base64-encoded element hash for using in PassportElementErrorUnspecified

}