<?php
namespace Fyers;

class StatusCode
{
    protected static $map = [
        200 => 'Request was successful',
        400 => 'Bad request. The request is invalid or certain other errors',
        401 => 'Authorization error. User could not be authenticated',
        403 => 'Permission error. User does not have the necessary permissions',
        429 => 'Rate limit exceeded. Users have been blocked for exceeding the rate limit.',
        500 => 'Internal server error.'
    ];

    public static function getMessage($http_code)
    {
        return static::$map[$http_code];
    }
}
