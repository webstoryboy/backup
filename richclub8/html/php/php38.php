<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$dir = "http://richclub8.dothome.co.kr/php/images/";

		//폴더가 있는지 확인 
		if(is_dir($dir)){
			$opendir = opendir($dir);

			if($opendir == true){
				while(($file == readdir($opendir)) != false){
					echo $file."<br>";
				}
			}
			//폴더를 열지 못했을 때
			else {
				echo "해당 폴더를 열지 못했습니다.";
				exit;
			}
		}
		//폴더가 없는 경우 
		else {
			echo "해당 폴더가 없습니다.";
			exit;
		}

	?>
</body>






</html>