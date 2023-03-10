<?php
require_once ('C:\xampp\htdocs\vendor\autoload.php');
use \Statickidz\GoogleTranslate;
ini_set('max_execution_time', '0');
$_FILE = fopen("300text.txt", 'r');
//$sayac = 0;
while (!feof($_FILE)) {
    $_VERI = fgets($_FILE);
//    echo $sayac.$_VERI;
//    $sayac++;

    $source = 'es';
    $target = 'tr';
    $text = $_VERI;
    $trans = new GoogleTranslate();
    $result = $trans->translate($source, $target, $text);
    echo $result."<br>";
//    $curl = curl_init();
//    curl_setopt_array($curl, [
//        CURLOPT_URL => "https://rewriter-paraphraser-text-changer-multi-language.p.rapidapi.com/rewrite",
//        CURLOPT_RETURNTRANSFER => true,
//        CURLOPT_FOLLOWLOCATION => true,
//        CURLOPT_ENCODING => "",
//        CURLOPT_MAXREDIRS => 10,
//        CURLOPT_TIMEOUT => 30,
//        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//        CURLOPT_CUSTOMREQUEST => "POST",
//        CURLOPT_POSTFIELDS => "{\r
//    \"language\": \"tr\",\r
//    \"strength\": 2,\r
//    \"text\": \"".$text."\"\r
//}",
//        CURLOPT_HTTPHEADER => [
//            "X-RapidAPI-Host: rewriter-paraphraser-text-changer-multi-language.p.rapidapi.com",
//            "X-RapidAPI-Key: 5d2f6cc27emsh2937c915efb0c04p1ca88bjsn018e3da80ad3",
//            "content-type: application/json"
//        ],
//    ]);
//    $response = curl_exec($curl);
//    $err = curl_error($curl);
//    curl_close($curl);
//    if ($err) {
//        echo "cURL Error #:" . $err;
//    } else {
//        echo "str 1 ".$response."<br>";
//    }
}
fclose($_FILE);

