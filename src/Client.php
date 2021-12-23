<?php
namespace Fyers;

use Fyers\Endpoint;
use Fyers\Authentication\CodeGenerator;

class Client
{
    protected $endpoint;
    protected $clientId;
    protected $secretkey;
    protected $accessToken;


    public function __construct($clientId, $secretkey, $accessToken = null)
    {
        $this->clientId =$clientId;
        $this->secretkey =$secretkey;
        $this->accessToken =$accessToken;
        $this->endpoint = new Endpoint();
        $this->enableV1();
    }

    public function enableV1()
    {
        $this->endpoint->addVersionPrefix('v1');
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function getEndpointResolver()
    {
        return $this->endpoint;
    }

    public function getCodeGenerator()
    {
        return new CodeGenerator($this);
    }
}
