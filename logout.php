<?php
require_once "include/header.php";
session_start();
session_unset();
session_destroy();

if(!isset($_SESSION['loggedInUser']))
{
    echo "session destroyed";
    echo 
    "
    <script>
    window.location='index.php';
    </script>
    ";
}
else
{
    echo $_SESSION['loggedInUser'];
}
?>