<?php
  $baseUrl = "https://otltest3.myshopify.com/admin/api/2020-01";
  $url = $baseUrl."/products/1962026532923.json";
  $apiKey = "369c4d989771b5bdc81f7ca203297653";
  $password = "15e2b8e0a600d4873eca1488c1cfb46c";

  $authToken = "Authorization: Basic ".base64_encode("$apiKey:$password");

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
    $curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json;',
    $authToken,
    ),
);

  $result = curl_exec($curl);

if (!$result) {
    die("Connection Failure");
}

  curl_close($curl);

  $json = json_decode($result);
  // echo json_last_error();
  // echo json_last_error_msg();

  echo $json -> product -> variants[0] -> price;
?>
