<?php

include "logic.php";

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-AU-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width",initial-scale="1.0">
	<title>Blog-editor page</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="sideNav">

		<nav>
		
		<ul>
		
        <!--<img src="img/logo.jpg" class="img-img" alt="">-->
			<li><a href="#">HOME</a></li>
			<li><a href="#">FEATURE</a></li>
			<li><a href="#">SERVICES</a></li>
			<li><a href="edit.php">Edit Post</a></li>
			<li><a href="Create.php">+ Create post</a></li>
		</ul>
		</nav>
	</div>
<div id="menuBtn">
	<img src="img/menu.png" alt="" id="menu">
</div>
<h1 class="text-center my-3">create blog page</h1>
	<div class="container d-flex justify-content-center" >
				<form action="" method="POST" class="w-50">
				<div class="form-group my-4">
					<input type="text" name="title" placeholder="Blog Tilte" 
						class="form-control bg-light text-dark my-3 text-center">
					<textarea name="content" class="form-control bg-light text-dark my-3" rows="10"></textarea>
					<input type="file" name="image" class="form-control bg-light text-dark my-3 text-center" >
					<button name="submit" class="btn btn-dark">Add Post</button>
				</div>
			</form>
	
</div>

<script>
var menuBtn = document.getElementById("menuBtn");
var sideNav = document.getElementById("sideNav");
var menu = document.getElementById("menu");

sideNav.style.right = "-250px";

menuBtn.onclick = function(){
	if(sideNav.style.right =="-250px"){
		sideNav.style.right ="0";
		menu.src = "img/close.png";
	}
	else{
		sideNav.style.right = "-250px";
		menu.src = "img/menu.png";
	}
}

</script>

<script src="js/script.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>






</body>
</html>