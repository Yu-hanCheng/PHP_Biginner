<?php

class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post("First", true),
    new Post("second", true),
    new Post("third", false),
];

var_dump($posts);