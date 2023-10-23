&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
	&lt;meta charset="UTF-8"&gt;
	&lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;?php
		$member = array();
        
        //member 배열에 0 인덱스를 생성하고 0 인덱스도 배열로 선언
		$member[0] = array();

		$member[0]['name'] = '박종성';
		$member[0]['useID'] = 'eedd';
		$member[0]['email'] = 'eedd@naver.com';

		$member[1] = array();

		$member[1]['name'] = '김지호';
		$member[1]['useID'] = 'aadd';
		$member[1]['email'] = 'aadd@naver.com';

		$member[2] = array();

		$member[2]['name'] = '김동현';
		$member[2]['useID'] = 'love';
		$member[2]['email'] = 'love@naver.com';

		// for($i=0; $i&lt;count($member); $i++){
		// 	echo $member[$i]['name']."&lt;br&gt;";
		// }

		foreach($member as $data) {
			echo $data['name']."&lt;br&gt;";
		}
	?&gt;
&lt;/body&gt;







&lt;/html&gt;