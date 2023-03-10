<?php

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
    \"strength\": 3,\r
    \"text\": \"Doğal olarak kitlesel protestolar olacak ve SEC'in birçok davayı kaybedeceğinden eminim. Ve kripto twitter bunun nasıl gerçek bir devrim ve siber özgürlük ile hükümet arasındaki başka bir savaş olduğu konusunda vızıldıyor.\"\r
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
    echo $response;
}