<?php

	$url = "http://localhost:1234/apiapp/api/posts/read.php";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);

	$result = json_decode($response);

?>

<html>
	<head>
		<title>Posts</title>
	</head>
	<body>
		
		<h3>Blog Posts</h3>
		<h4><a href="create_post.php">Create a Post</a> / <a href="post.php">Search a Post</a></h4>
		<table>
			<tr><th>ID</th>
			<th>Title</th>
			<th>Author</th>
			<th>Body</th></tr>
			
			<?php
				$data = $result->data;
				foreach($data as $posts){

					echo '<tr>';
						//echo '<td>' . $id . '</td>';
						echo '<td>' . $posts->id . '</td>';
						echo '<td><a href="post_get.php?id=' . $posts->id . '">' . $posts->title . '</a></td>';
						echo '<td>' . $posts->author . '</td>';
						echo '<td>' . $posts->body . '</td>';
					echo '</tr>';
				}
			?>
		</table>
	</body>
</html>