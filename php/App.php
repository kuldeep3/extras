<?php

class App
{
    protected static $registery = [];
    public static function bind($key, $value)
    {
        static::$registery[$key] = $value;
    }
    public static function get($key)
    {
        if (! array_key_exists($key, static::$registery)) {
            throw new Exception("No ${key} is bound in the container");
        }
        return static::$registery[$key];
    }
}
