<?php

if (isset($_POST['name']))
  {
    $name = $_POST['name'];
     if ($name == '')
      {
        unset($name);
      }
  }

if (isset($_POST['password']))
  {
    $password=$_POST['password'];
    if ($password =='')
      {
        unset($password);
      }
  }

if (empty($name) or empty($password))
{
  exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$name = stripslashes($name);
$name = htmlspecialchars($name);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$name = trim($name);
$password = trim($password);

include ("DB.php");

$result = mysqli_query($db,"SELECT id FROM user WHERE name='$name'");

$myrow = mysqli_fetch_array($result);

if (!empty($myrow['id'])) {
  exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}

$result2 = mysqli_query($db,"INSERT INTO user (name,password) VALUES('$name','$password')");

if ($result2=='TRUE')
{
  echo "Вы успешно зарегистрированы! Войдите, используя свои логин и пароль <a href='user/register.php'>";
}

else
{
  echo "Ошибка! Вы не зарегистрированы.";
}

?>
