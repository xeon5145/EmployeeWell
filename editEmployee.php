<?php
require_once "config.php";

session_start();

$userid = $_SESSION['loggedInUser'];
$profile = $_GET['id'];

if(isset($_SESSION['loggedInUser']))
{
    
    include "navbar.php";
    // getting user details
    $getUserDetails = "SELECT * FROM emp_users WHERE id = $profile";
    $resGUD = getSelect($conn,$getUserDetails,"array");
    $rowGUD = count($resGUD);
    // getting user details
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