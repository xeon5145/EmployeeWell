<?php
require_once "../include/connection.php";
require_once "../include/mailer.php";

$username = $_POST['username'];
$email = $_POST['email'];
$employeeId = $_POST['employeeId'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

// checking if user already exists
$userCheck = "SELECT id FROM emp_users WHERE email = '$email'";
$resUC = getSelect($conn, $userCheck, 'array');
$rowUC = count($resUC);
// checking if user already exists

if ($resUC < 0) {
    $userQuery = "  UPDATE emp_users 
                SET 'password' = '12345',
                username,
                firstname,
                lastname,
                email,
                password,
                WHERE 'id' = $resUC[0]['id'] ";

    $emailMessage = "Hi , Your account has been updated successfully";
} else {
    $userQuery = "  INSERT INTO emp_users (username,firstname,lastname,email)
                VALUES ('$username','$firstName','$lastName','$email')";

    $emailMessage = "Hi , Your account has been created , Please use this link to generate your password";
}


if ($conn->query($userQuery) === TRUE) {

    $sendTo = $email;
    $mail->IsHTML(true);
    $mail->Subject = 'Account Created Succesfully';
    $mail->Body    = $emailMessage;
    $mail->AltBody = $emailMessage;

    $mail->addAddress($sendTo);
    if (!$mail->send()) {
        echo 0;
    } else {
        echo 1;
    }
} else {
}
