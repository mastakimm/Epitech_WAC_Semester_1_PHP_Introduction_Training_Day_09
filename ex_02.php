<?php

class MyAttribute
{
    private $a;
    public function display()
    {
        echo $this->a . PHP_EOL;
    }
    public function __construct($a)
    {
        $this->a = $a;
    }
}
