<?php

namespace App\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testExemplodeTest()
    {
        $html = new \App\Solid\Html();
        $img = $html->img("images/photo.jpg");

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

}

