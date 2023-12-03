<?php
require_once "../include/connection.php";
require_once "../include/dbfunctions.php";

$username = dataDecrypt($_POST['username']);
$password = serverEnc(dataDecrypt($_POST['password']));

// validating login credentials
$getUser = "SELECT id FROM emp_users WHERE username = '$username' OR email = '$username'";
$resGU = getSelect($conn,$getUser,'array');
$rowGU = count($resGU);
// validating login credentials


if($rowGU > 0)
{
    echo $resGU[0]['id'];
}
else
{
    echo -1;
}
?>