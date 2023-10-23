<?php
	class hello{
		//static을 사용하여 메소드 생성
		static function output($word){
			echo "The method that prints the message<br>";
			echo $word;
		}
	}

	//인스턴스 생성하지 않고 클래스 메소드를 호출
	hello::output("hello world");
?>