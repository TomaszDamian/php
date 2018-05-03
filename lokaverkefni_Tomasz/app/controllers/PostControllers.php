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
	public function PostBlog(){
		App::get('database')->insert('blogs',[
			'title' => $_POST['title'],
			'body' => $_POST['body'],
			'owner' => $_POST['owner']
		]);
		redirect('/MyBlogWall');
	}
}