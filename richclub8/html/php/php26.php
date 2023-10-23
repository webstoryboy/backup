<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include_once "../connectDB.php";
		//SELECT uname, useID FROM myMember ORDER BY uname ASC;

		$sql = "SELECT uname, useID FROM myMember ORDER BY uname ASC";
		$result = $dbConnect->query($sql);

		$numResult = $result->num_rows;

		if($numResult != 0){

			for($i=0; $i<$numResult; $i++){
				$memberInfo = $result->fetch_array(MYSQLI_ASSOC);
				echo "회원이름 : ".$memberInfo['uname']." 회원 ID: ".$memberInfo['useID']."<br>";
			}
		} else {
			echo "회원이 없습니다.";
		}
	?>
</body>
</html>