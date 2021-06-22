<?php 
session_start();
session_unset();
session_destroy();
setcookie('username', '', 0, '/');
echo "<script> location='index.php' </script>";
?>