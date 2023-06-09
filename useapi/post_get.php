<?php
if (isset($_GET['id']) && $_GET['id']!="") {
	$id = $_GET['id'];
	$url = "http://localhost:1234/apiapp/api/posts/read_single.php?id=".$id;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	
}
    ?>

<html>

	<head>
		<title>Post</title>
	</head>
	
	<body>

		<h3>Post</h3>
		<h4><a href="index.php"> All Posts</a></h4>
		
		<hr />
		<?php
		
			if(isset($id) && $id != ''){
				echo "<table>";
				echo "<tr><td>ID:</td><td>$result->id</td></tr>";
				echo "<tr><td>Title:</td><td>$result->title</td></tr>";
				echo "<tr><td>Author:</td><td>$result->author</td></tr>";
				echo "<tr><td>Body:</td><td>$result->body</td></tr>";
				echo "</table>";
			}
		
		?>
		
	</body>	
	
</html>