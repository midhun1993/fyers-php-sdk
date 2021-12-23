<?php
use PHPUnit\Framework\TestCase;
use Fyers\Client as FyersClient;

final class HelloTest extends TestCase
{
    public function testHello()
    {
        $client = new FyersClient('fsdf', 'asdasd');
        $generator = $client->getCodeGenerator();
        $generator->addHandler("https://trade.fyers.in/api-login/redirect-uri/index.html");
        $generator->addState("fdsf");
        
        print_r($generator->getCodeGenerationLink());
    }
}
