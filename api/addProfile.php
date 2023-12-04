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

if ($rowUC > 0) {
    $status = 'This email is already registered';
} else {
    $userQuery = "  INSERT INTO emp_users (username,firstname,lastname,email)
                VALUES ('$username','$firstName','$lastName','$email')";

    $emailSubject = "Account Created successfully";
    $emailMessage = "Hi , Your account has been created , Please use this link to generate your password";

    if ($conn->query($userQuery) === TRUE) {
    
        $sendTo = $email;
        $mail->IsHTML(true);
        $mail->Subject = $emailSubject;
        $mail->Body    = $emailMessage;
        $mail->AltBody = $emailMessage;
    
        $mail->addAddress($sendTo);
        if ($mail->send()) {
        }
        $status = 'Account has been created and email for password generation has been sent';
    } else {
        $status = 'Something went wrong, Please try again';
    }
}
echo $status; 


