<?php

require 'config.php';


?>
<?php
 
   
 $user_id = $_POST['user_id'];
 $sql = "SELECT * FROM register WHERE ID = '$user_id'";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) 
 {
     while($row = $result->fetch_assoc()) 
     {       
   
      $f_name = $row["f_name"];
      $l_name = $row["l_name"];
      $addr=  $row["city"];
      $p_no = $row["p_no"];
      $email = $row["email"];                        
     }
 } 
 else 
 {
     $f_name = 'NO DATA FOUND';
     $l_name = 'NO DATA FOUND';
     $addr= 'NO DATA FOUND';
     $p_no = 'NO DATA FOUND';
     $email = 'NO DATA FOUND';
     
 }
//update operation
if (isset($_POST['update'])) 
{

  $user_id = $_POST['id'];
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $addr = $_POST['addr'];
  $p_no = $_POST['p_no'];
  $email = $_POST['email'];

  try{
      $update_Result = mysqli_query($conn, "UPDATE register SET f_name='$f_name', l_name='$l_name', city='$addr', p_no='$p_no', email='$email' WHERE ID='$user_id'");

      if($update_Result)
      {
          if(mysqli_affected_rows($conn)>0)
          {
              echo "<script> alert('Successfully Updated!!!')</script>";
              
          }
          else{
              echo "<script> alert('Update Failed!!!')</script>";
          }
      }        

  }catch (Exception $ex){
      echo 'Error-Insert'.$ex->getMessage();
  }

}


//delete operation
if(isset($_POST['delete']))
{

    $user_id = $_POST['id'];
    $delete_Q = "DELETE FROM register WHERE ID='$user_id'";

try{
        $delete_Result = mysqli_query($conn, $delete_Q);

        if($delete_Result)
        {
            if(mysqli_affected_rows($conn)>0)
            {
                echo "<script> alert('Deleted!!!')</script>";
                $f_name = 'Deleted!!!';
                $l_name = 'Deleted!!!';
                $addr = 'Deleted!!!';
                $p_no = 'Deleted!!!';
                $email = 'Deleted!!!';
            }
            else{
                echo "<script> alert('Data Not Deleted!!!')</script>";
            }
        }        

    }catch (Exception $ex){
        echo 'Error-Insert'.$ex->getMessage();
    }

}
?>

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

            <li> <a href="user Profile1.php"><img src="../images/user.png" width="100" height="100"></a> <!--user view-->
            <form >
              
                  <input type="text" placeholder="Search.." name="search">
                  
            </form>
              
               </li>
             
             </div> 
            
            </ul>
           
          </div>
           
        <!--end of header-->
        <br>
             


        <fieldset style="background-color: black; color: white; width: 600px; height: 700px; margin-left: 25%; margin-top: 200px;">
    <form action="../php/user profile.php" class="user_profile" method="post" >
     <br><br>
     <center>
    <img src="../images/logo.png" style="width: 100px; height: 100px;"> 
    <h1 style="color: yellow;"> Hey <?php echo $f_name ?> !!</h1>
    <h3 style="color: yellow;">User Profile <br> User ID: <?php echo $user_id ?></h3> <br><br>
  </center>
    <input type="hidden"  name="id"  value="<?php echo $user_id;?>">
    <label>First name:</label><br>
    <input type="text" id="f_name" name="f_name" value=<?php echo $f_name ?>><br><br>
    <label>Last name:</label><br>
    <input type="text" id="l_name" name="l_name" value=<?php echo $l_name ?>><br><br>
    <label>Phone Number:</label><br>
    <input type="text" id="p_no" name="p_no" value=<?php echo $p_no ?>><br><br>
    <label>Email:</label><br>
    <input type="text" id="email" name="email" value=<?php echo $email ?>><br><br>
    <label>Address:</label><br>
    <input type="text" id="addr" name="addr" value=<?php echo $addr ?>><br><br> 
    <br>
    <input type="submit" value="update" id="update" name="update" style="background-color: black; color: yellow;">
    <input  type="submit" value="delete" id="delete" name="delete" style="background-color: black; color: yellow;" onclick="return confirm('Are you sure')">
    
    <h4><a href="user profile1.php">Search Again</a></h4>
    </form>
    
    </fieldset>
    <br><br><br><br>
   
   



    

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