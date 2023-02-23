<?php
require 'sms/vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username = "elly254";
$apikey   = "a814a699f6c1947a2a3e4c3b97118a367e169afa147748cabf3bc8c91e8dc02f";

// Initialize the SDK
$AT       = new AfricasTalking($username, $apiKey);

// Get the voice service
$voice    = $AT->voice();

// Set your Africa's Talking phone number in international format
$from     = "+254711082772";

// Set the numbers you want to call to in a comma-separated list
$to       = "+254710652857,+25442255273";

try {
    // Make the call
    $results = $voice->call([
        'from' => $from,
        'to'   => $to
    ]);

    print_r($results);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}