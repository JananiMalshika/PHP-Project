<?php

	require 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
      <title>User Register</title>
      <link rel="stylesheet" type="text/css" href="../css/register_style.css"/>   
		  <script src="../js/register_js.js"> </script>
		  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
	
<body>
		<ul class="navbar">
            <li > <img src="../images/logo.png" width="150" height="150">  </li>
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
		
		
	  <div class="register" style="color:white;">
	
		<p class="logo2" align="center"><a href="#"><img src="../images/logo.png" width="200" height="200"></a></p>


		<!-- FORM -->
		
		<form action="get_userRegister.php" class="form2" method="post" onsubmit="return checkPassword()">
		<p class="welcome">REGISTER TO JOIN WITH US!</p>
		
		
		<table width="100%">
		<tr>
			<td>First Name<br>
			<input type="text" name="f_name" class="fName" id="fName1" pattern="[A-Za-z]{1,20}" placeholder="First Name" required></td>
		
			<td>Last Name<br>
			<input type="text" name="l_name" class="lName" id="lName1"  pattern="[A-Za-z]{1,20}" placeholder="Last Name" required></td>
		</tr>	
		</table>
		
		Gender<br>
		<input type="radio" class="sex" id="male" required name="gender" value="male" checked>Male
		<input type="radio" class="sex" id="female" name="gender" value="female" >Female
		<br>
		
		Date of Birth<br>
		<select id="day" class="day" name="day" required>
			<option hidden>Day</option>
			<option>1 </option><option>2 </option><option>3 </option><option>4 </option><option>5 </option><option>6 </option><option>7 </option><option>8 </option><option>9 </option><option>10 </option>
			<option>11 </option><option>12 </option><option>13 </option><option>14 </option><option>15 </option><option>16 </option><option>17 </option><option>18 </option><option>19 </option><option>20 </option>
			<option>21 </option><option>22 </option><option>23 </option><option>24 </option><option>25 </option><option>26 </option><option>27 </option><option>28 </option><option>29 </option><option>30 </option><option>31 </option>
		</select>
	
		<select id="month" class="month" required name="mon" >
			<option selected="" hidden>Month</option>
			<option>JAN </option><option>FEB </option><option>MAR </option>
			<option>APR </option><option>MAY </option><option>JUN </option>
			<option>JUL </option><option>AUG </option><option>SEP </option><option>OCT </option><option>NOV </option><option>DEC </option>
		</select>
		
		<input type="text" name="year" class="year" id="year" required pattern="[0-9]{1,4}"  placeholder="Year"></td>
		<br>
		
		Address<br>
		<input type="text" name="A_no" class="address1" id="address1" required pattern="[0-9-/]{1,5}"  placeholder="Number">
		<input type="text" name="street" class="address2" id="address2" required pattern="[A-Za-z ]{1,50}"  placeholder="Street Address">
		<input type="text" name="city" class="address3" id="address3" required pattern="[A-Za-z]{1,50}"  placeholder="City">
		<br>
		
		Postal Code<br>
		<input type="text" name="po_code" class="pCode" id="pCode" required pattern="[0-9-]{1,5}"  placeholder="Postal Code">
		<br>
		
		Phone number<br>
		<input type="text" name="p_no" class="pNo" id="pNo" required pattern="[0-9]{10}"  placeholder="Phone number">
		<br>
		
		Email<br>
		<input type="email" name="email" class="email" id="email" required pattern="[a-z0-9]+@+[a-z]+/.[a-z]{2-3}" placeholder="Email">
		<br>
		
		<table width="100%">
		<tr>
		<td>Password<br>
		<input type="password" name="pwd" class="pwd" id="pwd" required pattern="[A-Za-z0-9]{5,10}" placeholder="Password"></td>
		
		<td>Confirm Password<br>
		<input type="password" class="Repwd" id="Repwd" required placeholder="Confirm Password"><td>
		</tr>
		</table>
		
		<input type="checkbox" id="policy" name="policy" required onclick="enablebutton()">
		<a href="#">Accept privacy policy and terms</a><br>
		
		<input type="submit" align="center" class="subm2" id="subm2" value="Register" disabled><br><br>
		<p class="log">Already a member? <a href="userLogin.php"> Login</a></p>
         
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