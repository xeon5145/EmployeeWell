<?php
require_once "../include/connection.php";
require_once "../include/mailer.php";
require_once "../include/dbfunctions.php";

$pwd = serverEnc(dataDecrypt($_POST['password']));
$email = dataDecrypt($_POST['email']);

// updating user password
$updatePwd = "UPDATE emp_users SET password = '$pwd' WHERE email = '$email'";
if ($conn->query($updatePwd) === TRUE) {

    $emailSubject = "Password generated successfully";
    $emailMessage = " <p> Hi ,</p>
                                    <br>
                                    <p>Password for your account has been generated successfully</p>
                                    ";
    $sendTo = $email;
    $mail->IsHTML(true);
    $mail->Subject = $emailSubject;
    $mail->Body    = $emailMessage;
    $mail->AltBody = $emailMessage;

    $mail->addAddress($sendTo);
    if ($mail->send()) {
    }
    $status = "Password generated successfully , You can close this page now";
} else {
    $status = 'Something went wrong, Please try again';
}
// updating user password
echo $status;
