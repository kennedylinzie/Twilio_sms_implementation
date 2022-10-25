<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'vendor/autoload.php';  // twilion  "version": "5.42.2",
 
use Twilio\Rest\Client; 
 
$sid    = "here"; //you sid
$token  = "here"; //your token
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+265888158673", // to 
                           array(  
                               "messagingServiceSid" => "here", //this represents your twilio number     
                               "body" => "malawi is a very beautiful country" 
                           ) 
                  ); 
 
print($message->sid);