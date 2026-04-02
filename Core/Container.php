<?php

namespace Core;

class Container
{
    protected $bindings = [];

    /**
     * @param string $key 
     * @param function this will buidl up the database 
     * this will push the $key and $fn to the $bindings array
     */

    public function bind($key, $fn)
    {
        $this->bindings[$key] = $fn;
    }

    /**
     * this function will take the object out of the container
     * @param string $key
     * this will accept a key and will check if that key exist in the bindings array
     * @return function returns what ever the given function is for
     */
    public function resolve($key)
    {
        if (! array_key_exists($key, $this->bindings)) {
            throw new \Exception("The given key does not exist. {$key}");
        }
        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}
