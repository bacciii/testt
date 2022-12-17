<?php

require("1.dbConnection.php");
session_start();


if (isset($_GET["submit"])) {

    $email = $_GET['email'];
    $password =$_GET['password'];

    $condition1 = "email = '$email'";

    $sql1 = "SELECT * FROM enitest.login WHERE $condition1 ";//AND $condition2";
    $retval1 = mysqli_query($con, $sql1);

    if (!$retval1) {
        echo "Error in SQL query";
    }
    $row = mysqli_fetch_assoc($retval1);
    $_SESSION['id'] = $row["id"];
    echo "id: $row[id]\n email: $row[email]\n password: $row[password]";
    header("Location: buton.php");

   
}
