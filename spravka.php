<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Справка</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<form action="" method="post">

	<input type="hidden" name="inquiry">
	<table border="0" align="center">

		<tr><td width="400">Фамилия<span style="color: red">*</span>:</td><td><input type="text" id="field_fam" name="field_fam" style="width: 400px;" required></input></td></tr>

		<tr><td>Имя<span style="color: red">*</span>:</td><td><input type="text" id="field_im" name="field_im" style="width: 400px;" required></input></td></tr>

		<tr><td>Отчество<span style="color: red">*</span>:</td><td><input type="text" id="field_otch" name="field_otch" style="width: 400px;" required></input></td></tr>

		<tr><td>Дата рождения<span style="color: red">*</span>:</td><td><input type="text" id="field_date" name="field_date" style="width: 400px;" required></input></td></tr>

		<tr><td>Адрес регистрации<span style="color: red">*</span>:</td><td><textarea id="field_address" name="field_address" rows="2" style="width: 400px;" required></textarea></td></tr>

		<tr><td>ФИО ребенка (для процедур 2.18 и 2.24)</td><td><input type="text" id="field_fio" name="field_fio" style="width: 400px;"></input></td></tr>

		<tr><td>Дата рождения ребенка (для процедур 2.18 и 2.24)</td><td><input type="text" id="field_date2" name="field_date2" style="width: 400px;"></input></td></tr>

		<tr><td>Место обучения ребенка (для процедуры 2.24)</td><td><textarea id="field_mesto" name="field_mesto" rows="2" style="width: 400px;"></textarea></td></tr>

		<tr><td>Вид справки<span style="color: red">*</span>:</td><td><textarea id="field_vid" name="field_vid" rows="2" style="width: 400px;" required></textarea></td></tr>

		<tr><td>Адрес электронной почты<span style="color: red">*</span>:</td><td><input type="text" id="field_email" name="field_email" style="width: 400px;" required></input></td></tr>
		
		<tr><td></td><td><div class="g-recaptcha" data-sitekey="6LfgYwoUAAAAAPl7kEvP9Ts2BVO2d-UFIqWk7wMD"></div></td></tr>
		

		<tr><td></td><td><input type="submit" value="Отправить" /></td></tr>
	
<?php 
if(isset($_POST["inquiry"])){
	// send email
	$email1='halva202@gmail.com';
	// $email2='halva202@gmail.com';
	
	require 'libraries/PHPMailerNew/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host='smtp.yandex.ru';
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='ssl';
						
	$mail->Username='viktarian1@yandex.ru';
	$mail->Password='vitik145145145';
	$mail->setFrom('viktarian1@yandex.ru', 'письмо с сайта');
	$mail->Port='465';
						
	if(isset($email1)){$mail->addAddress($email1, 'mailer');}
	if(isset($email2)){$mail->addAddress($email2, 'mailer');}
						
	$mail->isHTML(true);
	$mail->CharSet = "utf-8";

	$mail->Subject = 'Запрос на получение справки';

	// $field_famTemplate = "<b>Фамилия:</b> &nbsp; $field_fam <br/><br/>";
	// $body =  $field_famTemplate;

	$field_fam = trim($_POST['field_fam']);
	$field_im = trim($_POST['field_im']);
	$field_otch = trim($_POST['field_otch']);
	$field_date = trim($_POST['field_date']);
	$field_address = trim($_POST['field_address']);
	$field_fio = trim($_POST['field_fio']);
	$field_date2 = trim($_POST['field_date2']);
	$field_mesto = trim($_POST['field_mesto']);
	$field_vid = trim($_POST['field_vid']);
	$field_email = trim($_POST['field_email']);

	$field_famTemplate = "<b>Фамилия:</b> &nbsp; $field_fam <br/><br/>";
	$field_imTemplate = "<b>Имя:</b> &nbsp; $field_im <br/><br/>";
	$field_otchTemplate = "<b>Отчество:</b> &nbsp; $field_otch <br/><br/>";
	$field_dateTemplate = "<b>Дата рождения:</b> &nbsp; $field_date <br/><br/>";
	$field_addressTemplate = "<b>Адрес регистрации:</b> &nbsp; $field_address <br/><br/>";
	$field_fioTemplate = "<b>ФИО ребенка:</b> &nbsp; $field_fio <br/><br/>";
	$field_date2Template = "<b>Дата рождения ребенка:</b> &nbsp; $field_date2 <br/><br/>";
	$field_mestoTemplate = "<b>Место обучения ребенка:</b> &nbsp; $field_mesto <br/><br/>";
	$field_vidTemplate = "<b>Вид справки:</b> &nbsp; $field_vid <br/><br/>";
	$field_emailTemplate = "<b>Адрес электронной почты:</b> &nbsp; $field_email <br/><br/>";

	$body =  $field_famTemplate . $field_imTemplate . $field_otchTemplate . $field_dateTemplate . $field_addressTemplate .  $field_fioTemplate .  $field_date2Template .  $field_mestoTemplate .  $field_vidTemplate .  $field_emailTemplate;

	$mail->Body = $body;
	$mail->AltBody = 'This is a plain-text message body';
						
	/* if(isset($_FILES["mail_file"])){
		$i=0;
		foreach($_FILES["mail_file"]["tmp_name"] as $item){
			$mail->AddAttachment($item, $_FILES["mail_file"]["name"][$i]);
			$i=$i+1;
		}
	} */
						
	//send the message, check for errors
	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} 
	else {
		echo'<tr><td></td><td>';
		echo '<font color="red">Запрос получен</font>';
		echo'</td></tr>';
	}	
	// /send email
	
	/* // congratulations
	echo'<tr><td></td><td>';
		echo'<font color="red">Запрос получен</font><br>';
		echo'Фамилия:<br>
		'.$_POST["field_fam"].'<br>
		Имя:<br>
		'.$_POST["field_im"].'<br>
		Отчество:<br>
		'.$_POST["field_otch"].'<br>
		Дата рождения:<br>
		'.$_POST["field_date"].'<br>
		Адрес регистрации:<br>
		'.$_POST["field_address"].'<br>
		ФИО ребенка:<br>
		'.$_POST["field_fio"].'<br>
		Дата рождения ребенка:<br>
		'.$_POST["field_date2"].'<br>
		Место обучения ребенка:<br>
		'.$_POST["field_mesto"].'<br>
		Вид справки:<br>
		'.$_POST["field_vid"].'<br>
		Адрес электронной почты:<br>
		'.$_POST["field_email"].'<br>';
	echo'</td></tr>';
	// /congratulations */
}
?>
	
	</table>

  

	</form>
</body>
</html>