<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="css/index.css">

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
		<ul id="output">
		<?php
		$url = "http://api.booklog.jp/json/sinasi";
		?>
		
			<script type ="text/javascript">


				var test = {
					"name" : "島脇", 
					"age" : "22"
				}

				document.write('name:' + test.name + 'age:' + test.age);
			</script>
			
		</ul>

		<div class="test">
			<script type="text/javascript" src="http://widget.booklog.jp/blogparts/js/booklog_minishelf.js?default" id="booklog_minishelf"></script>
			<script type="text/javascript" src="http://api.booklog.jp/json/sinasi?category=0&count=15&callback=booklog_minishelf"></script>
		</div>
		<div class="l-area">
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

			<div class="book-area">
				<img src="img/花の鎖.jpg" alt="">
				<figcaption></figcaption>
			</div>

			<div class="book-area">
				<img src="img/イニシエーション・ラブ.jpg" alt="">
				<figcaption></figcaption>
			</div>

			<div class="book-area">
				<img src="img/レインツリーの国.jpg" alt="">	
				<figcaption></figcaption>	
			</div>

			<div class="book-area">
				<img src="img/ぼくは明日、昨日のきみとデートする.jpg" alt="">
				<figcaption></figcaption>
			</div>

			<div class="book-area">
			</div>
			<div class="book-area">
			</div>
			<div class="book-area">
			</div>
			<div class="book-area">
			</div>
		</div>


	</div>
	<footer></footer>
	
</body>
</html>