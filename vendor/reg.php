<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); 
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
	echo "Недопустимая длина логина";
	exit();
}
else if(mb_strlen($login) < 5){
	echo "Недопустимая длина имени.";
	exit();
}
//hash $pass = md5($pass."forhktkntuhpi"); не стал использовать
$mysql = new mysqli('localhost', 'root', '', 'registration');
$result1 = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user1 = $result1->fetch_assoc();
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}
$mysql->query("INSERT INTO `users` (`login`, `pass`, `email`)
	VALUES('$login', '$pass', '$email')");
$mysql->close();
header('Location: ../registration/authorisation.php');
?>