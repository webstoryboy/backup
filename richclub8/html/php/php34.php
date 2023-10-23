<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$pattern = '/^[a-zA-Z0-9_]+$/';

		$myID = "richclub_9";

		if(preg_match($pattern, $myID, $matches)){
			echo "값 {$myID}은 정규식 표현에 적합한 값입니다.";
			echo "<pre>";
			var_dump($matches);
		} else {
			echo "사용할 수 없는 아이디입니다.";
		}
	?>
</body>
</html>