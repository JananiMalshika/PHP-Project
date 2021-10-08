<?php
require 'config.php';
?>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "zeeDB";


$landID = "";
$location = "";
$area = "";
$price = "";
$power = "";
$water = "";
$wide = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);
}
catch(Exception $ex){
    echo 'Error';
}

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['landID'];
    $posts[1] = $_POST['location'];
    $posts[2] = $_POST['area'];
    $posts[3] = $_POST['price'];
    $posts[4] = $_POST['power'];
    $posts[5] = $_POST['water'];
    $posts[6] = $_POST['wide'];
    
    return $posts;
}

//insert
if(isset($_POST['insert']))
{
    $data = getPosts();  

    $landID = $data[0];
    $location = $data[1];
    $area = $data[2];
    $price = $data[3];
    $power = $data[4];
    $water = $data[5];
    $wide = $data[6];

    $insert_Query = "INSERT INTO land (landID , location , area , price ,power, water, wide )  VALUES('$landID','$location', '$area', '$price' , '$power', '$water', '$wide')";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);

        if($insert_Result)
        {
            if(mysqli_affected_rows($connect)>0)
            {
                echo "<script> alert('Inserted successfully')</script>";
            }
            else{
                echo "<script> alert('Details not inserted')</script>";
            }
        }        

    }catch (Exception $ex){
        echo 'Error-Insert'.$ex->getMessage();
    }

}
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
            <li> <a href="../php/News.php">  News </a> </li>
            <li> <a href="../php/AboutUSMain.php">  About Us</a> </li>
            <li> <a href="../php/CountactUSmain.php">  Contact Us </a> </li> <br>
           
            <div class="navbar-right">

              <li> <a href="user Profile1.php"><img src="../images/user.png" width="100" height="100"></a> <!--user view-->
              
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

             <!--Landpage customer-->
           
            
            
             <div class="landform">
                <h2>Land Details</h2>
                <br>

                    <table>
                    <tr>
                    <form action = "landSaleUser.php" method="post">
                     <th></th> <label for="landID">Land ID:</label> <br>
                    
                      <input type="text" id="landID" name="landID" value=<?php echo $landID;?> > <br>
                   
                  
                      <label for="location">Location:</label> <br>
                      <input type="text" id="location" name="location" value=<?php echo $location;?> > <br>

                      <label for="area">Total Area:</label> <br>
                      <input type="text" id="area" name="area" value=<?php echo $area;?> > <br>

                      <label for="price">Price of perch:</label> <br>
                      <input type="text" id="price" name="price" value=<?php echo $price;?> > <br>

                      <label for="power">Electricity supply line :</label> <br>
                      <input type="text" id="power" name="power" value=<?php echo $power;?>> <br>

                      <label for="water"> Water supply:</label> <br>
                      <input type="text" id="water" name="water" value=<?php echo $water;?> > <br>

                      <label for="wide" >Wide of Road:</label> <br>
                      <input type="text" id="wide" name="wide"value=<?php echo $wide;?>> <br>
                      </th>
                    </tr>
                 
                    
                    <tr>
                      <th>
                      
                        

                  
                     <th>
                   
                    
                      <button class="landbutton " name="insert">Add</button>
                      
                     
                      </th>
                      </tr>


                    
                    </form>
                </table>
              </div>
                 
                
            

            
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