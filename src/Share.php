<?php

namespace BrianFaust\SocialShare;

class Share
{
    public function __call($method, $args)
    {
        $class = __NAMESPACE__.'\\Services\\'.studly_case($method);

        if (!class_exists($class)) {
            throw new \Exception("Unknown service [$method].");
        }

        return call_user_func_array([
            new $class(), 'getSchema',
        ], $args);
    }
}
