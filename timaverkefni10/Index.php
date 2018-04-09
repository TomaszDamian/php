<?php

class Chapter
{
	public $title;
	public $body;
	public $read;
	function __construct($title, $body, $read = false)
	{
		$this->title = $title;
		$this->body = $body;
		$this->read = $read;
	}
	function ReadComplete(){
		$this->read = true;
	}
}

$Chapters = [
	new Chapter("something","this is some placeholder text for a body"),
	new Chapter("another title","even more placeholder text for the body"),
	new Chapter("even more names","even more placeholder text for the body")
];

$Chapters[1]->ReadComplete();
require 'index.view.php';