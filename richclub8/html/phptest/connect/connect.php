<?php
	$host = "localhost";
	$user = "richclub8";
	$pw = "forever0";
	$dbName = "richclub8";

	if($this->dbConnection == null){
		$this->dbConnection = new mysqli($host, $user, $pw, $dbName);
		$this->dbConnection->set_charset("utf8");
	}
?>	