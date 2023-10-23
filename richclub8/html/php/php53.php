<?php
	class hello {
		protected function say($word){
			echo $word;
		}
	}

	class hello2 extends hello{
		public function say2($word){
			$this->say($word);
		}
	}

	$hello2 = new hello2;
	$hello2->say2("hello class");
?>