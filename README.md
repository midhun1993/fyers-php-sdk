# FYERS PHP SDK

***FYI : It's under development, currently i/we don't provide any support. Include this library at production on your own risk.***

#### Generate redirect URL
>The below snippet shows how you can create a redirect URL for generating the auth_code, After getting the $redirectURL you can redirect the page to that URL.
```` 
<?php
require 'vendor/autoload.php'
use Fyers\Client as FyersClient;

$clientId = "Get from fyers account";
$screctKey = "Get from fyers account";
$state ="Random string"

$client = new FyersClient($clientId, $screctKey);
$generator = $client->getCodeGenerator();
$generator->addHandler("https://trade.fyers.in/api-login/redirect-uri/index.html");
$generator->addState($state);
$redirectURL =  $generator->getCodeGenerationLink();

?>
````