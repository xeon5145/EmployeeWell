<?php
require_once "config.php";

$stamp = dataDecrypt($_GET['stamp']);

$dataArray = explode('/',$stamp);
$email = $dataArray[0];
$timestamp = $dataArray[1];
$currentTime = time();

if($currentTime > $timestamp)
{
    echo "<div class='alert alert-danger text-center mt-5' role='alert'>
    The link has Expired. Please generate another Link.
  </div>";
}
else
{
    // validating email
    $checkUser = "SELECT id FROM emp_users WHERE email = '$email'";
    $resCU = getSelect($conn,$checkUser,"array");
    // validating email
    if(count($resCU) > 0)
    {
        include "views/generatePwd.php";
    }
    else
    {
        echo "<div class='alert alert-danger text-center mt-5' role='alert'>
        Invalid User Link or Link is broken , Please generate another link.
        </div>";
    }
}

?>




