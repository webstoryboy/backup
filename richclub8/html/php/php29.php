<?php
	include_once "../connectDB.php";

	$sql = "SELECT * FROM myMember";
	$res = $dbConnect->query($sql);

	$numView = 50;

	$toralRecord = $res->num_rows;
	
	$numPage = ceil($toralRecord / $numView);

	for($i=1; $i<$numPage; $i++){?>
		<a href="http://richclub8.dothome.co.kr/php/php28.php?page=<?=$i?>">
			<?=$i?>
		</a>

	<?php } ?>