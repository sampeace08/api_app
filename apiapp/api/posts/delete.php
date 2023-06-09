<?php

	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: DELETE');
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
	
	// Delete post
	if($post->update()){
		echo json_encode(
			array('message' => 'Post Deleted')
		);		
	}else{
		echo json_encode(
			array('message' => 'Post Not Deleted')
		);
	}
	
?>