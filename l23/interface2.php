<?php

interface NoisyInterface
{
    public function makeNoise(): string;
}

interface PainfulInterface
{
    public function scratch(): string;

    public function bite(): string;
}

abstract class Animal implements NoisyInterface
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Cat extends Animal
{

    /**
     * @return string
     */
    public function makeNoise(): string
    {
        // TODO: Implement makeNoise() method.
    }
}

class Dog implements PainfulInterface
{

    /**
     * @return string
     */
    public function scratch(): string
    {
        // TODO: Implement scratch() method.
    }

    /**
     * @return string
     */
    public function bite(): string
    {
        // TODO: Implement bite() method.
    }
}