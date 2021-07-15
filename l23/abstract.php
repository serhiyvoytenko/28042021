<?php

abstract class Gadget
{
    protected string $type;
    private int $size;
    protected string $color;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type = 'Phone'): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size = 6): void
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color = 'White'): void
    {
        $this->color = $color;
    }

    abstract public function makeCall(): void;

}

class Phone extends Gadget
{
    public function makeCall(): void
    {
        echo 'Call over viber';
    }

}

class Tablet extends Gadget
{

    public function viewMovies(): void
    {
        echo 'I\'m view movies';
    }

    public function makeCall(): void
    {
        echo 'Call over telegram';
    }
}

class Iphone extends Phone
{
    public string $color;
}

class Lenovo extends Phone
{
    public string $color;

    public function setColor(string $color = 'Red'): void
    {
        $this->color = $color;
    }

    public function getColor():string
    {
        return $this->color;
    }
}


$obj = new Phone();
$obj->setColor();
echo $obj->getColor() . '<br>';
$obj->makeCall();
$iphone = new Iphone();
$iphone->setColor();
$iphone->color = 'green';
$objLenovo = new Lenovo();
$objLenovo->setColor('red');
echo '<br>'.$objLenovo->getColor();

var_dump($obj, new Iphone(), $iphone, $objLenovo);

function powerOnGadget(Gadget $gadget)
{
    $gadget->makeCall();
}

powerOnGadget(new Tablet());

$obj2 = new Tablet();
$obj2->viewMovies();