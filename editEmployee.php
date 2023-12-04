<?php
require_once "config.php";

session_start();

$userid = $_SESSION['loggedInUser'];

if(isset($_SESSION['loggedInUser']))
{

    include "navbar.php";
    include "views/editEmployee.php";
}
else
{
    echo "
    <script>
    window.location.href = 'index.php';
    </script>
    ";
}

?>