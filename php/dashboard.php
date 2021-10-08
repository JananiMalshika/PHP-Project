<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="../css/dashboard_style.css"/>   
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
	  </head>
	
	
    <body>
        <div class="navbar">
            <img src="../images/logo.png" width="120" height="120"> <!--company logo-->
            
		        <div class="navbar-right"> 
              
		          	<input type="text" placeholder="Search..." name="search">
			          <img src="../images/search.png" width="25" height="25">
			          
                <a href="userLogin.php"><button class="loginbutton"><span>Logout</span></button></a>
            </div>	
		    </div>
	<!--end of nav bar -->
	

		<div class="sidenav1">
			<a href="#"> Dashboard</a>
      <a href="#"> Requests</a>
      <a href="manageMembers.php"> Manage Members</a>
			<a href="#"> properties </a>
				
					<a class="properties" href="adminHouse.php">Houses</a>
					<a class="properties" href="adminLand.php">Lands</a>
					<a class="properties" href="adminApartment.php">Apartments</a>
			
			<a href="#"> Manage Tours </a>
			<a href="#"> Reports </a>
			<a href="#"> Payments </a>
			<a href="#"> Maps </a>
			<a href="#"> Loans </a>
			
    </div>
    <!--end of side bar -->

    <!--slideshow and main content -->

      <table width="70%">
        <tr>
          <td>
              
              <div class="member">                 
                <a href="#"> <img src="../images/reports.jpg" width="100%" height="350px"> </a>
                <div class="center"> <a href="manageMembers.php">Manage Members</a></div>
              </div>
          </td>

          <td>
            <div class="house">                 
              <a href="#"> <img src="../images/house2.jpg" width="450px" height="350px"> </a>
              <div class="center"> <a href="adminHouse.php">HOUSES</a></div>
            </div>
        </td>

        <td>
          <div class="land">                 
            <a href="#"> <img src="../images/land2.jpg" width="450px" height="350px"> </a>
            <div class="center"> <a href="adminLand.php">LANDS</a></div>
          </div>
        </td>

        <td>
          <div class="apart">                 
            <a href="#"> <img src="../images/aprt.jpg" width="450px" height="350px"> </a>
            <div class="center"> <a href="adminApartment.php">APARTMENTS</a></div>
          </div>
        </td>

      </tr>
    
    </table>
  
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