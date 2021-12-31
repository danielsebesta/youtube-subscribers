<?php

// PHP - SUBSCRIBER COUNT USING YOUTUBE API V3
// BY @danielsebesta

$api_key = "";
$channel_id = "";




$api_response = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id=' . $channel_id . '&key=' . $api_key . '');
$api_response_decoded = json_decode($api_response, true);

$subscribers = $api_response_decoded['items'][0]['statistics']['subscriberCount'];

echo $subscribers

?>