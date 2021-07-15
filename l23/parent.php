<?php

class A
{
    protected string $b;

//    public function __construct()
//    {
//        $this->b = 'B from class A init in construct';
//        echo $this->b;
//    }

    public function setB(): void
    {
        $this->b = '<br>Hi, this is B from A class<br>';
        echo $this->b;
    }

    /**
     * @return string
     */
    public function getB(): string
    {
        return $this->b;
    }
}

class B extends A
{
//    public function __construct()
//    {
//        A::__construct();
//        parent::__construct();
//        echo 'Hi, from class B';
//    }

    public function setB(): void
    {
//        A::setB();
        $this->b = '<br>This is b in B class<br>';
        echo $this->b;
    }

    /**
     * @return null
     */
    public function getB(): string
    {
        return $this->b;
    }
}

class C extends B
{
    public function setB(): void
    {
        A::setB();
        $this->b = '<br>This is b in C class<br>';
        echo $this->b;
    }
}

$obj = new C;
$obj->setB();
var_dump($obj, $obj instanceof A);
