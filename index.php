<?php
require_once ('C:\xampp\htdocs\vendor\autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'en';
$target = 'tr';

$text = 'Naturally there will be mass protests and I am sure the SEC will lose many lawsuits. And crypto twitter is buzzing about how this is a real revolution and another battle between cyber freedom and government.';

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

//echo $result;

$aranacak = ".";
$text2 = strstr($result, $aranacak, true);
$text3 = strstr($result, $aranacak, false);


$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://rewriter-paraphraser-text-changer-multi-language.p.rapidapi.com/rewrite",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r
    \"language\": \"tr\",\r
    \"strength\": 2,\r
    \"text\": \"".$text2."\"\r
}",

    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: rewriter-paraphraser-text-changer-multi-language.p.rapidapi.com",
        "X-RapidAPI-Key: 5d2f6cc27emsh2937c915efb0c04p1ca88bjsn018e3da80ad3",
        "content-type: application/json"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo "str 1 ".$response."<br>";
}
curl_setopt_array($curl, [
    CURLOPT_URL => "https://rewriter-paraphraser-text-changer-multi-language.p.rapidapi.com/rewrite",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\r
    \"language\": \"tr\",\r
    \"strength\": 2,\r
    \"text\": \"".$text3."\"\r
}",

    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: rewriter-paraphraser-text-changer-multi-language.p.rapidapi.com",
        "X-RapidAPI-Key: 5d2f6cc27emsh2937c915efb0c04p1ca88bjsn018e3da80ad3",
        "content-type: application/json"
    ],
]);

$response2 = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo "str 2 ".$response2."<br>";
}