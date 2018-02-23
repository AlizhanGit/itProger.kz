<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Жарнамаға тапсырыс/itProger</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >
	<link rel="stylesheet" type="text/css" href="css/main_page.css">
	<link rel="stylesheet" type="text/css" href="css/aside.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
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
			require_once "blocks/header.php" // baska stranisaga sylka jasau
			?>

	<div id="main">
		<div id="news">
			<h2 class="heading">Жарнама</h2>
			<div style="clear: both"><br></div>
		<div class="block2">
	<P>Реклама туралы сұрақтарыңыз болса Email арқылы хабарласыңыз ол үшін форманы 
	            толтырып хабарлама жібергеніңіз жеткілікті.<p><br><br>
	Сіздің тауарыңызды, проектіңізді компаня озі кезкелген бір ұяшыққа немесе екі, үш ұяшыққа орналастырады.<br><br>
				<strong>Реклама орны:</strong> 
				<ul>
					<li>Ақпараттық-ойын-сауық порталы - <a href="http://itproger.kz" target="_blank">itProger</a></li>
					<li><noindex><a href="http://itproger.kz" target="_blank" rel="nofollow">YouTube канал</a></noindex></li>
					<li><noindex><a href="http://itproger.kz" target="_blank" rel="nofollow">Группа Вконтакте</a></noindex></li>
				</ul><br>
				<strong>Реклама түрі:</strong><br>
				<a href="http://itproger.kz" target="_blank">itProger</a>

				<ul>
					<li>Рекламалық мақаланы жазу және сайтқа орналастыру</li>
					<li>Рекламалық банерді сайтқа дайындау және жарялау</li>
					<li>Өзіңіздің жобаңыздың жеке сілтемесін орналастыру</li>
				</ul><br>

				<noindex><a href="http://itproger.kz" rel="nofollow" target="_blank">Youtube каналы</a></noindex>
				<ul>
					<li>Кішкене жарнама бейне роликтің басы/ ортасы/ соңы.</li>
					<li>10 минуттық маңызды бейне жазба</li>
					<li>Сіздің жобаңыздың сілтемесі танымалы бейне жазбада жарнамаланады </li>
				</ul><br>
				<noindex><a href="https://vk.com/feed" rel="nofollow" target="_blank">Группа Вконтакте</a></noindex>: Жарнама тұратын орын<br><br>
				Сіз жаранамалар беру арқылы басқада жеңілдіктер аласыз! Егер жарнама туралы сұрақтарыңыз болса томендегі арқылы байланысыңыз:<br><br>

				<div class="block2">
	Бізге хабарлама жіберу үшін, форманы толтырып жіберіңіз!

	<form>
		<div>
			<input type="text" id="name" placeholder="Сіздің атыңыз" onclick="$(this).css ('border-color', '#ccc')">
			<input type="email" id="email" placeholder="email..." onclick="$(this).css ('border-color', '#ccc')">
			
		</div>

		<div>
			<textarea id="message" placeholder="хатыңызды жазыңыз" onclick="$(this).css ('border-color', '#ccc')"></textarea>
			
		</div>
		<input type="button" id="send" class="btn" value="Жіберу">

	</form>

		</div>

		</div>
		</div>

		
		<div style="clear: both"><br></div>
		<div style="clear: both"><br></div>
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
	</div>
            <?php
			require_once "blocks/footer.php"
			?>

			<?php
			require_once "blocks/JS_scripts.php"
			?>
			
	
</body>
</html>