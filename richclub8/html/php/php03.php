<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
		var korea = new Array();

		korea[0] = "seoul";
		korea[1] = "busan";

		document.write(korea[0]);
		document.write("<br>");
		document.write(korea[1]);
		document.write("<br><br>");
	</script>
</head>
<body>
	<?php
		$korea = array();

		$korea[0] = "seoul";
		$korea[1] = "busan";

		echo $korea[0];
		echo "<br>";
		echo $korea[1];
		echo "<br>";

		$korea['city'] = 'gangnam';
		echo $korea['city'];
	?>
</body>
</html>




