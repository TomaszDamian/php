<?php
namespace App\Controllers;
use App\Core\App;
class PostController{
	public function PostCreate(){
		view("PostCreate");
	}
	public function PostEdit(){
		$blogs = App::get('database')->selectAll('blogs');
		view("PostEdit",compact('blogs'));
	}
	public function PostBlog(){

		
		if($_POST['title'] == ""){
			$_POST['title'] = "-----";
		};
		if($_POST['owner'] == ""){
			$_POST['owner'] = "Anonymous";
		};
		if($_POST['body'] == ""){
			$_POST['body'] = "Empty Post";
		}

		App::get('database')->insert('blogs',[
			'title' => $_POST['title'],
			'body' => $_POST['body'],
			'owner' => $_POST['owner']
		]);
		redirect('/MyBlogWall');
	}
}