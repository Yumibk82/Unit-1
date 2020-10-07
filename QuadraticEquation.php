<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function getA(){
        return $this->a;
    }
    function getB(){
        return $this->b;
    }
    function getC(){
        return $this->c;
    }

    public function getDiscriminant(){
        return (($this->b)*($this->b)-(4*$this->a*$this->c));
    }

    public function getRoot1()
    {
        return ((-$this->b) + sqrt($this->getDiscriminant()))/(2*$this->a);
    }
    public function getRoot2(){
        return ((-$this->b) - sqrt($this->getDiscriminant()))/(2*$this->a);
    }
}
