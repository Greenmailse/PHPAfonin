<?php

include ("DB.php");
$query = mysqli_query($db, "INSERT INTO `product` (`NAME`, `PRICE`, `IMAGE`) VALUES ('".$_POST['name']."', '".$_POST['price']."', '".$_POST['image']."')");
exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
?>
