<?php
$curl = curl_init();
curl_setopt_array($curl,[
    CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'amount'=>100000,
        'callback_url' => "https://www.betatutor.ng/verify.php",
        'email'=>"amowesunday@gmail.com",
    ]),
    CURLOPT_HTTPHEADER => [
        "authorization: Bearer sk_test_449eb3bc7814f2c40382e7b37c22d3bf912a7ab3", //replace this with your own test key
        "content-type: application/json",
        "cache-control: no-cache"
    ]
]);
$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
    die('Curl returned error: ' . $err);
}
$response = json_decode($response,true);
header("location: ".$response["data"]["authorization_url"]);

?>
<html>
<head>
    <title>Testing</title>
</head>
<body>Testing</body>
</html>
