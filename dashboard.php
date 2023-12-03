<?php
require_once "config.php";
session_start();
$userid = $_SESSION['loggedInUser'];

// getting all users in the system
$getUsers = "SELECT u.id,ud.empid,u.firstname,u.lastname,u.email FROM emp_users as u JOIN emp_user_data as ud ON u.id = ud.userid WHERE deleted = 0";
$resGU = getSelect($conn,$getUsers,'array');
$rowGU = count($resGU);
// getting all users in the system
include "navbar.php";
include "views/dashboard.php";
?>