<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ZeeLands</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>   
        <script src="../js/java.js"></script>
    </head>
    <body>
        <ul class="navbar">
            <li > <img src="../images/logo.png" width="150" height="150">  <br><br>
                <div class="search-container">
                
                </div>
            </li>
            <li> <a class="menu" href="Home.php"> Home </a> </li>
            <li> <a href="Land.php"> Lands </a> </li>
            <li> <a href="Apartmentment"> Apartments </a> </li>
            <li> <a href="House.php"> Houses </a> </li>
            <li> <a href="News.php"> News </a> </li>
            <li> <a href="AboutUS.php"> About Us</a> </li>
            <li> <a href="CountactUS.php"> Contact Us </a> </li> <br>
           
            <div class="navbar-right">

              <li><a href="userLogin.php"><button class="loginbutton"><span>Login</span></button></a>
              
               </li>
              <li> <a href="userRegister.php"><button class="loginbutton"><span>Register</span></button></a>
                <form >
                  <input type="text" placeholder="Search.." name="search">
                  
                </form>
              </li>
              
             
             </div> 
            
            </ul>
           
          </div>
           
           

             <!--end of header-->
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>
             <br>

             <!--Home page-->
             <div align="center">

             <div class="sliderhome">
              <div class="slideshome">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--radio buttons end-->
                <!--slide images start-->
                <div class="slidehome first">
                  <img src="../images/slide3.jpg"  alt="">
                </div>
                <div class="slidehome">
                  <img src="../images/slide4.jpg"  alt="">
                </div>
                <div class="slidehome">
                  <img src="../images/slide1.jpg"  alt="">
                </div>
                <div class="slidehome">
                  <img src="../images/slide6.jpg"  alt="">
                </div>
                <!--slide images end-->
                <!--automatic navigation start-->
                <div class="navigation-auto">
                  <div class="auto-btn1"></div>
                  <div class="auto-btn2"></div>
                  <div class="auto-btn3"></div>
                  <div class="auto-btn4"></div>
                </div>
                <!--automatic navigation end-->
              </div>
             
          </div>



<!--Featured-->
             <br>
             <br>
             <br>
            
            <table width="100%" align="center">

              <tr>
                <th>
                 <h2>Featured Property  &#11088;</h2>

                </th>
              </tr>
            
              <tr>
                <th>

              <div class="container">
            <img src="../images/house1.jpg" width="310" height="250"  class="image">
              <div class="overlay" width="320" height="250" >
                <div class="text">House for sale in Maharagama <br>
                     8.7 Milion <br> 4 Bedrooms, 1 Bathrooms.
                     <br> 
                </div>
                </div>
                </th>
              

               
                <th>
                  <div class="container">
                  <img src="../images/house2.jpg" width="310" height="250"  class="image">
                 <div class="overlay">
                   <div class="text">House for sale in Kadawatha <br>
                     10.1 Milion <br> 4 Bedrooms, 2 Bathrooms.
                    </div>
                    </div>
                   </th>

                   <th>
                    <div class="container">
                    <img src="../images/land1.jpg" width="310" height="250"  class="image">
                   <div class="overlay">
                     <div class="text">Land for sale in Nugegoda <br>
                       Nugegoda Wijerama <br> 830,000 LKR Per Perch Upwards </div>
                      </div>
                      </th>

                      <th>
                        <div class="container">
                        <img src="../images/land2.jpeg" width="310" height="250"  class="image">
                       <div class="overlay">
                         <div class="text">Land for sale in Kegalle <br>
                           Kegalle Ranwala <br> 520,000 LKR Per Perch Upwards </div>
                          </div>
                          </th>
                </tr>  
                
                <tr>

                </tr>

                <tr>

                </tr>


                



                <tr>
                  <th>
  
                <div class="container">
              <img src="../images/land3.jpg" width="310" height="250"  class="image">
                <div class="overlay">
                  <div class="text">Land for sale in Malabe <br>
                    Gemunupura <br> 630,000 LKR Per Perch Upwards </div>
                  </th>
                </div>
  
                 
                  <th>
                    <div class="container">
                    <img src="../images/apartment1.jpg" width="310" height="250"  class="image">
                   <div class="overlay">
                     <div class="text"> Sky Home Colombo 07 <br>
                       Apartments for sale<br> Starting price 250,000,000 </div>
                      </div>
                     </th>
  
                     <th>
                      <div class="container">
                      <img src="../images/apartment2.jpeg" width="310" height="250"  class="image">
                     <div class="overlay">
                       <div class="text"> Alpha Home Colombo 05 <br>
                         Limited Apartments for sale <br> Starting price 180,000,000 </div>
                        </div>
                        </th>
  
                        <th>
                          <div class="container">
                          <img src="../images/apartment3.jpg" width="310" height="250"  class="image">
                         <div class="overlay">
                          <div class="text"> Green Land Colombo 05 <br>
                            Luxury Apartments for sale <br> Starting price 420,000,000 </div>
                            </div>
                            </th>
                  </tr>    
              </div>
          
          </table>
        
            
    <br>
    <br>
    <br>      
            
  <!--footer-->
            <footer>
              <table width="100%">
                <tr>
                <th align="center"> Quick Links </th>
                <th align="center"> About Us </th>
                <th align="center"> Contact Us </th>
                <th align="center"> Newsletters</th>
                </tr>
                <tr>
                <td >
                
                <ul>
                <li> <a class="menu" href="Home.php"> Home </a> </li>
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
                  <label>Email:</label><br>
                <input type="text" id="email" name="email" ><br>
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
                </footer>		
           
    </body>
</html>