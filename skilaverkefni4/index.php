<?php

class Chapter
{
	public $ctitle;
	public $cbody;
	public $cread;
	function __construct($ctitle, $cbody, $cread = false)
	{
		$this->ctitle = $ctitle;
		$this->cbody = $cbody;
		$this->cread = $cread;
	}
}

class Book{
	public $title;
	public $author;
	public $chapters;

	function __construct($title, $author, $chapters){
		$this->title = $title;
		$this->author = $author;
		$this->chapters = $chapters;
	}
	
	function isFinished(){
		$counter = 0;
		$ToatlChapters = count($this->chapters);
		foreach ($this->chapters as $chap ) {
			if($chap->cread){
				$counter +=1;
			}
		}
		if($counter >= $ToatlChapters){
			return true;
		}
		else{
			return false;
		}
	}

	function ChapterCount(){
		return count($this->chapters);
	}

	function AddChapter($ctitle, $cbody, $cread = false){
		$chapAdded = new Chapter($ctitle, $cbody, $cread);
		array_push($this->chapters, $chapAdded);
		echo "You have succesfully added a chapter \n";
	}
}

$Chapters = [
	new Chapter("Chapter1","some text",true),
	new Chapter("Chapter2","hello",true),
	new Chapter("Chapter3","more text",true)
];

$book1 = new Book("my Book","Tomasz",$Chapters);

$isFinished = $book1->isFinished();
if($isFinished){
	echo "You have finished the book \n";
}
else{
	echo "You haven't finished the Book \n";
}

$amountOfChap = $book1->ChapterCount();
echo "there are: $amountOfChap chapters in the book \n\n";

$book1->AddChapter("Chapter4","bodyText");

$amountOfChap = $book1->ChapterCount();
echo "there are: $amountOfChap chapters in the book \n";
$isFinished = $book1->isFinished();
if($isFinished){
	echo "You have finished the book \n";
}
else{
	echo "You haven't finished the Book \n";
}]\