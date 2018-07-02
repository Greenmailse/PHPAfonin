<?php

include ("DB.php");
$query = mysqli_query($db, "INSERT INTO `user` (`productid`) VALUES ('".$_POST['add_id']."')");
exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=index.php'></head></html>");
?>
