<?php
if(isset($_POST['surname']) && isset($_POST['name']) && isset($_POST['secondname']) && isset($_POST['birthday']) && isset($_POST['phonenumber']) && isset($_POST['birthday'])){
    $surname = htmlentities($_POST['surname']);
	$name = htmlentities($_POST['name']);
    $secondname = htmlentities($_POST['secondname']);
	$birthday = htmlentities($_POST['birthday']);
	$phonenumber = htmlentities($_POST['phonenumber']);
	if(isset($_POST['optionsRadios1'])){
	$optionsRadios = "Не замужем\не женат";
	}elseif(isset($_POST['optionsRadios2'])){
	$optionsRadios = "Замужем\женат";
	}elseif(isset($_POST['optionsRadios3'])){
	$optionsRadios = "Гражданский брак";
	}else{
		echo "Данные не получены";
	}
	$skill = $_POST['skill'];
    $hobby = $_POST['hobby'];
	$comment = htmlentities($_POST['comment']);
    $output ='
    <html>
    <head>
    <title>Анкетные данные</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="fav.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		</head>
    <body>
	<div class="container">
	<div class="col-sm-5">
	<h3>Заполненная анкета</h3></br>
	<table class="table">
   <tbody>
    <tr>
		<th scope="row">Фамилия:</th>
		<td colspan="5">'.$surname.'</td>
    </tr>
    <tr>
      <th scope="row">Имя:</th>
      <td colspan="5">'.$name.'</td>
    </tr>
    <tr>
      <th scope="row">Отчество:</th>
      <td colspan="5">'.$secondname.'</td>
	</tr>
	<tr>
      <th scope="row">Дата рождения:</th>
      <td colspan="5">'.$birthday.'</td>
    </tr>
		<tr>
      <th scope="row">Контактные данные:</th>
      <td colspan="5">'.$phonenumber.'</td>
    </tr>
	<tr>
      <th scope="row">Cемейное положение:</th>
      <td colspan="5">'.$optionsRadios.'</td>
	</tr>
	<tr>
      <th scope="row">Навыки:</th>';
	foreach($skill as $nameskill)
        $output.='<td>'.htmlentities($nameskill).'</td>';
    $output.='<tr>
	<th scope="row">Интересы(Хобби):</th>';
	foreach($hobby as $namehobby)
        $output.='<td>'.htmlentities($namehobby).'</td>';
    $output.='
	<tr>
      <th scope="row">Комментарий:</th>
      <td colspan="5">'.$comment.'</td>
    </tr>
	</tr></tbody></thead></div></div></div></body></html>';
    echo $output;
}
else
{   
    echo "Введенные данные некорректны";
}
?>