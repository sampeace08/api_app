<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../config/Database.php');
include_once('../../models/Post.php');

//Instantiate and Connect to DB
$database = new Database();
$db_connect = $database->connect();

//Instantiate post
$post = new Post($db_connect);

//Get id
$post->id = isset($_GET['id']) ? $_GET['id'] : die();

//Get post
$post->read_single();

//Create array
$post_arr = array(
	'id' => $post->id,
	'title' => $post->title,
	'body' => $post->body,
	'author' => $post->author,
	'category_id' => $post->category_id,
	'category_name' => $post->category_name
);

//Make json
print_r(json_encode($post_arr));

?>