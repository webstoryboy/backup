<?php
	session_start();

	//세션 생성
	$_SESSION['useId'] = 'webstoryboy';

	if(isset($_SESSION['useId'])){
		echo "Session Creation complete : {$_SESSION['useId']}";
	} else {
		echo "Session Creation false";
	}
?>