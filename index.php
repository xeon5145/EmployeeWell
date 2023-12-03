<?php
require_once "config.php";

session_start();
if(isset($_SESSION['loggedInUser']))
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