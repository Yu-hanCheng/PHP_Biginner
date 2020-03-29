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

$published = array_filter($posts, function ($post) {
    return $post->published;
});

$unpublished = array_filter($posts, function ($post) {
    return ! $post->published;
});

$modified = array_map(function ($post){
    return ['title' => $post->title];
}, $posts);

var_dump($modified);