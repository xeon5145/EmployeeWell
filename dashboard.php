<?php
require_once "config.php";
session_start();
$userid = $_SESSION['loggedInUser'];

if(isset($_SESSION['loggedInUser']))
{
    // getting all users in the system
    $getUsers = "SELECT u.id,u.firstname,u.lastname,u.email FROM emp_users as u WHERE deleted = 0";
    $resGU = getSelect($conn,$getUsers,'array');
    $rowGU = count($resGU);
    // getting all users in the system
    include "navbar.php";
    include "views/dashboard.php";
}
else
{
    echo "
    <script>
    window.location.href = 'index.php'
    </script>
    ";
}

?>