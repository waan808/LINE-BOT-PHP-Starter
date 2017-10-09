<?php
$access_token = 'muR1QxPN8qVtPnffoMLyMINl3n4iSDNg4BL5NGQiwwNgNozw6WMg2IFAjc12FEEOK0qxh5hwrX79zBdv6o54LDwIJ3U0M8pxv9a2+YI5VxnCeVZ9T2znFuClMF4v06XAQiwnRqwyIOKYW/CgswBZngdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
