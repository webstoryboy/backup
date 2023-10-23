<?php
	include_once "../connectDB.php";

	//페이지값을 구함
	if(isset($_GET['page'])){
		$page = (int) $_GET['page'];
	} else {
		$page = 1;
	}

	//페이지에 출력할 레코드 수
	$numView = 50;

	//변수 page값에 따른 LIMIT의 첫 번째 값 계산
	$firstLimitValue = ($numView * $page) - $numView;

	$sql = "SELECT * FROM myMember LIMIT {$firstLimitValue}, {$numView}";
	$result = $dbConnect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table {width: 100%; border-spacing: 0; border-collapse: collapse;}
		table th {border: 1px solid #999; background: #f1f1f1; padding: 10px;}
		table td {border: 1px solid #999; padding: 5px;}
	</style>
</head>
<body>
	<h1>고객리스트</h1>
	<table>
		<tr>
			<th>번호</th>
			<th>ID</th>
			<th>이름</th>
			<th>이메일</th>
			<th>성별</th>
			<th>가입일</th>
		</tr>
		

<?php
	for($i=0; $i < $result->num_rows; $i++){
		$member = $result->fetch_array(MYSQLI_ASSOC);
?>		
		<tr>
			<td><?=$member['myMemberID']?></td>
			<td><?=$member['useID']?></td>
			<td><?=$member['uname']?></td>
			<td><?=$member['email']?></td>
			<td><?=(($member['gender'] == 'w') ? '여성': '남성')?></td>
			<td><?=$member['regTime']?></td>
		</tr>
<?php } ?>

	</table>
</body>
</html>





