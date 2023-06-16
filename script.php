<?php
  // database initialization variables
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "image_upload";

// Creating teh database connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Checking the connection and redirect URL
if (!$conn) {
	echo "Unable to reach database server !, Please try again later";
	headers("location: http://joshua-hosana.epizy.com");

}

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($conn, "SELECT * FROM images");
?>