<?php

/* 
 * High school database
 * Property of Elvis Until it is sold  * 
 */

use AfricasTalking\SDK\AfricasTalking;

$AT         = new AfricasTalking($usernamesms, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = $phone;

// Set your message
$message    = "Your Password is ".$password;

// Set your shortCode or senderId
$from       = "";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
        'from'    => $from
    ]);

    echo 'success,'.$token;
} catch (Exception $e) {
    echo "Error Sending Sms".$e->getMessage();
}