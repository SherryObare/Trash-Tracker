<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "elly254";
$apiKey     = "5307bed6893c9d8df5ec1dd4372af249cdbb63069527b66b326f72821ce55f64";

// Initialize the SDK
$AT         = new AfricasTalking($usernamesms, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = "+254710652857";

// Set your message
$message    = "Hello world";

// Set your shortCode or senderId
$from       = "";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message,
        'from'    => $from
    ]);

    echo 'Sussessful';
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}