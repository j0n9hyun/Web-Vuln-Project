<?php
	// session_start();
	require_once("dbconfig.php");
	// if (!empty($_POST['token'])) {
	// 	if (hash_equals($_SESSION['token'], $_POST['token'])) {
	// 			 echo "<script>alert('adsasd')</script>";
	// 	} else {
	// 		echo "<script>alert('adsasd')</script>";
	// 			 // Log this as a warning and keep an eye on these attempts
	// 	}
	// }
			

			//$_POST['bno']이 있을 때만 $bno 선언
			if(isset($_POST['bno'])) {
				$bNo = $_POST['bno'];
			}
			
			//bno이 없다면(글 쓰기라면) 변수 선언
			if(empty($bNo)) {
				$bID = $_POST['bID'];
				$date = date('Y-m-d H:i:s');
			}
			
			//항상 변수 선언
			$bPassword = $_POST['bPassword'];
			// $bTitle = htmlspecialchars($_POST['bTitle']);
			$bTitle = $_POST['bTitle'];
			// $bContent = htmlspecialchars($_POST['bContent']);
			$bContent = $_POST['bContent'];
			//$filter = preg_match("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", $bContent);
			
			if(preg_match("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", $bContent)) {
				echo '<script>alert("글을 등록하지 못했습니다.")</script>';
				echo "<script>location.href='https://work.j0n9hyun.xyz:8443/csrf/board/write2.php'</script>";
				// $bContent = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $bContent);
			} else {
			}
			

			// if(isset($bContent)) {
			// 	// echo '<script>alert("테스트")</script>';
			// }
			
			
			//글 수정
			if(isset($bNo)) {
				//수정 할 글의 비밀번호가 입력된 비밀번호와 맞는지 체크
				$sql = 'select count(b_password) as cnt from board_free where b_password=password("' . $bPassword . '") and b_no = ' . $bNo;
				$result = $db->query($sql);
				$row = $result->fetch_assoc();
				
				//비밀번호가 맞다면 업데이트 쿼리 작성
				if($row['cnt']) {
					$sql = 'update board_free set b_title="' . $bTitle . '", b_content="' . $bContent . '" where b_no = ' . $bNo;
					$msgState = '수정';
					//틀리다면 메시지 출력 후 이전화면으로
				} else {
					$msg = '비밀번호가 맞지 않습니다.';
					?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
	<?php
		exit;
	}
	
	//글 등록
} else {
	$sql = 'insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id, b_password) values(null, "' . $bTitle . '", "' . $bContent . '", "' . $date . '", 0, "' . $bID . '", password("' . $bPassword . '"))';
	$msgState = '등록';
}


#$csrf = hash_hmac('sha256', 'rain cats and dogs', $_SESSION['key']);

// if (isset($_POST['submit'])) {
// 	if (hash_equals($csrf, $_POST['csrf'])) {
// 		$msg = '정상적으로 글이 ' . $msgState . '되었습니다.'; 
// 	} else {
// 		$msg = '글을 ' . $msgState . '하지 못했습니다.';
// 	}
// }



//메시지가 없다면 (오류가 없다면)
if(empty($msg)) {
	$result = $db->query($sql);

	// if ($result) {
	// 	if (hash_equals($token, $_POST['token'])) {
	// 		$msg = '정상적으로 글이 ' . $msgState . '되었습니다.'; 
	// 	} else {
	// 		$msg = '글을 ' . $msgState . '하지 못했습니다.';
	// 	}
	// }
	
	//쿼리가 정상 실행 됐다면,
	if($result) {
		$msg = '정상적으로 글이 ' . $msgState . '되었습니다.';
		if(empty($bNo)) {
			$bNo = $db->insert_id;
		}
		$replaceURL = './view2.php?bno=' . $bNo;
} else {
		$msg = '글을 ' . $msgState . '하지 못했습니다.';
		?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
<?php
		exit;
	}
}

?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>

<!-- <form method='POST' action='csrf_vuln'>
<input type='text' name='username'>
<input type='text' name='csrf' value='<?php echo $csrf ?>'>
<input type='submit' name='submit'>
</form> -->