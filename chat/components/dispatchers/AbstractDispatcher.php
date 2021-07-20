<?php


namespace components\dispatchers;


abstract class AbstractDispatcher
{
    private const DEFAULT_PART = 'index';

    private array $parts = [];

    public function __construct()
    {
    }

    abstract protected function dispatch(): void;
}