<?php
//require_once 'vendor/autoload.php';
//
//use Twilio\Rest\Client;
//
//$sid    = "AC6bfbaf447ebdbb2e4c2b0ec889d5dca1";
//$token  = "4d8d6876b59afccefc53cea0569b1b1c";
//$twilio = new Client($sid, $token);
//
//$message = $twilio->messages
//    ->create("+8801793540211", // to
//        array(
//            "messagingServiceSid" => "MG0ecd831699e0e96f2dd859d6492064f3",
//            "body" => "Hello, I am fine"
//        )
//    );
//
//print($message->sid);
//
//if($message){
//    echo "Send Message";
//}
//else{
//    echo "Didn't Send";
//}
//

function sendsms($otp)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('api_key' => 'Q10N03X8V4tg5oscUcCiAMe0NW1ryjtfMqY5V7g0', 'msg' => $otp, 'to' => '8801843180191'),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    echo $response;
}
?>