<?php
session_start();

session_destroy();
header("location:../vista/index2.php");
exit();
?>