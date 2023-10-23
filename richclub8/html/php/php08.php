<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		//변수의 값이 짝수인지 홀수인지 판단하는 조건문을 완성하세요!
		$num = 100;
		if( $num % 2 == 0){
			echo "짝수입니다. <br><br>";
		} else {
			echo "홀수입니다.";
		}

		$data = "문자";
		if( gettype($data) == 'string'){
			echo "데이터형은 문자열입니다.";
		} else if ( gettype($data) == 'integer' ){
			echo "데이터형은 정수형입니다.";
		} else {
			echo "데이터형은 문자열도 정수형도 아닙니다.";
		}
	?>
</body>
</html>