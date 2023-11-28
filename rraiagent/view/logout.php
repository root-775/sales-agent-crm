<?php 
session_start();
session_destroy();
header('location: index.php?controller=rrai&function=login');


?>