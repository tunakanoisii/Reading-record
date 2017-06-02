<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="css/index.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.akBooklog-master/jquery.akBooklog.js" ></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript">
	$(function(){
		$('#books').akBooklog({})
	})
</script>

<head>
	<meta charset="UTF-8">
	<title>ReadingRecord</title>
	
</head>
<body>
	<header>
		<div id="logo">
			└(^ω^)」三└(^ω^)」☆
		</div>
		<div class="menu">
			<div class="menu_element">Record</div>
			<a href="index.php"><div class="menu_element">Books</div></a>
		</div>
	</header>

	<div id="main">
		<div class="l-area">		
		<a id="modal_open" class="book_area button_link">
		<figcaption>
		<p>押してね</p>
			</figcaption>
		</a>
		

		<div id="modal_contents">
			<p>例だよ</p>
			<p><a id="modal_close" class="button_link">閉じる</a></p>
		</div>

			<?php
			$mordal_count = 1;
	$json = file_get_contents("https://api.booklog.jp/json/sinasi?count=30&status=0");//jsonを取ってくる
	$arr = json_decode($json, true)["books"];//連想配列変換(デコード)する

	foreach($arr as $data){//EOFで改行でかける
		$src =  $data['image'];
		$src = preg_replace("/\..{6}\.jpg$/", ".jpg", $src);
		echo <<<EOF
		<a id="modal_open" class="book_area button_link"><img src="{$src}"/>
			<figcaption></figcaption>
		</a>

		<div id="modal_contents_">
			<p>例だよ</p>
			<p><a id="modal_close" class="button_link">閉じる</a></p>
		</div>
EOF;
$modal_count = $modal_count + 1;
	}//EOSは必ず文頭
	//var_dump($arr);
	?>
		</div>
	</div>
</div>



<footer></footer>

</body>
</html>