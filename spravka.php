<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Справка</title>
 </head>
 <body>
  <form action="" method="post">

	<input type="hidden" name="inquiry">
	<table border="0" align="center">

		<tr><td width="400">Фамилия<span style="color: red">*</span>:</td><td><input type="text" id="field_fam" style="width: 400px;" required></input></td></tr>

		<tr><td>Имя<span style="color: red">*</span>:</td><td><input type="text" id="field_im" style="width: 400px;" required></input></td></tr>

		<tr><td>Отчество<span style="color: red">*</span>:</td><td><input type="text" id="field_otch" style="width: 400px;" required></input></td></tr>

		<tr><td>Дата рождения<span style="color: red">*</span>:</td><td><input type="text" id="field_date" style="width: 400px;" required></input></td></tr>

		<tr><td>Адрес регистрации<span style="color: red">*</span>:</td><td><textarea id="field_adres" rows="2" style="width: 400px;" required></textarea></td></tr>

		<tr><td>ФИО ребенка (для процедур 2.18 и 2.24)</td><td><input type="text" id="field_fio" style="width: 400px;"></input></td></tr>

		<tr><td>Дата рождения ребенка (для процедур 2.18 и 2.24)</td><td><input type="text" id="field_date2" style="width: 400px;"></input></td></tr>

		<tr><td>Место обучения ребенка (для процедуры 2.24)</td><td><textarea id="field_mesto" rows="2" style="width: 400px;"></textarea></td></tr>

		<tr><td>Вид справки<span style="color: red">*</span>:</td><td><textarea id="field_vid" rows="2" style="width: 400px;" required></textarea></td></tr>

		<tr><td>Адрес электронной почты<span style="color: red">*</span>:</td><td><input type="text" id="field_email" style="width: 400px;" required></input></td></tr>

		<tr><td></td><td><input type="submit" value="Отправить" /></td></tr>
	
<?php 
if(isset($_POST["inquiry"])){echo'<tr><td></td><td><font color="red">Запрос получен</font></td></tr>';}
?>
	
	</table>

  

  </form>
 </body>
</html>