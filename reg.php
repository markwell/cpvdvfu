<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Выбор цвета</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>

<body>
    <form method="post">
        <input type="radio" name="color" value="red" />Красный<br />
        <input type="radio" name="color" value="green" />Зеленый<br />
        <input type="radio" name="color" value="blue" />Синий<br />
        <input type="submit" />
    </form>

<?php

if( isset( $_POST['color'] ) )
{
    echo "Цвет: ";
    switch( $_POST['color'] )
    {
        case 'red':
            echo 'Красный';
            break;
        case 'green':
            echo 'Зеленый';
            break;
        case 'blue':
            echo 'Синий';
            break;
    }
}
?>
</body>


Подтверждаю согласие на обработку своих персональных данных,
в том числе совершение следующих действий: обработка 
(включая сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), 
использование, обезличивание, блокирование, уничтожение персональных данных), 
в соответствии с Федеральным законом от 27.07.2006 № 152-ФЗ, 
а также на передачу такой информации третьим лицам, в случаях, 
установленных нормативными документами вышестоящих органов и законодательством.


<form action="checkbox-form.php" method="post">
Вам нужен доступ в интернет?
<input type="checkbox" name="formWheelchair" value="Yes" />
<input type="submit" name="formSubmit" value="Submit" />
</form> 

<?php
if(isset($_POST['formWheelchair']) &&
   $_POST['formWheelchair'] == 'Yes')
{
    echo "Требуется доступ.";
}
else
{
    echo "Доступ не нужен.";
}
?> 



function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
	
	
	if(IsChecked('formDoor','A'))
{
//do  ...
}