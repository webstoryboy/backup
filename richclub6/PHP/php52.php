<?php

	class hello{

		protected function say($word){
			echo "$word";
		}
	}

	//인스턴스 생성
	$hello = new hello;
	$hello->say("Hello World");

?>