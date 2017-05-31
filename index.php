<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="css/index.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.akBooklog-master/jquery.akBooklog.js" ></script>
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
			<div class="menu-element">Record</div>
			<div class="menu-element">Books</div>
		</div>
	</header>

	<div id="main">
<div class="l-area">
<!--
	<div class="book-area">
		<img src="img/陽だまりの彼女.jpg" alt="">
		<figcaption></figcaption>
	</div>

	<div class="book-area">
		<img src="img/告白.jpg" alt="">
		<figcaption></figcaption>
	</div>

	<div class="book-area">
		<img src="img/高校入試.jpg" alt="">
		<figcaption></figcaption>
	</div>

	<div class="book-area">
		<img src="img/隣の家の少女.jpg" alt="">
		<figcaption></figcaption>
	</div>
	-->

	<?php
	$json = file_get_contents("https://api.booklog.jp/json/sinasi?count=350&status=0");//jsonを取ってくる
	$arr = json_decode($json, true)["books"];//連想配列変換(デコード)する

	foreach($arr as $data){//EOFで改行でかける
		$src =  $data['image'];
	$src = preg_replace("/\..{6}\.jpg$/", ".jpg", $src);
	echo <<<EOF
	<div class="book-area"><img src="{$src}"/>
	<figcaption></figcaption>
	</div>
EOF;
	}//EOSは必ず文頭
	//var_dump($arr);
	?>
	</div>
</div>


</div>



<footer></footer>

</body>
</html>