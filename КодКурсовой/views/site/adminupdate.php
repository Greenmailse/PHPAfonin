<?php include $_SERVER['DOCUMENT_ROOT'].'\views\layout\header.php'; // $_SERVER['DOCUMENT_ROOT'] ?>

<html>

<head>

</head>

<body>

<h2>Изменить запись</h2>

<?php
echo "<form action='adminupdetestruc.php' method='post'>";
echo "<p>";
echo "<label>Название:<br></label>";
echo "<input name='name' type='text' size='11' maxlength='50'>";
echo "</p>";
echo "<p>";
echo "<label>Price:<br></label>";
echo "<input name='price' type='text' size='11' maxlength='11'>";
echo "</p>";
//echo "<input name='id' type='hidden' value='".$_GET['upd_id']."' size='11' maxlength='11'>";
echo "<input type='submit' name='submit' value='Изменить запись'>";

echo "</form>";
 ?>
</body>
</html>
