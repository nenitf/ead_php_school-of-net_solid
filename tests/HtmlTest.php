<?php

namespace App\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderizaUmaImagem()
    {
        $html = new Html();
        $img = $html->img("images/photo.jpg");

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

    public function testCriaUmLinkComUmaImagemComoAncora()
    {
        $html = new Html();
        $img = $html->img("images/photo.jpg");
        $link = $html->a('http://neni.dev', $img);

        $this->assertEquals('<a href="http://neni.dev"><img src="images/photo.jpg"></a>', $link);
    }

    public function testCriaUmaLista()
    {
        $html = new Html();
        $lista = $html->ul("<li>Felipe</li>");

        $this->assertEquals("<ul><li>Felipe</li></ul>", $lista);
    }

}
