<?php
namespace Fyers;

class ApiFailedResponse
{
    protected $s;
    protected $code;
    protected $message;
    protected $header;
    public function __construct($s, $code, $message, $header)
    {
        $this->s = $s;
        $this->code = $code;
        $this->message = $message;
        $this->additionalKey = $header;
    }
}
