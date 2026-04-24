<?php
session_start();
session_destroy();
header("Location:vista.php");
exit();
?>