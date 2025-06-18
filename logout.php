<?php
session_start();
unset($_SESSION['fez_login']);

session_destroy();

header("Location: index.php");
 ?>