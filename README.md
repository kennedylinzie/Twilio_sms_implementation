# Twilio PHP implementation

Make sure you have PHP version 7 or latest installed.

After cloning the repository run the following command in the root directory:
```
composer require twilio/sdk
```

# Send an SMS/Quickstart
Once you have run the composer, the Vendor folder will be created hence why we are using the Client class from the Vendor directory. Paste your <strong>sid</strong> in the ***$sid*** variable and do the same for the token which will be assigned to the ***$token*** variable.
```php
require_once 'vendor/autoload.php';  
 
use Twilio\Rest\Client; 
 
$sid    = "here"; // YOUR SID HERE
$token  = "here"; //YOUR TOKEN HERE
```

Then call the method ***Client*** and give it the above defined variables as shown below.
```php
$twilio = new Client($sid, $token); 
```

To finalize sending a message, assign a 2 dimension array abject to the variable(***$twilio***) defined above. The identifier will be the number to receive the sms, the ***messagingServiceSid*** represents the number twilio has given to you and finally the ***body** represents the message thats supposed to be sent. After running the code you are supposed to get a response from the server. 
```php
$message = $twilio->messages 
                  ->create("+265888158673", // NUMBER TO SEND THE SMS
                           array(  
                               "messagingServiceSid" => "here", //THIS REPRESENTS YOUR TWILIO NUMBER     
                               "body" => "malawi is a very beautiful country" 
                           ) 
                  ); 
 
print($message->sid);
```

The entire code is supposed to be written as below: 
```php
require_once 'vendor/autoload.php';  
 
use Twilio\Rest\Client; 
 
$sid    = "here"; // YOUR SID HERE
$token  = "here"; //YOUR TOKEN HERE

$twilio = new Client($sid, $token); 

$message = $twilio->messages 
                  ->create("+265888158673", // NUMBER TO SEND THE SMS
                           array(  
                               "messagingServiceSid" => "here", //THIS REPRESENTS YOUR TWILIO NUMBER     
                               "body" => "malawi is a very beautiful country" 
                           ) 
                  ); 
 
print($message->sid);

```

GOOD HACKING <img src="https://media.giphy.com/media/hvRJCLFzcasrR4ia7z/giphy.gif" height="25px">.