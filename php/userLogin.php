<?php

	require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login_style.css"/>   
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
		<ul class="navbar">
      
        <li > <img src="../images/logo.png" width="150" height="150"></li>
        <li> <a class="menu" href="../php/Home.php"> Home </a> </li>
            <li> <a href="../php/Land.php"> Lands </a> </li>
            <li> <a href="../php/Apartmentment.php"> Apartments </a> </li>
            <li> <a href="../php/House.php"> Houses </a> </li>
            <li> <a href="../php/News.php"> News </a> </li>
            <li> <a href="../php/AboutUS.php"> About Us</a> </li>
            <li> <a href="../php/CountactUS.php"> Contact Us </a> </li> <br>
       
            
		</ul>
		<br>
    <!--end of header-->
		
	  <div class="login">
	
		    <p class="logo2" align="center"><a href="#"><img src="../images/logo.png" width="200" height="200"></a></p>

		    <!-- LOGIN FORM -->
		    <form class="form1" method="post" action="validate_userLogin.php">
	
            <p class="welcome">WELCOME TO ZEE LANDS!</p>

            	
		        <input type="text" class="uName" id="uName" name="uName" placeholder="Username" required>
            	<input type="password" class="pwd1" id="pwd1" name="pwd1" placeholder="Password" required>
    
            	<input type="submit" align="center" class="subm" id="subm" name="submit" value="Login">

		        <p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
		        <p class="reg">Not a member? <a href="userRegister.php"> Register</a></p>
         
	      </form>
    </div>


  <!--footer-->
            <footer>
              <table width="100%">
                <tr>
                <th> Quick Links </th>
                <th> About Us </th>
                <th> Contact Us </th>
                <th> Newsletters</th>
                </tr>
                <tr>
                <td >
                
                <ul>
                <li> <a class="menu" href="../php/Home.php"> Home </a> </li>
                <li> <a href="../php/Land.php"> Lands </a> </li>
                <li> <a href="../php/Apartmentment.php"> Apartments </a> </li>
                <li> <a href="../php/House.php"> Houses </a> </li>
                <li> <a href="../php/News.php"> News </a> </li>
                <li> <a href="../php/AboutUS.php"> About Us</a> </li>
                <li> <a href="../php/CountactUS.php"> Contact Us </a> </li> <br>
                </ul>
                
                 </th>
                 <td><p> 
                   Choose your dream destination from  reliable and easy way .<br>
                  Join with us. <br>
                  Zee Land our team always caring about your comfortable .  <br>
                    Through our website  you can sell your property or buy a new property. <br>
                    <br>
                    <br>
                  "Zee Lands way to your own paradise ."<br>
                </p>
                </td>
                <td> <p>
                ZEE Lands(Pvt)Ltd,No 60, Pannipitiya Road,<br>Battaramulla Srilanka.<br>
                +9411254894 <br>
                info@zeelands.lk </p> 
                </td>
                <td>
                Subscribe to our newsletter <br>
                For exclusive updates.<br>
                <br>
                <form>
                <input type="text" id="email" name="email" value="Email"><br>
                <br>
                <input type="submit" value="Submit">
                </form>
                </td>
                </tr>
                <br>
                <tr>
                <td  colspan="3" align="center">
                <b> Copyright @2020- Zeelands- All Rights Reserved,Concept,Design and Development by webtech. </b>
                </td>
                <td rowspan="2" >
                <b><i> Reach Us On </i></b> <br>
                <br>
                <a href="#">
                <img src="../images/fb.png" width= "30" height= "30">
                
                <a href="#">
                <img src="../images/instagram.png" width= "30" height= "30">
                
                <a href="#">
                <img src="../images/twitter.png" width= "30" height= "30">
                
                <a href="#">
                <img src="../images/in.png" width= "30" height= "30">
                </td>
                </tr>
                </table>
                </div>
                </footer>
                
                <div></div>
    </body>
</html>