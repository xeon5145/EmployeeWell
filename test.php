<?php
require_once "config.php";
echo serverEnc('user123');
session_start();
session_destroy();
?>
