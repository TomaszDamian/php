<?php

class Post {
	public $title;
	public $author;
	public $published;
	public function __construct($title, $published, $author){
		$this->title = $title;
		$this->published = $published;
		$this->author = $author;
	}
}

$posts = [
	new Post("1",true,"123"),
	new Post("2",true,"123"),
	new Post("3",true,"123"),
	new Post("6",false,"222"),
];

//$publishedPosts = array_filter($post, function ($post) {
//	return $posts->published;
//});

//$titles = array_column($posts, 'title');

$posts = array_map(function($post){
	return (array) $post;
},$posts);


$titles = array_column($posts, 'author');

var_dump($titles);