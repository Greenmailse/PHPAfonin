<?php

$ErrorDescription = '';
function get_image($num){
  global $ErrorDescription;
  static $image_size=0;
  // Проверяем не пустали глобальная переменная $_FILES
  if(!empty($_FILES)){
  $image_size=$_FILES['userfile']['size'][$num];

  if($image_size>1024*1024||$image_size==0)
  {
    $ErrorDescription="Каждое изображение не должно привышать 1Мб!
      Изображение в базу не может быть добавлено.";
      return '';
  }
  // Если файл пришел, то проверяем графический
  // ли он (из соображений безопасности)
  if(substr($_FILES['userfile']['type'][$num], 0, 5)=='image')
  {
    //Читаем содержимое файла
    $image=file_get_contents($_FILES['userfile']['tmp_name'][$num]);
    //Экранируем специальные символы в содержимом файла
    $image=mysql_escape_string($image);
    return $image;
  }else{
    $SErrorDescription="Вы загрузили не изображение,
      поэтому оно не может быть добавлено.";
      return '';
  }
  }else{
  $ErrorDescription="Вы не загрузили изображение, поле пустое,
    поэтому файл в базу не может быть добавлен.";
    return ;
  }
  return $image;
}
// Используя ранее определенную функцию get_image присваиваем
// переменным содержимое файлов
$image_before=get_image(0);
if ($image_before == ''){
unset($image_before);
}else{
$image_after=get_image(1);
if ($image_after == ''){
unset($image_after);
}
}
// ...
// Проверяем, установлены ли переменные
if (isset($title) && isset($image_after)&&isset($image_before)){

$result = mysql_query (
"INSERT INTO imagess(title,img_before,img_after)
VALUES ('$title','$image_before','$image_after')");
if ($result == 'true'){
echo "Ваши изображения успешно добавлены!";
}else{echo "Ваши изображения не добавлены!";}
}else{
if ($ErrorDescription == ''){
echo "Вы ввели не всю информацию, поэтому
  изображения в базу не могут быть добавлены.";
}else{echo $ErrorDescription;}
}

?>
