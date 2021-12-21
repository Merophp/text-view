<?php

use Merophp\TextViewPlugin\TextView;
use PHPUnit\Framework\TestCase;

/**
 * @covers TextView
 */
class TextViewTest extends TestCase
{
    public function testAll(){
        $textView = new TextView;
        $textView->text(5);
        $this->assertEquals('5', $textView->render());
        $textView->text(1.1);
        $this->assertEquals('1.1', $textView->render());

        $this->assertEquals('text/plain;charset=utf-8', $textView->getContentType());
    }
}
