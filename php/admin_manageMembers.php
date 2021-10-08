<?php

	require 'config.php';
?>

<?php
  
  $id = $_POST['id'];
  $sql = "SELECT * FROM register WHERE ID = '$id'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
  {
      while($row = $result->fetch_assoc()) 
      {         
          $Fname = $row['f_name'];
          $Lname = $row['l_name'];
          $addr1 =  $row["address_no"];
          $addr2 = $row["street"];
          $addr3 = $row["city"];
          $pNo = $row["p_no"];
          $email = $row["email"];                        
      }
  } 
  else 
  {
      $Fname = 'NO DATA FOUND';
      $Lname = 'NO DATA FOUND';
      $addr3 = 'NO DATA FOUND';
      $pNo = 'NO DATA FOUND';
      $email = 'NO DATA FOUND';
      
  }

//update operation
  if (isset($_POST['update'])) 
  {

    $Id = $_POST['id'];
    $Fname = $_POST['funame'];
    $Lname = $_POST['luname'];
    $addr3 = $_POST['city'];
    $pNo = $_POST['pNo'];
    $email = $_POST['email'];

    $update_Q = "UPDATE register SET f_name='$Fname', l_name='$Lname', city='$addr3', p_no='$pNo', email='$email' WHERE ID='$Id'";
    $update_Result = mysqli_query($conn, $update_Q);

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
  }


//delete operation
if(isset($_POST['delete']))
{

    $Id = $_POST['id'];
    $delete_Q = "DELETE FROM register WHERE ID='$Id'";
    $delete_Result = mysqli_query($conn, $delete_Q);

    if($delete_Result)
    {
        if(mysqli_affected_rows($conn)>0)
        {
            echo "<script> alert('Deleted!!!')</script>";
            $Fname = 'Data Deleted!!!';
            $Lname = 'Data Deleted!!!';
            $addr3 = 'Data Deleted!!!';
            $pNo = 'Data Deleted!!!';
            $email = 'Data Deleted!!!';
        }
        else
        {
            echo "<script> alert('Data Not Deleted!!!')</script>";
        }
    }    
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Manage Members</title>
        <link rel="stylesheet" type="text/css" href="../css/manageMembers.css"/>   
        <script src="../js/java.js"></script>
    </head>
    <body>
          <div class="navbar">
          <img src="../images/logo.png" width="120" height="120"> <!--company logo-->

          <ul class="navbar">
                <li> <a class="menu" href="Dashboard.php"> Dashboard </a> </li>
          </ul>

          <div class="navbar-right">               
              <input type="text" placeholder="Search..." name="search">
              <img src="../images/search.png" width="25" height="25">
              
          </div>  
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
             
               <div class="form123">
                  <h2><u>Manage Members</u></h2><br>
                  <br>

                  <table width="160%">
                    <tr>
                    <td> 
                      <form action="admin_manageMembers.php" method="POST">

                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                  
                      <label>First Name:</label> <br>
                      <input type="text" id="uname" name="funame"  value="<?php echo $Fname ?>" style="width: 45%"> <br>

                       <label>Last Name:</label> <br>
                      <input type="text" id="uname" name="luname"  value="<?php echo $Lname; ?>" style="width: 45%"> <br>

                      <label>City:</label> <br>
                      <input type="text" id="uadd" name="city" value="<?php echo $addr3; ?>" style="width: 45%"> <br>

                      <label>Phone No:</label> <br>
                      <input type="text" id="pNo" name="pNo" value="<?php echo $pNo; ?>" style="width: 45%"> <br>

                       <label>Email:</label> <br>
                      <input type="text" id="email" name="email" value="<?php echo $email; ?>" style="width: 45%"> <br>

                      <input type="submit" class="button" name="update" value="Update">
                      <input type="submit" class="button buttonred" name="delete" value="Delete"> 

                      <h2><a href="manageMembers.php">Search Again</a></h2>
                     
                    </form> 
                    </td>
                    </tr>
                  </table>  
              </div>   
    <br>
    <br>
    <br>      
            
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
  <script type="text/javascript" src="../js/Javascript.js"></script>           </footer>		
  </body>
  </script>
</html>