

<?php 
session_start();
session_unset();
session_destroy();
//redirects to login 
Print '<script>alert("Logout Successful !");</script>';
$callback = "../login.php";
header("location: $callback");
exit();
?>