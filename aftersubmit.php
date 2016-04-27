<?php
// Start the session
session_start();
if(isset($_SESSION['email'])){
    header("Location: userprofile.php");
}
else{
    header("Location: signin.php");
}
?>
