<?php

    require 'config.php';
?>

<?php
    //admin login credential
    $adminUN = 'Admin';
    $adminPW = 'Admin123';
    

    $uName = $_POST['uName'];
    $pwd   = $_POST['pwd1'];

    
    if($uName == $adminUN && $pwd == $adminPW)
    {
        header('location:dashboard.php'); 
    }
    else
    {
        $sql = "SELECT * FROM register WHERE email= '$uName' && password= '$pwd'";
        $result = mysqli_query($conn, $sql);
        $no = mysqli_num_rows($result);

        if($no == 1)
        {
            header('location:homeMain.php');
            
        }
        else
        {
            echo "<script> alert('INVALID USERNAME OR PASSWORD!')</script>";
            echo "<center><h2><a href='userLogin.php'> Login Again! </a></h2></center>";
        }

    }
    
    mysqli_close($conn);

?>