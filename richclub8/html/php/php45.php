<?php
	setcookie('myCookie','itIsMyCookie',time()+10000,'/');

	if(isset($_COOKIE['myCookie'])){
		echo "Cooking creation completed";
	} else {
		echo "Cooking creation failed";
	}
?>

