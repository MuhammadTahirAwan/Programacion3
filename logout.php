<?php
session_start();
session_destroy();
header("Location: myHomePage.php");
exit();
?>
