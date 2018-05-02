<?php
namespace App\Controllers;
use App\Core\App;
class PostController{
	public function PostCreate(){
		view("PostCreate");
	}
	public function PostEdit(){
		view("PostEdit");
	}
}