<?php
session_start();
session_unset();
session_destroy();
//echo "<h3 style=\"text-align:center; margin-top:4%\"> Logout</h3>";
header("refresh:1;url=login.php");
exit();