<?php

include "logic.php";

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-AU-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<title>Blog- Homepage</title>
	
	<link rel="stylesheet" href="main.css">
	<link rel="shortcut icon" href="img/logo.jpg"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
	rel="stylesheet">
	
</head>
<body>
<div id="sideNav">

		<nav>
		
		<ul>
		
        <!--<img src="img/logo.jpg" class="img-img" alt="">-->
			<li><a href="#">HOME</a></li>
			<li><a href="#">FEATURE</a></li>
			<li><a href="#">SERVICES</a></li>
			<li><a href="Create.php">+ Create post</a></li>
			<li><a href="edit.php">Edit Post</a></li>
		</ul>
		</nav>
	</div>
<div id="menuBtn">
	<img src="img/menu.png" alt="" id="menu">
</div>

<section id="blog">

	<div class="blog-heading">
		<span>My Recent Post</span>
		<h3>My Blog</h3>
	</div>
		<?php if(isset($_POST['info'])){?>
		<?php if($_POST['info'] == "added"){?>
			<div class="alert alert-success" role="alert">
				Post has been added successfully
			</div>
			<?php }else if($_POST['info'] == "updated"){?>
			<div class="alert alert-success" role="alert">
				post has been updated successfully
			</div>
			<?php }else if($_POST['info'] == "deleted"){?>
			<div class="alert alert-danger" role="alert">
				post has been deleted successfully
			</div>
	<?php }?>
	<?php } ?>
	<div class="blog-container">
	
		<?php foreach($query as $q){?>
		<div class="blog-box">
			<div class="blog-img">
				<img src="img/logo.jpg" alt="">
			</div>
			<div class="blog-text">
				<span>12 August 2022 / First blog web-page</span>
				<h4 class="blog-title"><?php echo $q['title'];?></h4>
				<p><?php echo $q['title'];?></p>
				<a  href="view.php?id=<?php echo $q['id'];?>">Read More<span> &rarr;</span></a>
			</div>
		</div>
		<?php }?>
	</div>
</section>
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