<?php
require_once "../include/connection.php";
require_once "../include/mailer.php";

$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$employeeId = mysqli_real_escape_string($conn,$_POST['employeeId']);
$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
// checking if user already exists
$userCheck = "SELECT id,password FROM emp_users WHERE id = '$employeeId'";
$resUC = getSelect($conn, $userCheck, 'array');
$rowUC = count($resUC);
// checking if user already exists

if ($resUC > 0) {
    $userId = $resUC[0]['id'];
    $serverPwd = $resUC[0]['password'];
    if(strlen($password) == 0)
    {
        $updPwd = serverEnc($password);
    }
    else
    {
        $updPwd = $serverPwd;
    }
    $userQuery = "  UPDATE emp_users 
                SET
                username = '$username',
                firstname = '$firstName',
                lastname = '$lastName',
                email = '$email',
                password = '$updPwd'
                WHERE id = '$userId'";

    $emailSubject = "Account Updated successfully";
    $emailMessage = "Hi ".$firstName." , Your account has been updated successfully";

    if ($conn->query($userQuery) === TRUE) {
    
        $sendTo = $email;
        $mail->IsHTML(true);
        $mail->Subject = $emailSubject;
        $mail->Body    = $emailMessage;
        $mail->AltBody = $emailMessage;
    
        $mail->addAddress($sendTo);
        if ($mail->send()) {
            $status = 'Account has been updated successfully';
        }
    }
}
else
{
    $status = 'Invalid User';
}

echo $status;
        


