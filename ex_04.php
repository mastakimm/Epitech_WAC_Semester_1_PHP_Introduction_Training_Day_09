<?php

class MyTinyCalculator
{
    private $a;
    private $b;
    private $result;

    public function showResult()
    {
        return $this->result;
    }

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function setResult($result)
    {
        $this->result = $result;
    }

    public function add()
    {
        return $this->result = $this->a + $this->b;
    }

    public function subtract()
    {
        return $this->result = $this->a - $this->b;
    }

    public function multiply()
    {
        return $this->result = $this->a * $this->b;
    }

    public function divide()
    {
        return $this->result = $this->a / $this->b;
    }
}
