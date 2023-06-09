<?php

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../../config/Database.php');
include_once('../../models/Category.php');

//Instantiate and Connect to DB
$database = new Database();
$db_connect = $database->connect();

//Instantiate category
$category = new Category($db_connect);

//Category query
$results = $category->read();
//Get row count
$num = $results->rowCount();

//Check if there are categories
if($num > 0){
	//Categories array
	$categories_arr = array();
	$categories_arr['data'] = array();
	
	while($row = $results->fetch(PDO::FETCH_ASSOC)){
		extract($row);
		
		$category_item = array(
			'id' => $id,
			'name' => $name
		);
		
		//Push to 'data'
		array_push($categories_arr['data'], $category_item);
	}
	
	//Turn to JSON and output
	echo json_encode($categories_arr);
}else{
	//No categories
	echo json_encode(array('message' => 'No Categories Found'));
}


?>