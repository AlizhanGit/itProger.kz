<?php 
$to= "kerek07@bk.ru";
$email = $_POST['email'];

$err="";
if(trim ($_POST['name']) =="" && trim ($_POST['email']) =="" && trim ($_POST['message']) ==""  ) 
$err ="Бәрін толтырыңыз!"

else if (trim ($_POST['name']) =="")
$err = "Атыңызды енгізбедіңіз";

else if (!((strpos($email, "." ) > 0 ) && (strpos($email, "@") > 0)))
$err = "Қате email";

else if (trim($_POST['message']) =="")
$err = "Хатыңызды енгізбедіңіз";

if($err !="") { // bir katelikter bar
	echo $err;
	exit;
}
$msg = "Хат жіберілді <br>".$_POST['name']."</br>.<br><br>Тест хат:</br><br>" .$_POST['message']."<br><br> Сайт туралы сұрақтар: itproger.com";

$subject = "=?utf-8?B?".base64_encode($_POST["хат itproger сайтынан"])."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/ html; charset=utf-8\r\n";
	$success = mail ($to, $subject, $msg, $headers);
	echo $success;

 ?>