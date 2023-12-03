<?php
// included database connection file
require_once "connection.php";
// included database connection file

function getSelect($conn, $query, $fetchType)
{
  $queryResponse = mysqli_query($conn, $query) or die($query . mysqli_error());
  $dbReturnArray = array();
  $i = 0;
  $fetchCommand = "mysqli_fetch_$fetchType";

  while (@$queryResponseRow = $fetchCommand($queryResponse)) {
    $dbReturnArray[$i] = $queryResponseRow;
    $i++;
  }

  return $dbReturnArray;
}


function dataDecrypt($string)
{
  $key = 'Iambatman';
  $encryptedData = base64_decode($string);
  $decryptedData = '';

  for ($i = 0; $i < strlen($encryptedData); $i++) {
    $decryptedData .= chr(ord($encryptedData[$i]) ^ ord($key[$i % strlen($key)]));
  }

  return $decryptedData;
}

function serverEnc($data)
{
  if (CRYPT_SHA512 == 1) {
    $encString = crypt($data, '$5$Iambatman');
  }
  return $encString;
}

function getuserData($conn,$userid,$fieldname)
{
  $getUserData = "SELECT $fieldname FROM emp_users WHERE id = $userid";
  $resGUD = getSelect($conn,$getUserData,'array');
  $rowGUD = count($resGUD);

  if($rowGUD > 0)
  {
    $data = $resGUD[0][$fieldname];
  }
  else
  {
    $data = "Invalid user id or fieldname";
  }
  return $data;
}
?>

