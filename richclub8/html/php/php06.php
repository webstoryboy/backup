<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>데이터 형</title>
</head>
<body>
	<?php
		$num = 12;
		echo "변수 \$num 데이터형(값: {$num})은 " .gettype($num). "입니다.<br>";

		$greeting = "안녕";
		echo "변수 \$greeting 데이터형(값: {$greeting})은 " .gettype($greeting). "입니다.<br>";

		$numStr = "121212";
		echo "변수 \$numStr 데이터형(값: {$numStr})은 " .gettype($numStr). "입니다.<br>";

		$fruit = array();
		echo "변수 \$fruit 데이터형(값: {$fruit})은 " .gettype($fruit). "입니다.<br>";

		$nu = null;
		echo "변수 \$nu 데이터형(값: {$nu})은 " .gettype($nu). "입니다.<br>";

		$bloolean = true;
		echo "변수 \$bloolean 데이터형(값: {$bloolean})은 " .gettype($bloolean). "입니다.<br>";
	?>
</body>
</html>