<?php

namespace App\Solid;

class Html
{
    public function __call(string $name, array $arguments):string
    {
        $class = '\App\Solid\Tags\\'.ucfirst($name);
        return call_user_func_array([new $class, 'render'], $arguments);
    }
}


