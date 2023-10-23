<?php
	session_start();

	$_SESSION['mySession6'] = 'jiho';
	$_SESSION['mySession7'] = 'ddong';

	//세션 확인
	echo "<pre>";
	var_dump($_SESSION);

	//세션 파괴
	if(session_destroy()){
		echo "Section deleted successfully";
	}
?>