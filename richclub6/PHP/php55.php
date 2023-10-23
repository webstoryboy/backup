<?php

	class hello{
		//static를 사용해서 메소드를 생성
		static function output($word){
			echo "메세지를 출력하는 메소드<br>";
			echo $word;
		}
	}

	//인스턴스 생성하지 않고 클래스 hello의 메소드 oupput 호출
	hello::output("hello world");

?>