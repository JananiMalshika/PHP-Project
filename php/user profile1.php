<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ZeeLands</title>
        <link rel="stylesheet" type="text/css" href="../css/style1.css"/>   
        <script src="../js/java.js"></script>
    </head>
    <body>
        <ul class="navbar">
            <li > <img src="../images/logo.png" width="150" height="150">  <br><br>
                <div class="search-container">
                
                </div>
            </li>
            <li> <a class="menu" href="../php/homeMain.php"> Home </a> </li>
            <li> <a href="../php/landMain.php">  Lands </a> </li>
            <li> <a href="../php/apartmentmentMain.php">  Apartments </a> </li>
            <li> <a href="../php/houseMain.php">  Houses </a> </li>
            <li> <a href="../php/NewsMain.php">  News </a> </li>
            <li> <a href="../php/AboutUSMain.php">  About Us</a> </li>
            <li> <a href="../php/CountactUSmain.php">  Contact Us </a> </li> <br>
           
            <div class="navbar-right">

            <li><a href="userLogin.php"><button class="loginbutton"><span>Logout</span></button></a></li>

            <li> <a href="../php/user Profile1.php"><img src="../images/user.png" width="100" height="100"></a> <!--user view-->
            <form >
              
                  <input type="text" placeholder="Search.." name="search">
                  
            </form>
              
               </li>
             
             </div> 
            
            </ul>
           
          </div>
           
        <!--end of header--><br><br><br><br><br><br><br><br><br><br><br><br>


  
      <fieldset class="form45" style="width:300px; height: 150px; margin-left: 45%; color: white; background-color: black;">
       <form method="post" action="user profile.php"> 
      <label for="user_id"><b>Enter User ID:</b></label><br><br>
      <input type="text" id="user_id" name="user_id" placeholder="User ID" ><br><br>
      
      <input type="submit" id="search" name="search" style="background-color: black; color: yellow;">
      
    
      
    
    </fieldset>
    
    

    <fieldset id="userSlideshow">
      
      <img class="upSlides" src="../images/userproHouse.jpg" >
      <img class="upSlides" src="../images/userproHouse2.jpg" >
      <img  class="upSlides" src="../images/userproAppartment.jpg" >
      <img class="upSlides" src="../images/userproAppartment2.jpg" >
    
      <button class="upBtn1Slide" onclick="plusDivs(-1)">&#10094;</button>
      <button class="upBtn1Slide" onclick="plusDivs(1)">&#10095;</button>
    </fieldset>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--<div class="userbody">-->
          
          




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
                <li> <a class="menu" href="https://courseweb.sliit.lk/course/view.php?id=3726"> Home </a> </li>
                <li> <a href="https://courseweb.sliit.lk/course/view.php?id=3726"> Lands </a> </li>
                <li> <a href="https://courseweb.sliit.lk/course/view.php?id=3726"> Apartments </a> </li>
                <li> <a href="https://courseweb.sliit.lk/course/view.php?id=3726"> Houses </a> </li>
                <li> <a href="https://courseweb.sliit.lk/course/view.php?id=3726"> News </a> </li>
                <li> <a href="https://courseweb.sliit.lk/course/view.php?id=3726"> About Us</a> </li>
                <li> <a href="https://courseweb.sliit.lk/course/view.php?id=3726"> Contact Us </a> </li>
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
                <a href="https://courseweb.sliit.lk/course/view.php?id=3726">
                <img src="../images/fb.png" width= "30" height= "30">
                
                <a href="https://courseweb.sliit.lk/course/view.php?id=3726">
                <img src="../images/instagram.png" width= "30" height= "30">
                
                <a href="https://courseweb.sliit.lk/course/view.php?id=3726">
                <img src="../images/twitter.png" width= "30" height= "30">
                
                <a href="https://courseweb.sliit.lk/course/view.php?id=3726">
                <img src="../images/in.png" width= "30" height= "30">
                </td>
                </tr>
                </table>
                </div>
    <script type="text/javascript" src="../js/Javascript.js"></script>           </footer>		
    </body>
    </script>
</html>