<?php
require("1.dbConnection.php");
session_start();

if (isset($_GET["submit"])) {

    $condition1 = "info_id = $_SESSION[id]";
    // $condition1 = "info_id = 1";

    $sql1 = "SELECT * FROM enitest.info WHERE $condition1 ";
    $retval1 = mysqli_query($con, $sql1);
    
    if (!$retval1) {
        echo "Error in SQL query";
    }
    $row = mysqli_fetch_assoc($retval1);
    echo "name: $row[name]\n surname: $row[surname]\n dateofbirth: $row[dateofbirth]";

    echo $_SESSION["id"];

}