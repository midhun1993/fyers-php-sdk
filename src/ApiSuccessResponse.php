<?php
namespace Fyers;

class ApiSuccessResponse
{
    protected $s;
    protected $code;
    protected $message;
    protected $additionalKey;
    public function __construct($s, $code, $message, $additionalKey)
    {
        $this->s = $s;
        $this->code = $code;
        $this->message = $message;
        $this->additionalKey = $additionalKey;
    }
}
