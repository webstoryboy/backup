<?php 
	session_start();

	//섹션을 배열형으로 선언
	$_SESSION['mySession10'] = array();
	//값을 대입하기 위해 2차원 배열 선언
	$_SESSION['mySession10']['value'] = 'webstoryboy';
	//섹션 생성 시간 대입
	$_SESSION['mySession10']['generation'] = time();
	//섹션 지속 시간 대입
	$_SESSION['mySession10']['duration'] = 10;

	echo "<pre>";
	var_dump($_SESSION['mySession10']);
?>