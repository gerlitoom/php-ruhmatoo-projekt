<?php 

	require("../functions.php");

	if(!isset ($_SESSION["userId"])) {
		require("../header.php");
		
	} else {
		require("../header1.php");
	}

?>

<?php

	$conn = mysql_connect("localhost", "if16", "ifikad16");
	mysql_select_db("if16_gerltoom");
	$sql = "SELECT imageId FROM gifs_animals_output_images ORDER BY imageId DESC"; 
	$result = mysql_query($sql);
	
?>

<!DOCTYPE html>
<html>
<body>
<div class="row">
	<div align="center">
		<?php
		while($row = mysql_fetch_array($result)) {
		?>
		<br><img style="max-height:500px" src="gifs_animals_imageView.php?image_id=<?php echo $row["imageId"]; ?>" /><br>
		<?php		
		}
		mysql_close($conn);
		?>
	</div>
</div>
</body>
</html>
