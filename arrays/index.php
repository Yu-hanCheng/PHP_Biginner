<?php

class Post
{
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author= $author;
        $this->published = $published;
    }
}

$posts = [
    new Post("First", 'sa',true),
    new Post("second", 'sa', true),
    new Post("third",'sa', false),
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

$titles = array_map(function ($post){
    return $post->title;
}, $posts);

$titles2 = array_column($posts, 'title','author');



var_dump($titles2);