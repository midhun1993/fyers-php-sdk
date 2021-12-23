<?php
namespace Fyers\Authentication;

class CodeGenerator
{
    protected $redirectUri;
    protected $responseType;
    protected $state;
    protected $client;
   
    /**
     * @param string $clientId  found from fyers console
     * @param string $state -Random alpha numeric string for validating the redirect
     */
    public function __construct($client)
    {
        $this->client = $client;
        $this->responseType = 'code';
    }

    /**
     * @param string $redirectUri Redirect URL
     */
    public function addHandler($redirectUri):void
    {
        $this->redirectUri = $redirectUri;
    }

    /**
     * @param string $state Random alpha numeric string
     */
    public function addState($state):void
    {
        $this->state = $state;
    }

    public function getCodeGenerationLink():string
    {
        $endpoint = $this->client->getEndpointResolver()->resolve("generate-authcode");
        $parameters = [
            "client_id=".$this->client->getClientId(),
            "redirect_uri=".$this->redirectUri,
            "response_type=".$this->responseType,
            "state=".$this->state,
        ];
        return implode('', [
            $endpoint,
            '?',
            implode('&', $parameters)
        ]);
    }
}
