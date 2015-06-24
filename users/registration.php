<?php
	$volunteer ='<font face="Verdana" size="4">Анкета волонтёра</font>
	<table>
	<form action="verification.php" method="POST">
	<tr>
	<td>Фамилия<span style="color: red;">*</span>:</td>
	<td><input name="lastname" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Имя<span style="color: red;">*</span>:</td>
	<td><input name="firstname" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Отчество<span style="color: red;">*</span>:</td>
	<td><input name="middlename" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Дата рождения<span style="color: red;">*</span>:</td>
	<td><input name="dob" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Пол<span style="color: red;">*</span>:</td>
	<td><select name="gender" size="1" id="gender"><option value="Мужской">Мужской</option><option value="Женский">Женский</option></select></td>
	</tr>
	<tr>
	<td>E-mail<span style="color: red;">*</span>:</td>
	<td><input name="email" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Телефон<span style="color: red;">*</span>:</td>
	<td><input name="phone" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Адрес проживания<span style="color: red;">*</span>:</td>
	<td><input name="place" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Учебное заведение<span style="color: red;">*</span>:</td>
	<td><input name="study" size="20" type="text" /></td>
	</tr>
	<td>Соц. сети:</td>
	<td><input name="social" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Размер одежды<span style="color: red;">*</span>:</td>
	<td><input name="size" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Рост<span style="color: red;">*</span>:</td>
	<td><input name="growth" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Языки:</td>
	<td><input name="langs" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Пароль<span style="color: red;">*</span>:</td>
	<td><input maxlength="20" name="password" size="20" type="password" /></td>
	</tr>
	<tr>
	<td>Подтверждения пароля<span style="color: red;">*</span>:</td>
	<td><input maxlength="20" name="password2" size="20" type="password" /></td>
	</tr>
      <tr>
       <td></td>
      <td colspan="2"><input type="submit" value="Зарегистроваться" name="submitvolunteer" ></td>
      </tr>
     <br>
      </form>
      </table>
	<font face="Verdana" size="4">Поля со значком <font color="red">*</font> должны быть обязательно заполнены!</font>';
?>
	
<?php
	$organizer ='<font face="Verdana" size="4">Анкета организатора</font>
	<table>
	<form action="verification.php" method="POST">
	<tr>
	<td>Название компании:</td>
	<td><input name="companyname" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Фамилия<span style="color: red;">*</span>:</td>
	<td><input name="lastname" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Имя<span style="color: red;">*</span>:</td>
	<td><input name="firstname" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Отчество<span style="color: red;">*</span>:</td>
	<td><input name="middlename" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Дата рождения<span style="color: red;">*</span>:</td>
	<td><input name="dob" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Пол<span style="color: red;">*</span>:</td>
	<td><select name="gender" size="1" id="gender"><option value="Мужской">Мужской</option><option value="Женский">Женский</option></select></td>
	</tr>
	<tr>
	<td>E-mail<span style="color: red;">*</span>:</td>
	<td><input name="email" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Телефон<span style="color: red;">*</span>:</td>
	<td><input name="phone" size="20" type="text" /></td>
	</tr>
	<td>Соц. сети:</td>
	<td><input name="social" size="20" type="text" /></td>
	</tr>
	<tr>
	<td>Пароль<span style="color: red;">*</span>:</td>
	<td><input maxlength="20" name="password" size="20" type="password" /></td>
	</tr>
	<tr>
	<td>Подтверждения пароля<span style="color: red;">*</span>:</td>
	<td><input maxlength="20" name="password2" size="20" type="password" /></td>
	</tr>
      <tr>
       <td></td>
      <td colspan="2"><input type="submit" value="Зарегистроваться" name="submitorganizer" ></td>
      </tr>
     <br>
      </form>
      </table>
	<font face="Verdana" size="4">Поля со значком <font color="red">*</font> должны быть обязательно заполнены!</font>';
?>
	
<?php
if( isset( $_POST['group'] ) )
{
    echo "";
    switch( $_POST['group'] )
    {
        case 'volunteer':
		echo $volunteer;

            break;
        case 'organizer':
            echo $organizer;
            break;
    }
}
?>
	<br><a href='index.php'>На главную</a>
 </body>
 </html>