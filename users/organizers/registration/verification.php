<?php
    include_once("bd.php");
	
	if (isset($_POST['submitorganizer'])){
		if($_POST['Password'] != $_POST['Password2']) {
			echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введенные пароли не совпадают!"> Введенные пароли не совпадают!</font>';
			} else{
			$OrganizerName = $_POST['OrganizerName'];
			$LastName = $_POST['LastName'];
			$FirstName = $_POST['FirstName'];
			$MiddleName = $_POST['MiddleName'];
			$DoB = $_POST['DoB'];
			$Gender = $_POST['Gender'];
			$Email = $_POST['Email'];
			$MobilePhone = $_POST['MobilePhone'];
			$Social = $_POST['Social'];
			$Password = $_POST['Password'];
			$mdPassword = md5($Password);
			$Password2 = $_POST['Password2'];
			$DateTimeReg = date("d-m-Y в H:i"); 
			  
			$query = ("SELECT OrganizerID FROM organizers WHERE Email='$Email'");
			$sql = mysql_query($query) or die(mysql_error());
			
			if (mysql_num_rows($sql) > 0) {
				echo '<font color="red"><img border="0" src="error.gif" align="middle" alt="Email уже зарегистрирован!"> Email уже зарегистрирован!</font>';
			}
			else {
				$query2 = ("SELECT OrganizerID FROM organizers WHERE MobilePhone='$MobilePhone'");
				$sql = mysql_query($query2) or die(mysql_error());
				if (mysql_num_rows($sql) > 0){
					echo '<font color="red"><img border="0" src="error.gif"  alt="Данный номер уже зарегистрирован!"> Данный номер уже зарегистрирован!</font>';
				}
				else{
					$query = "INSERT INTO organizers (OrganizerName, LastName, FirstName, MiddleName, DoB, Gender, Email, MobilePhone, Social, Password, DateTimeReg)
							  VALUES ('$OrganizerName', '$LastName', '$FirstName', '$MiddleName', '$DoB', '$Gender', '$Email', '$MobilePhone', '$Social', '$mdPassword', '$DateTimeReg')";
					$result = mysql_query($query) or die(mysql_error());
					echo '<font color="green"><img border="0" src="ok.gif" align="middle" alt="Вы успешно зарегистрировались!"> Вы успешно зарегистрировались!</font><br><a href="index.php">На главную</a>';
					
								
				}
			}
		}
    }
?>