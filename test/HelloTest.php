<?php
use PHPUnit\Framework\TestCase;
use Fyers\Client as FyersClient;

final class HelloTest extends TestCase
{
    public function testHello()
    {
        $client = new FyersClient();
        $this->assertSame("1.0.0", $client->getVersion());
    }
}
