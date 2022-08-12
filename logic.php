<?php 

	$conn = mysqli_connect('localhost','root','','emiywebx');

	if(!$conn){
	echo "<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>
	Not able to connect!</h3>";
}

	$sql = "SELECT * FROM blog";
	$query = mysqli_query($conn, $sql);

	if(isset($_POST["submit"])){
		$title = $_POST["title"];
		$content = $_POST["content"];
	
	
	$sql = "INSERT INTO blog(title, content) VALUES('$title','$content')";
	mysqli_query($conn, $sql);
	
	
	
	header ("Location: index.php?info=added");
	exit();
}

if(isset($_POST['id'])){
	$id = $_POST['id'];
	
	$sql = "SELECT * FROM blog WHERE id = $id";
	$query = mysqli_query($conn, $sql);
}

if (isset($_POST['update'])){
		$id = $_POST['id'];
		$title = $_POST["title"];
		$content = $_POST["content"];
		
		$sql = "UPDATE blog SET title = '$title', content ='$content' WHERE id= $id";
		mysqli_query($conn, $sql);
		
	header ("Location: index.php?info=updated");
	exit();
}

if(isset($_POST['delete'])){
	$id = $_POST['id'];
	
	$sql = "DELETE FROM blog WHERE id = $id";
	$query = mysqli_query($conn, $sql);
	
	header ("Location: index.php?info=deleted");
	exit();
}



?>	