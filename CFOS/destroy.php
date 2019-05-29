<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header('location: index.php');
echo 'You have been logged out. <a href="index.php">Go back</a>';
?>