<?php
include_once("bd.php");
	
	function checkAndAuthUser($login, $password)
	{

		function generateCode($length = 6)
		{
		    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIFJKLMNOPRQSTUVWXYZ0123456789";
		    $code  = "";
		    $clen  = strlen($chars) - 1;
		    while (strlen($code) < $length) {
		        $code .= $chars[mt_rand(0, $clen)];
		    }
		    return $code;
		}
	    $error = "";
	    # Вытаскиваем из БД запись, у которой логин равняеться введенному
	    $password = md5($password);//шифруем пароль

	    $volunteer = mysql_query("SELECT OrganizerID, Password FROM Organizers WHERE Email='$login'");
	    $data = mysql_fetch_array($volunteer);

	    $ID = $data['OrganizerID'];
	    
	    # Сравниваем пароли
	    if ($data['Password'] === $password) {

	        # Генерируем случайное число и шифруем его
	        $hash  = md5(generateCode(10));
	        # Записываем в БД новый хеш авторизации 
	        $query = "UPDATE Organizers SET Hash='$hash' WHERE OrganizerID='$ID'";
           	$result = mysql_query($query);

	        # Ставим куки
	        setcookie("id", $ID, time() + 60 * 60 * 24 * 30);
	        setcookie("hash", $hash, time() + 60 * 60 * 24 * 30);
	        setcookie("username", $login, time() + 60 * 60 * 24 * 30);
	        return null;
	    } else {
	        
	        $error = "Неправильные имя пользователя или пароль. Пожалуйста, попробуйте еще раз.";
	        return $error;
	    }
	}
	
	function authUser()
	{
	    if (isset($_POST['submitlogin'])) {
	    	
	        $error = checkAndAuthUser(mb_strtolower(trim($_POST['email'])), $_POST['password']);
	        if (is_null($error)) {
	            header('Location:/cpvdvfu/users/checkUser.php'); //ссылка на страницу проверки пользователя
	        } else {
				echo $error;
	        }
	    }
	}
	
    authUser();
/*
if (isset($_POST['email'])) {
	$email = $_POST['email']; 
	if ($email == '') {
		unset($email);
		exit ("Введите пожалуйста Email!");
	} 
}
if (isset($_POST['password'])) {
	$password=$_POST['password']; 
	if ($password =='') {
		unset($password);
		exit ("Введите пароль");
	}
}

$email = stripslashes($email);
$email = htmlspecialchars($email);

$password = stripslashes($password);
$password = htmlspecialchars($password);


$email = trim($email);
$password = trim($password);

$password = md5($password);//шифруем пароль

$volunteer = mysql_query("SELECT OrganizerID FROM Volunteers WHERE email='$email' AND password='$password'");
$id_volunteer = mysql_fetch_array($volunteer);
$organizer = mysql_query("SELECT OrganizerID FROM Organizers WHERE email='$email' AND password='$password'");
$id_organizer = mysql_fetch_array($organizer);
if (empty($id_volunteer['OrganizerID'])){
	if (empty($id_organizer['OrganizerID'])){
	exit ("Извините, введённый вами Email или пароль неверный.");
	}
}
else {

   
    $_SESSION['password']=$password; 
	$_SESSION['email']=$email; 
    $_SESSION['id']=$id_user['id'];
		  
}
echo "<meta http-equiv='Refresh' content='0; URL=index'>";
*/?>
