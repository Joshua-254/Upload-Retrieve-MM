<?php 
include "script.php";

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>CLient</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="container">
 		<center>
 			<h1>Client side</h1>
 			<p><i>This is teh client side <br>
 			 they are only able to see the content</i></p>
 		</center>
 		<div class="the_content">
 			<?php
			    while ($row = mysqli_fetch_array($result)) {
			      echo "<div id='img_div'>";
			      	echo "<img src='images/".$row['image']."' >";
			      	echo "<p>".$row['image_text']."</p>";
			      echo "</div>";
			    }
			  ?>
 		</div>
 	</div>
 </body>
 </html>