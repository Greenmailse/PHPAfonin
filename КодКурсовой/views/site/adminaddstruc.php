<?php include $_SERVER['DOCUMENT_ROOT'].'\views\layout\header.php'; // $_SERVER['DOCUMENT_ROOT'] ?>
<?php
  include_once('functions.php')
?>
<html>

<head>
  <title>Добавить запись</title>
</head>

<body>

<h2>Добавить запись</h2>

<form action='adminadd.php' method='post'>

<p>
<label>Name:<br></label>
<input name='name' type='text' size='11' maxlength='50'>
</p>

<p>
<label>Price:<br></label>
<input name='price' type='text' size='11' maxlength='50'>
</p>
<label>Image:<br></label>
<form method="post" enctype="multipart/form-data" action="functions.php">
      <input type="file" name="image">
      <input type="submit" value="Добавить запись!">
    </form>



</form>
</body>
</html>
