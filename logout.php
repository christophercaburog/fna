<?php
session_start();
unset($_SESSION['currentUser']);
unset($_SESSION['admin']);
session_destroy();
header("location:./");
?>