<?php
  $url = "https://api.paystack.co/transfer";
  $fields = [
    'source' => "balance",
    'amount' => 3794800,
    'recipient' => "RCP_w9c1fl4yimcd8ss",
    'reason' => "Holiday Flexing",
    'currency' => "GHS"
  ];
  $fields_string = http_build_query($fields);
  //open connection
  $ch = curl_init();

  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_6fcf7a0b51f482d2fea7dffa5db1e999b00e0bea",
    "Cache-Control: no-cache",
  ));

  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

  //execute post
  $result = curl_exec($ch);
  echo $result;
?>
