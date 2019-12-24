<?php

namespace App\Solid;

class Html
{
    public function img(string $src):string
    {
        return '<img src="'.$src.'">';
    }

}


