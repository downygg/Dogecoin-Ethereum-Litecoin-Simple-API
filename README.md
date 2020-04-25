# Simple PHP Dogecoin, Litecoin and Ethereum API

[![N|Solid](https://crypto-api.xyz/assets/images/head.png)](https://crypto-api.xyz)

# This API provided by ChainsHub Platform
ChainsHub is a platform who provide interraction to Blockchain network with easiest method. Our services support multiple Blockchain coin, such as Dogecoin, Ethereum and Litecoin.

### Getting Started
  - Register at [ChainsHub Bot](https://t.me/ChainsHub_bot)
  - Create your coin Wallet
  - Send some coin to your bot wallet
  - Generate your API Key
  - Done.

# Request Object

  - Dogecoin And Litecoin
   ```
    "coin" => "doge", //doge, ltc
	"to_address" => "", //destination address
	"amount" => 20, //doge => 20 , ltc => 0.001
	"fees" => 1, //fee doge standart = 1, fee ltc standart 0.0001
	"access_key" => "" //api key
  ```
  
  - Ethereum
  ```
    "coin"=> "eth", //doge, ltc
	"to_address" => "", //destination address
	"amount" => 0.001, //0.001
	"gwei" => 1, //gwei, check https://ethgasstation.info/
	"gas_price" => 21000, //defult gas used
	"access_key" => "" //api key
  ```
