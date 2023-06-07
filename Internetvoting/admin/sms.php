<?php

function sendsms($sms_message, $phone)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('api_key' => 'Q10N03X8V4tg5oscUcCiAMe0NW1ryjtfMqY5V7g0', 'msg' => $sms_message, 'to' => $phone),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    echo $response;
}
?>