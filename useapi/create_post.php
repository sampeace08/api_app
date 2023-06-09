<html>
	<head>
		<title>Create Post</title>
		<script src="js/jquery.min.js"></script>
		<link href="css/w3.css" rel="stylesheet">
	</head>
	<body>
		
		<form action="create_post.php" method="post" class="w3-container" role="form">
		
			<h3><p>Create a Post</p></h3>
			<h4><a href="index.php"> All Posts</a><h4>
				
			<div class="w3-row w3-padding-4">
				<label for="title" class="w3-label w3-text-teal">Title:</label>
				<input type="text" class="w3-input w3-border w3-light-grey" id="title" name="title" value="<?php //if(isset($opened)){echo $opened['quantity'];}else{echo 1;} ?>" placeholder="Title" required />
			</div>
			
			<div class="w3-row w3-padding-4">
				<label for="category_id" class="w3-label w3-text-teal">Category ID:</label>
				<input type="text" class="w3-input w3-border w3-light-grey" id="category_id" name="category_id" value="<?php //if(isset($opened)){echo $opened['quantity'];}else{echo 1;} ?>" placeholder="Category ID" required />
			</div>
			
			<div class="w3-row w3-padding-4">
				<label for="author" class="w3-label w3-text-teal">Author:</label>
				<input type="text" class="w3-input w3-border w3-light-grey" id="author" name="author" value="<?php //if(isset($item_price)){echo $item_price;}else{echo "0";} ?>" placeholder="Author" required />
			</div>
			
			<div class="w3-row w3-padding-4">
				<label for="body" class="w3-label w3-text-teal">Body:</label>
				<textarea class="w3-input w3-border w3-light-grey" id="body" rows="6" name="body" placeholder="Body"><?php //echo strip_tags($opened['description']); ?></textarea>
			</div>
			
			<div class="w3-row w3-padding-4">
				<input type="submit" class="w3-btn w3-blue-grey" value="Submit" id="submit" name="submit"/>
			</div>
			
		</form>
		
	</body>
<script>
	$(document).ready(function(){
		
		$("#submit").click(function(){
			var dtitle = $("#title").val();
			var dauthor = $("#author").val();
			var dcategory_id = $("#category_id").val();
			var dbody = $("#body").val();
			var data = JSON.stringify({'title' : dtitle, 'author' : dauthor, 'category_id' : dcategory_id, 'body' : dbody });
			$.post("http://localhost:1234/apiapp/api/posts/create.php", data, 
				function(data){
					$("#submit").json(data);
			});
		});
	});
	
	$("#test").click(function(){
		var dtitle = $("#title").val();
		var dauthor = $("#author").val();
		var dcategory_id = $("#category_id").val();
		var dbody = $("#body").val();
		
		var data = JSON.stringify({'title' : dtitle, 'author' : dauthor, 'category_id' : dcategory_id, 'body' : dbody });
		alert("The paragraph was clicked." + data);
	});
	
	$("p").click(function(){
		alert("Create a Post.");
	});
		
	

</script>

</html>