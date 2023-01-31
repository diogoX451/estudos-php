<?php

class Author
{
    public function __construct(public $name)
    {
        $this->name = $name;
    }

    public function setName(): string
    {
        return $this->name;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
