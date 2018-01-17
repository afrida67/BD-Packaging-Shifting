<?php
session_start();
session_destroy();
header('location:http://localhost/p4/logout.php');
?>