<?php
namespace Fyers;

class Endpoint
{
    public static $BASE_URL = 'https://api.fyers.in/api';
    protected $version;
    protected static $lookup = [
        "generate-authcode" => 'generate-authcode'
    ];
    public function addVersionPrefix($prefix)
    {
        $this->version = $prefix;
    }

    public function resolve($handle)
    {
        if (!static::$lookup[$handle]) {
            throw new Exception("requested endpoint not exist");
        }
        return implode('/', [
            static::$BASE_URL,
            $this->version,
            static::$lookup[$handle]
        ]);
    }
}
