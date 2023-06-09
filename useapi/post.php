<?php
if (isset($_POST['id']) && $_POST['id']!="") {
	$id = $_POST['id'];
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

	<h3><p>Search a Post</p></h3>
	<h4><a href="index.php"> All Posts</a><h4>
	
	<form action="" method="POST">
		<label>Enter Post ID:</label><br />
		<input type="text" name="id" placeholder="Enter Order ID" required/>
		<br /><br />
		<button type="submit" name="submit">Submit</button>
	</form>
		
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