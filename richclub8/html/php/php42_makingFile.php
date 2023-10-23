<?php
	$filePateName = "./myFiles/largeRow.php";
	
	$content = $_POST['myInputText'];

	$fp = fopen($filePateName, 'w');
	if($fp){
		$fw = fwrite($fp, $content);
		if($fw){
			echo "파일 쓰기 완료 yes";
		}
	}
?>