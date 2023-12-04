<?php
require_once "../include/connection.php";
require_once "../include/mailer.php";
require_once "../include/dbfunctions.php";

$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$employeeId = mysqli_real_escape_string($conn,$_POST['employeeId']);
$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
$timestamp = time() + (60 * 10);

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


    if ($conn->query($userQuery) === TRUE) {


        // getting variables to generate user password
        $encMail = dataEncrypt($email.'/'.$timestamp);
        // getting variables to generate user password

        $emailSubject = "Account Created successfully";
        $emailMessage = " <p> Hi ".$firstName.",</p>
                                <p>Your account has been created , Please use this link below to generate your password</p>
                                <a href='".$url."/EmployeeWell/generatePwd.php?stamp=".$encMail."'>Generate Password</a>
                                <br>
                                <br>
                                <p><b>This link is valid till next 10 Minutes<b><p>";
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
