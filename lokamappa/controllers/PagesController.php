<?php
namespace App\Controllers;
class PagesController{
	public function home(){
		return view('index', compact('users'));
	}
	public function about(){
		$company = 'fs';
		return view('about', compact('company'));
	}
	public function contact(){
		return view('contact');
	}
}