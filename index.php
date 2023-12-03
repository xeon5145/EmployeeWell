<?php
require_once "config.php";

session_start();
$loggedInUser = $_SESSION['loggedInUser'];
if(isset($loggedInUser))
{
    echo "
    <script>
    window.location.href = 'dashboard.php'
    </script>
    ";
}
else
{
    include "views/index.php";
}
?>