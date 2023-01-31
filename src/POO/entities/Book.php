<?php

class Book
{
    public function __construct(public $title, public Author $author)
    {
        $this->author = $author;
        $this->title = $title;
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($title, $value)
    {
        $this->$title = $value;
    }
}
