<?php
$db = mysqli_connect ('localhost','root','','bdwatches');
session_start();
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
//удаляем лишние пробелы
$name = trim($name);
$password = trim($password);
// подключаемся к базе
include ("DB.php");

$result = mysqli_query($db,"SELECT password FROM user WHERE name='$name'");
$myrow = mysqli_fetch_array($result);

if (empty($myrow['password']))
  {
    exit ("Извините, введённый вами login или пароль неверный.");
  }

else
  {
    if ($myrow['password']==$password)
      {
        $result1 = mysqli_query($db,"SELECT id FROM user WHERE name='$name'");
        $myrow1 = mysqli_fetch_array($result1);

        $result2 = mysqli_query($db,"SELECT name FROM user WHERE name='$name'");
        $myrow2 = mysqli_fetch_array($result2);

        $_SESSION['name']=$myrow2['name'];
        $_SESSION['id']=$myrow1['id'];
        exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=http://localhost/views/site/index.php'></head></html>");
      }
    else
      {
        exit ("Извините, введённый вами name или пароль неверный.");
      }
  }

?>
