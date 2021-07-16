<?php

interface MountsCableInterface
{
    public function mountsCable(int $meter): void;
}

interface CreateDocumentInterface
{
    public function createExel(): void;

    public function readExel(): string;
}

interface DriveCarsInterface
{
    public function driveCars(): void;
}

abstract class Human implements CreateDocumentInterface
{
    protected string $name;
    protected int $age;
    protected string $profession;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     */
    public function setProfession(string $profession): void
    {
        $this->profession = $profession;
    }


}

class Mounts extends Human implements MountsCableInterface
{

    /**
     * @param int $meter
     */
    public function mountsCable(int $meter): void
    {
        echo "mount {$meter} meter cable";
    }

    /**
     *
     */
    public function createExel(): void
    {
        echo '<br>I created Exel file<br>';
    }

    /**
     * @return string
     */
    public function readExel(): string
    {
        return 'I read Exel file';
    }
}

var_dump(new Mounts());
$mounts = new Mounts();
$mounts->mountsCable(10);
$mounts->createExel();
echo '<br>'.$mounts->readExel();
