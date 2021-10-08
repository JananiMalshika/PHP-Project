<?php
require 'config.php';
?>

<?php

$cid= $_POST["cid"];
$cname= $_POST["cname"];
$email= $_POST["email"];
$msg = $_POST["msg"];

$sql= "INSERT INTO feedback ( cid,cname, email, msg) VALUES('$cid','$cname','$email','$msg')";

    if($conn->query($sql))
    {
        echo "Data inserted Successfully";
        header("Location:CountactUSmain.php");
    }
    else
    {
        echo "Error:".$conn->error;
        $conn->close();

    }
?> 

