<?php
// included database connection file
require_once "connection.php";
// included database connection file

function getSelect($p_conn, $query, $fetchType)
{
    $queryResponse = mysqli_query($p_conn, $query) or die($query . mysqli_error());
    $dbReturnArray = array();
    $i = 0;
    $fetchCommand = "mysqli_fetch_$fetchType";

    while (@$queryResponseRow = $fetchCommand($queryResponse)) {
        $dbReturnArray[$i] = $queryResponseRow;
        $i++;
    }

    return $dbReturnArray;
}
?>

<script>

const Key = 'Iambatman'; // Replace with a secure key

function dataEncrypt(string) {
  let encryptedData = '';
  for (let i = 0; i < string.length; i++) {
    encryptedData += String.fromCharCode(string.charCodeAt(i) ^ Key.charCodeAt(i % Key.length));
  }
  return btoa(encryptedData);
}

function dataDecrypt(string) {
  encryptedData = atob(string);
  let decryptedData = '';
  for (let i = 0; i < encryptedData.length; i++) {
    decryptedData += String.fromCharCode(encryptedData.charCodeAt(i) ^ Key.charCodeAt(i % Key.length));
  }
  return decryptedData;
}

</script>