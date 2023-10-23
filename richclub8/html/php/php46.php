<?php
	setcookie('myCookie',null,time()-10000,'/');

	if(isset($_COOKIE['myCookie'])){
		echo "Cooking Presence";
	} else {
		echo "Cooking Delect";
	}
?>