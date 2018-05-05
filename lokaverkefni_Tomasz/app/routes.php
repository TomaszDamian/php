<?php
$router->get("","PagesController@home");
$router->get("about","PagesController@about");
$router->get("Information","PagesController@Information");
$router->get("users","UsersController@index");
$router->get("Sources", "PagesController@Sources");
$router->get("MyBlogWall","PagesController@MyMainWall");
$router->get("PostCreate","PostController@PostCreate");
$router->get("PostEdit","PostController@PostEdit");
$router->get("EditThisPost","PostController@EditThisPost");

$router->post("SaveEditedPost","PostController@SaveChanges");
$router->post("PostCreate","PostController@PostBlog");
$router->post("users","UsersController@store");