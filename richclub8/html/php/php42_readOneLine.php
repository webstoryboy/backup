<?php
	$filePathName = "./myFiles/largeRow.php";

	if(file_exists($filePathName)){
		$fp = fopen($filePathName, 'r');
		$readByte = 512;
		if($fp){
			while(($fr = fgets($fp, $readByte)) != false){
				echo $fr."<br>";
			}
		}
	}
?>