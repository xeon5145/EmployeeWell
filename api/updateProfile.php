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

if ($resUC > 0) {
    $userId = $resUC[0]['id']; 
    $userQuery = "  UPDATE emp_users 
                SET
                username = '$username',
                firstname = '$firstName',
                lastname = '$lastName',
                email = '$email',
                password = '1234'
                WHERE id = '$userId'";

    $emailSubject = "Account Updated successfully";
    $emailMessage = "Hi , Your account has been updated successfully";

    if ($conn->query($userQuery) === TRUE) {
    
        $sendTo = $email;
        $mail->IsHTML(true);
        $mail->Subject = $emailSubject;
        $mail->Body    = $emailMessage;
        $mail->AltBody = $emailMessage;
    
        $mail->addAddress($sendTo);
        if ($mail->send()) {
            echo 1;
        }
    }
        
    } else {
        echo "something went wrong";
    }


