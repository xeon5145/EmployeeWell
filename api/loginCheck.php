<?php
require_once "../include/connection.php";
require_once "../include/dbfunctions.php";

$username = dataDecrypt(mysqli_real_escape_string($conn,$_POST['username']));
$password = serverEnc(dataDecrypt(mysqli_real_escape_string($conn,$_POST['password'])));
// validating login credentials
$getUser = "SELECT id,password,deleted FROM emp_users WHERE username = '$username' AND password = '$password' AND deleted = 0";
$resGU = getSelect($conn,$getUser,'array');
$rowGU = count($resGU);
// validating login credentials

if($rowGU > 0)
{
    $status =  $resGU[0]['id'];
}
else
{
    $status = -1;
}

echo $status;
?>