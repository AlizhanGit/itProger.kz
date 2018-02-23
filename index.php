<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>itProger - собщество разработчиков</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >
	<link rel="stylesheet" type="text/css" href="css/main_page.css" >
	<link rel="stylesheet" type="text/css" href="css/aside.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<meta name="description" content="информационноөразвлекательный портал для программистов! обучающие курсы, новсти в сфера многое другое"/>
	<meta name="keywords" content="itproger, it, курсы, новсти, уроки" />
	<meta name="viewport" content="width-device-width, initial-scale=1"> 
	<link href="img/favicon-ico" rel="shortcut icon" type="image/x-icon"/>
	
</head>
<body>
	<div id="wrapper">
		<div id="content">


			<?php
			require_once "blocks/header.php"
			?>

			<div id="main">
		<div id="news">
			<h2 class="heading">IT жаңалықтар</h2>
			<div style="clear: both"><br></div>

			<!--Мақала -->

			<?php 
			for($i=0; $i<6; $i++ )
			echo' <div class="article">
				<img src="https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2011/10/blue_binary-code.jpg">
				<span>Программалау тілдері- Алгоритмді компьютерге программалау тілдері түсінікті етіп көрсете алады. </span>
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
	<div id="subscribe">
		<span>Каналға жазылыңыз бейне сабақтармен жаңалықтарды өткізіп алмас үшін! </span>
		<div style="clear: both"><br></div>


        <!-- VK Widget -->
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?152"></script>
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 3}, 20003922);
</script>
     <!--Fezbook -->
     <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

     <!--Twitter -->
     <a class="twitter-timeline" data-width="300" data-height="400" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>

	<div id="sub_to_project">
		<span class="heading">Проектіге жазылыңыз</span>
		<div style="clear: both"><br></div>
		<p>Барлық ақпаратқа қол жеткізгіңіз келсе сайтқа жазылыңыз!</p>
		<a href="" title="Проектіге жазылуға керекті ақпарат">
			<div id="btn" class="btn">
				Жазылуға керекті мәлімет
			</div>
		</a>
			<div style="clear: both"><br></div>
			<h2 class="heading">Интернет дүкенін ашу</h2>
			<div style="clear: both"><br></div>
			<img src="https://webstudiobast.com/images/IM/ckolko-stoit-sozdat-internet-magazin-02.jpg"> 
	</div>
	<div style="clear: both"><br></div>
	<div id="web_sites">
	<span>Сайт керек па?</span>
	<a href="order.php" title="Сайтқа тапсырыс">
		<div id="btn" class="btn">
			Сайтқа тапсырыс
		</div>
	</a>
		
	</div>

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