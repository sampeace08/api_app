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

//Post query
$results = $post->read();
//Get row count
$num = $results->rowCount();

//Check if there are posts
if($num > 0){
	//Posts array
	$posts_arr = array();
	$posts_arr['data'] = array();
	
	while($row = $results->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		
		$post_item = array(
			'id' => $id,
			'title' => $title,
			'body' => html_entity_decode($body),
			'author' => $author,
			'category_id' => $category_id,
			'category_name' => $category_name
		);
		
		//Push to 'data'
		array_push($posts_arr['data'], $post_item);
	}
	
	//Turn to JSON and output
	echo json_encode($posts_arr);
}else{
	//No posts
	echo json_encode(array('message' => 'No Posts Found'));
}


?>