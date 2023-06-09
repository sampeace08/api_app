<?php

	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: PUT');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-Width');

	include_once('../../config/Database.php');
	include_once('../../models/Post.php');

	//Instantiate and Connect to DB
	$database = new Database();
	$db_connect = $database->connect();

	//Instantiate post
	$post = new Post($db_connect);
	
	//Get raw data posted
	$data = json_decode(file_get_contents("php://input"));
	
	//Set ID to update
	$post->id = $data->id;
	
	//Assign Data
	$post->title = $data->title;
	$post->body = $data->body;
	$post->author = $data->author;
	$post->category_id = $data->category_id;
	
	// Update post
	if($post->update()){
		echo json_encode(
			array('message' => 'Post Updated')
		);		
	}else{
		echo json_encode(
			array('message' => 'Post Not Updated')
		);
	}
	
?>