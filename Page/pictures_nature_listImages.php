<?php require("../header.php"); ?>

<?php

	$conn = mysql_connect("localhost", "if16", "ifikad16");
	mysql_select_db("if16_gerltoom");
	$sql = "SELECT imageId FROM pictures_nature_output_images ORDER BY imageId DESC"; 
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
		<br><img style="max-height:500px" src="pictures_nature_imageView.php?image_id=<?php echo $row["imageId"]; ?>" /><br>
		<?php		
		}
		mysql_close($conn);
		?>
	</div>
</div>
</body>
</html>
