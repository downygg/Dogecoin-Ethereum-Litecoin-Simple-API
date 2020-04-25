<?php
  $headers = array();
  $headers[] = "Content-Type:application/json";

/*
    Doge and Ltc Parameter

  $data = array(
    "coin"=> "doge", //doge, ltc
	"to_address" => "", //destination address
	"amount" => 20, //doge => 20 , ltc => 0.001
	"fees" => 1, //fee doge standart = 1, fee ltc standart 0.0001
	"access_key" => "" //api key
  );
 */

/*
    Ethereum Parameter
    
  $data = array(
    "coin"=> "eth", //doge, ltc
	"to_address" => "", //destination address
	"amount" => 0.001, //0.001
	"gwei" => 1, //gwei, check https://ethgasstation.info/
	"gas_price" => 21000, //defult gas used
	"access_key" => "" //api key
  );
  */

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://crypto-api.xyz/api/transaction");
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
  //curl_setopt($ch, CURLOPT_VERBOSE, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  $result = curl_exec($ch);
  curl_close($ch);
  print_r($result);
?>
