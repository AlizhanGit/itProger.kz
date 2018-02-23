<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Жарнамаға тапсырыс/itProger</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >
	<link rel="stylesheet" type="text/css" href="css/main_page.css">
	<link rel="stylesheet" type="text/css" href="css/aside.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<meta name="description" content="информационноөразвлекательный портал для программистов! обучающие курсы, новсти в сфера многое другое"/>
	<meta name="keywords" content="itproger, it, курсы, новсти, уроки"/>
	<meta name="viewport" content="width-device-width, initial-scale=1"> 
	<link href="img/favicon-icon" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
	<div id="wrapper">
		<div id="content">


			<?php
			require_once "blocks/header.php"
			?>

			<div id="main">
		<div id="news">
			<h2 class="heading">Бейне сабақтар</h2>
			<div style="clear: both"><br></div>

			<!--Мақала -->

			<?php 
			for($i=0; $i<6; $i++ )
			echo' <div class="article">
				<img src="https://udemy-images.udemy.com/course/750x422/1022582_7ae5_12.jpg">
				<span>Программалау тілдерінен сабақтар </span>
			</div>';

			 ?>
			

			<a href="" title="Көбірет қарау">
			<div id="btn" class="btn">
				Тағы қарау 
			</div>
		</a>

		</div>
	</div>
	<aside>
		<div id="courses">
			<h2 class="heading">Бейне сабақтар</h2>
			<div style="clear: both"><br></div>

			<!--курс -->

						<?php 
			for($i=0; $i<4; $i++ )
			echo' <div class="course">
				<img src="https://udemy-images.udemy.com/course/750x422/1022582_7ae5_12.jpg">
					 <em>PHP</em> арқылы сайт құру 
					<span>20 сабақ</span>
			</div>
			<div style="clear: both"><br></div>
			';

			 ?>
			 <a href="" title="Барлық бейнелерді қарау">
			<div id="btn" class="btn">
				барлық бейне сабақтар
			</div>
		</a>
		</div>
		<div id="courses">
			<h2 class="heading">Логикалық есептер</h2>
			<div style="clear: both"><br></div>
			<img src="http://appapk.ru/uploads/posts/2013-12/1385975869_swell-foop-1.jpg">
		</div>
		<div id="courses">
			<h2 class="heading">Логикалық ойындарды қалай жасайды?</h2>
			<div style="clear: both"><br></div>
			<img src="http://appapk.ru/uploads/posts/2013-12/1385975869_swell-foop-1.jpg">
		</div>

	</aside>
	<div style="clear: both"><br></div>

		</div>
	</div>

	        <?php
			require_once "blocks/footer.php"
			?>

			<?php
			require_once "blocks/JS_scripts.php"
			?>

	
</body>
</html>