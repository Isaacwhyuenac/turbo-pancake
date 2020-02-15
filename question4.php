<?php
  $baseUrl = "https://otltest3.myshopify.com/admin/api/2020-01";
  $url = $baseUrl."/products.json";
  $apiKey = "369c4d989771b5bdc81f7ca203297653";
  $password = "15e2b8e0a600d4873eca1488c1cfb46c";

  $authToken = "Authorization: Basic ".base64_encode("$apiKey:$password");

  $data = array("product" => array(
    "title" => "Isaac Wai Hung YUEN",
    "body_html" => "<strong>A programmer willing to join the team</strong>",
    "vendor" => "Isaac",
    "product_type" => "Php and Nodejs Programmer with Experience and Heart",
    "tags" => array(
      "php",
      "JavaScript",
      "Node.js",
    ),
    "published" => false
  ));

  $dataString = json_encode($data);
  echo $dataString;
  $curl = curl_init($url);

  curl_setopt($curl, CURLOPT_POSTFIELDS, $dataString);
  curl_setopt($curl, CURLOPT_POST, 1);
  // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
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
?>