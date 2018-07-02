<?php

include ("DB.php");

$query = mysqli_query($db, "UPDATE `product` SET `NAME` = '".$_POST['name']."', `PRICE` = '".$_POST['price']."' WHERE `product`.`ID` = ".$_POST['id']."");
exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
?>
