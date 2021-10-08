<?php
require 'config.php';
?>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "zeeDB";


$HID = "";
$perch = "";
$price = "";
$elect = "";
$floor = "";
$room = "";
$bathroom = "";

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
    $posts[0] = $_POST['HID'];
    $posts[1] = $_POST['perch'];
    $posts[2] = $_POST['price'];
    $posts[3] = $_POST['elect'];
    $posts[4] = $_POST['floor'];
    $posts[5] = $_POST['room'];
    $posts[6] = $_POST['bathroom'];
    
    return $posts;
}

//Search
if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM housenew WHERE HID = '".$data[0]."' ORDER BY 'HID' DESC";

    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $HID = $row['HID'];
                $perch = $row['perch'];
                $price = $row['price'];
                $elect = $row['elect'];
                $floor = $row['floor'];
                $room = $row['room'];
                $bathroom = $row['bathroom'];
            }
        }
        else
        {
            echo 'Invalid ID number';
            header("Location:housenew.php");
        }
    }
    else
    {
        echo 'Result Error';
        header("Location:housenew.php");
    }
}
//insert
if(isset($_POST['insert']))
{
    $data = getPosts();  

    $HID = $data[0];
    $perch = $data[1];
    $price = $data[2];
    $elect = $data[3];
    $floor = $data[4];
    $room = $data[5];
    $bathroom = $data[6];

    $insert_Query = "INSERT INTO housenew ( HID, perch , price , elect , floor , room , bathroom )  VALUES('$HID','$perch', '$price', '$elect' , '$floor', '$room', '$bathroom')";
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
//delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    
   $HID = $data[0];
   $delete_Query = "DELETE FROM housenew WHERE HID = '$HID'";

    try{
        $delete_Result = mysqli_query($connect, $delete_Query);

        if($delete_Result)
        {
            if(mysqli_affected_rows($connect)>0)
            {
                echo "<script> alert('Details deleted')</script>";
            }
            else{
                echo "<script> alert('Data not deleted')</script>";
            }
        }        

    }catch (Exception $ex){
        echo 'Error-Insert'.$ex->getMessage();
    }

}
//update
if(isset($_POST['update']))
{
    $data = getPosts();

    $HID = $data[0];
    $perch = $data[1];
    $price = $data[2];
    $elect = $data[3];
    $floor = $data[4];
    $room = $data[5];
    $bathroom = $data[6];

   $update_Query = "UPDATE housenew SET HID = '$HID', perch ='$perch', price = '$price' , elect = '$elect', floor = '$floor', room = '$room', bathroom = '$bathroom' WHERE HID = '$HID'";

    try{
        $update_Result = mysqli_query($connect, $update_Query);

        if($update_Result)
        {
            if(mysqli_affected_rows($connect)>0)
            {
                echo "<script> alert('Updated successfully')</script>";
            }
            else{
                echo "<script> alert('Not updated')</script>";
            }
        }        

    }catch (Exception $ex){
        echo 'Error-Insert'.$ex->getMessage();
    }

}//end of php file
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

            <ul class="navbar">
                <li> <a class="menu" href="Dashboard.php"> Dashboard </a> </li>
            </ul>
                
                </div>
            </li>
             <br>
           
            <div class="navbar-right">

              <input type="text" placeholder="Search..." name="search">
              <img src="../images/search.png" width="25" height="25">
            
              
              </li>
              
             
             </div> 
            
            </ul>
           
          </div>
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

             <!--
                 
                 
                 
                 Housepage Admin-->
           
            
            
               <div class="landform">
                <h2>House Details</h2>
                <br>

                    <table>
                    <tr>
                    <form action = "adminHouse.php" method="post">
                     <th> <label for="HID"> House ID :</label><br>
                    <input type="text" id="HID" name="HID" value=<?php echo $HID;?> >
                    <br> <br> 
                
                    <label for="perch"> Number of Perches  :</label> <br>
                    <input type="text" id="perch" name="perch" value=<?php echo $perch;?> >
                    <br> <br>

                    <label for="price"> Price :</label><br> 
                    <input type="text" id="price" name="price" value=<?php echo $price;?> >
                     <br> <br>

                    <label for="elect"> Electricity  :</label> <br>
                     <input type="text" id="elect" name="elect" value=<?php echo $elect;?> >
                   <br> <br>

                    <label for="floor"> Number of Floors :</label> <br> 
                    <input type="text" id="floor" name="floor" value=<?php echo $floor;?> >
                   <br> <br>

                    <label for="room"> Number of Rooms  :</label> <br>
                    <input type="text" id="room" name="room" value=<?php echo $room;?> >
                    </textarea><br> <br>

                    <label for="bathroom"> Number of Bathrooms :</label> <br>
                    <input type="text" id="bathroom" name="bathroom" value=<?php echo $bathroom;?> >
                    </tr>
                 
                    
                    <tr>
                      <th>
                      
                        

                  
                     <th>
                   
                      <button class="landbutton " name="search">Search</button>
                      <button class="landbutton " name="insert">Add</button>
                      
                      <button class="landbutton " name="update">Update</button>
                      <button class="landbutton buttonred" name="delete">Delete</button>
                  
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