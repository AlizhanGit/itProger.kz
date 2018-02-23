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
			require_once "blocks/header.php"
			?>

	<div id="main">
		<div id="news">
			<h2 class="heading">Кері байланыс</h2>
			<div style="clear: both"><br></div>
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
			require_once "blocks/aside.php"
			?>

			<?php
			require_once "blocks/JS_scripts.php"
			?>

			<script>
$('#send').click (function () {
	var email = $('#email').val ();
	var name = $('#name').val ();
	var message = $('#message').val ();
	$.ajax({
		url:    	'ajax/kontakti.php',
		type:		'POST',
		cache: 		false,
		data:   	{'name':name, 'email':email, 'message':message},
		dataType:	'html',
		beforeSend: function () {
			$('#send').attr ("disabled", "disabled");
		},
		success: function(data) {
			if (data == true) {
				$('#name').val ("");
				$('#email').val ("");
				$('#message').val ("");
				$('#send').text ("Хатыңыз жіберілді");
				$('#email').css ("border-color", "#60fc8c");
				$('#name').css ("border-color", "#60fc8c");
				$('#message').css ("border-color", "#60fc8c");
			} else {
				if (data == false)				
					alert ("Хатыңыз жіберілмеді! қандайда қателіктерден");
				else {					
					switch (data) {
					case "Атыңызды жазбадыңыз":
					$('#name').css ("border-color", "#f7b4b4");
					break;
					case "Хатыңызды жазыңыз":
					$('#message').css ("border-color", "#f7b4b4");
					break;
					case "Қате e-mail":
					$('#email').css ("border-color", "#f7b4b4");
					break;
					default:
					$('#email').css ("border-color", "#f7b4b4");
					$('#message').css ("border-color", "#f7b4b4");
					$('#name').css ("border-color", "#f7b4b4");
					}
				}
			}
			$('#send').removeAttr ("disabled");				
		}
	});
});
</script>
			
	
</body>
</html>