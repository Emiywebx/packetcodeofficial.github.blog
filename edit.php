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
<div class="container mt-5">	
		<h1 class="text-center my-3">Edit Your Blogs</h1>
	<div class="container d-flex justify-content-center" >
	
		<?php foreach($query as $q){?>  
			<form action="" method="POST" class="w-50">
				<div class="form-group my-4">
					<input type="text" hidden name="id" value="<?php echo $q["id"];?>">
					<input type="text" name="title" placeholder="Blog Tilte" 
						class="form-control bg-light text-dark my-3 text-center" value="<?php echo $q["title"];?>">
					<textarea name="content" class="form-control bg-light text-dark my-3 " 
								rows="10"><?php echo $q["content"];?></textarea>
					<input type="file" name="file" class="form-control bg-light text-dark my-3 text-center">
					<button name="update" class="btn btn-dark">Update</button>
					<form method="POST">
						<input type="text" hidden name="id" value="<?php echo $q['id'];?>">
						<button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
					</form>
					<button class="btn btn-dark"><a href="index.php">index page</a></button>
				</div>
			</form>
		<?php }?>
	
	</div>
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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




</body>
</html>