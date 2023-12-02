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