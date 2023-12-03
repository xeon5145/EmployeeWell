<?php
require_once "config.php";
session_start();
$userid = $_SESSION['loggedInUser'];

include "navbar.php";
include "views/dashboard.php";
?>