<?php
include "header.php";
include "dbfunctions.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $url = "https://";
 else
  $url = "http://";
 // Append the host(domain name, ip) to the URL.
$url.= $_SERVER['HTTP_HOST'];

// getting smtp details
$getConfig = "SELECT * FROM emp_config WHERE type = 'smtp' ";
$resGC = getSelect($conn, $getConfig, 'array');
$rowGC = count($resGC);
// getting smtp details

if($rowGC > 0)
{
    //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = $resGC[0]['value'];
        $mail->Port       = $resGC[1]['value'];
        $mail->SMTPSecure = $resGC[2]['value'];
        $mail->SMTPAuth   = true;
        $mail->Username = $resGC[3]['value'];
        $mail->Password = $resGC[4]['value'];
        $mail->SetFrom($resGC[3]['value']);
        $mail->IsHTML(true);
}
else
{
    echo "<div class='alert alert-danger text-center' role='alert'>
    SMTP Mailer is not configured.
  </div>";
}
 ?>