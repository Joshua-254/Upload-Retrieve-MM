<?php include "script.php";

?>
<!DOCTYPE html>
 <html>
 <head>
 	<title>Upload</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="container">
 		<center>
 			<h1>Server Side</h1>
 			<p>This is a sample application where the admin is able to upload teh images and the comments to the clients to view</p>
 		</center>
 		<center>
			  <?php
			    while ($row = mysqli_fetch_array($result)) {
			      echo "<div id='img_div'>";
			      	echo "<img src='images/".$row['image']."' >";
			      	echo "<p>".$row['image_text']."</p>";
			      echo "</div>";
			      //delete button
			    }
			  ?>
			  <form method="POST" action="index.php" enctype="multipart/form-data">
			  	<input type="hidden" name="size" value="1000000">
			  	<div>
			  	  <input type="file" name="image">
			  	</div>
			  	<div>
			      <textarea 
			      	id="text" 
			      	cols="40" 
			      	rows="4" 
			      	name="image_text" 
			      	placeholder="Comment .. Optional..."></textarea>
			  	</div>
			  	<div>
			  		<button type="submit" name="upload">POST</button>
				</div>
			  </form>
			</div>
 			
 		</center>
 	</div>
 </body>
</html>
<?php 
// sample PHP code to delete data from database



 ?>