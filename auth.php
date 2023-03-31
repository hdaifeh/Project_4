<?php

use Firebase\JWT\JWT;

class Auth
{
    private static $key = 'YOUR_SECRET_KEY';

    public static function createToken($userId)
    {
        $payload = array(
            "user_id" => $userId
        );

        return JWT::encode($payload, self::$key);
    }

    public static function validateToken($token)
    {
        try {
            $payload = JWT::decode($token, self::$key, array('HS256'));
            return $payload->user_id;
        } catch (Exception $e) {
            return null;
        }
    }
}
