<?php
session_start();
unset($_SESSION['login']);
session_destroy();
header("location: page1.php");
?>