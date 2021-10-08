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
            <li> <a class="menu" href="../php/homeMain.php"> Home </a> </li>
            <li> <a href="../php/landMain.php">  Lands </a> </li>
            <li> <a href="../php/apartmentmentMain.php">  Apartments </a> </li>
            <li> <a href="../php/houseMain.php">  Houses </a> </li>
            <li> <a href="../php/NewsMain.php">  News </a> </li>
            <li> <a href="../php/AboutUSMain.php">  About Us</a> </li>
            <li> <a href="../php/CountactUSmain.php">  Contact Us </a> </li> <br>
           
            <div class="navbar-right">
            <li><a href="userLogin.php"><button class="loginbutton"><span>Logout</span></button></a></li>

            <li> <a href="user profile1.php"><img src="../images/user.png" width="100" height="100"></a> <!--user view-->

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

             <!--Countact US-->
             <div class=".contactTable">
             <div class="contactMain"></div>
             <div class="contactMain Left1">
               
             <table width="100%" align="center">
               <tr>

                <th  ><img src="../images/call.gif" width= "100" height= "100">  
                 <br> General line: +9411 2 404 512 <br>
                Customer Service: +9477 2255111
                <br>
                <br>
                </th>
                
                <th  ><img src="../images/facebook.gif" width= "100" height= "100">  
                  <br>www.facebook.com/Zee Lands 
                  <br>
                  <br>
                  
                </th>

                 
               </tr>
               <tr>
                <th ><img src="../images/post.gif" width= "100" height= "100">  
                  <br>
                  Zee Lands,<br>
                 No 225/1, Gold lane, <br>
                 Colombo 06, <br>
                 SriLanka.
                 <br>
                <br>
                <br>
                  <br>
                </th>

                <th  ><img src="../images/viber.gif" width= "100" height= "100">  
                  <br>+94 77 2552288 
                  <br>
                  <br>
                </th>

               </tr>
               
               <tr>
                <th ><img src="../images/email.gif" width= "100" height= "100">  
                  <br>zeelands@gmail.com 
                  <br>
                  <br>
                </th>
  
                <th ><img src="../images/whatsapp.gif" width= "100" height= "100">  
                  <br>+94 77 2552288 
                  <br>
                  <br>
                </th>
  
               </tr>

          
             </table>
            </div>
             </div>
             <div class="contactMain Righ1">
             

             <h3>Keep in touch</h3>
             <br> <br>
             <div class="form">
              <form action="feedback.php" method = "POST" >

              
               <label for="cname">Name:</label><br>
               <input type="text" id="cname" name="cname" ><br>
               <label for="email">Email address:</label><br>
               <input type="text" id="email" name="email" ><br><br>
               <label for="msg"><b>Enter your feedback here:</b></label><br>
              <textarea rows="5" cols="60" id="msg" name="msg" ></textarea><br><br>
              <input type= "submit" value="Sumbit" name="submit">            
               </form> 
             
             </div>
            </div>
            </div>
          </div> 
        </div> 

          
            
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
      <li> <a class="menu" href="../php/homeMain.php"> Home </a> </li>
            <li> <a href="../php/landMain.php">  Lands </a> </li>
            <li> <a href="../php/apartmentmentMain.php">  Apartments </a> </li>
            <li> <a href="../php/houseMain.php">  Houses </a> </li>
            <li> <a href="../php/News.php">  News </a> </li>
            <li> <a href="../php/AboutUSMain.php">  About Us</a> </li>
            <li> <a href="../php/CountactUSmain.php">  Contact Us </a> </li> <br>
           
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