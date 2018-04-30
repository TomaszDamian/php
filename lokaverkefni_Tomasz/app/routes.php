<?php

$router->get("","PagesController@home");
$router->get("about","PagesController@about");
$router->get("Information","PagesController@Information");
$router->get("users","UsersController@index");
$router->get("Sources", "PagesController@Sources");
$router->get("MyBlogWall","PagesController@MyMainWall");
$router->post("users","UsersController@store");