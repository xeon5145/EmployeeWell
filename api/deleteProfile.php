<?php
require_once "../include/connection.php";

$userId = $_POST['userid'];

// deleting user
$deleteQuery = "UPDATE emp_users SET deleted = 1 WHERE id = $userId ";

if ($conn->query($deleteQuery) === TRUE)
{
    $deletionStatus = 1;
}
else
{
    $deletionStatus = 0;
}
// deleting user

echo $deletionStatus;
?>