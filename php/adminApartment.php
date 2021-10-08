<?php
require 'config.php';
?>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "zeeDB";


$aID = "";
$Location = "";
$Floors = "";
$Bedrooms = "";
$Bathrooms = "";
$Size = "";
$Amount= "";
$Description="";

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
    $posts[0] = $_POST['aID'];
    $posts[1] = $_POST['Location'];
    $posts[2] = $_POST['Floors'];
    $posts[3] = $_POST['Bedrooms'];
    $posts[4] = $_POST['Bathrooms'];
    $posts[5] = $_POST['Size'];
    $posts[6] = $_POST['Amount'];
	$posts[7] = $_POST['Description'];
    
    return $posts;
}

//Search
if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM apartment WHERE aID = '".$data[0]."' ORDER BY 'aID' DESC";

    $search_Result = mysqli_query($connect, $search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                  $aID = $row['aID'];
                  $Location =$row['Location'];
                  $Floors = $row['Floors'];
                  $Bedrooms = $row['Bedrooms'];
                  $Bathrooms = $row['Bathrooms'];
                  $Size = $row['Size'];
                  $Amount = $row['Amount'];
				  $Description =$row['Description'];
            }
        }
        else
        {
            echo 'Invalid name';
            header("Location:apartmentns.php");
        }
    }
    else
    {
        echo 'Result Error';
        header("Location:apartmentsns.php");
    }
}
//insert
if(isset($_POST['insert']))
{
    $data = getPosts();  

    $aID = $data[0];
    $Location = $data[1];
    $Floors = $data[2];
    $Bedrooms = $data[3];
    $Bathrooms = $data[4];
    $Size = $data[5];
    $Amount = $data[6];
	$Description = $data[7];

     $insert_Query = "INSERT INTO apartment ( aID , Location , Floors , Bedrooms , Bathrooms , Size , Amount , Description ) VALUES ('$aID','$Location','$Floors','$Bedrooms','$Bathrooms','$Size','$Amount','$Description')";
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
    
   $aID = $data[0];
   $delete_Query = "DELETE FROM apartment WHERE aID  = '$aID'";

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

    $aID = $data[0];
    $Location = $data[1];
    $Floors = $data[2];
    $Bedrooms = $data[3];
    $Bathrooms = $data[4];
    $Size = $data[5];
    $Amount = $data[6];
	$Description = $data[7];

     $update_Query = "UPDATE apartment SET  aID ='$aID', Location = '$Location', Floors = '$Floors', Bedrooms = '$Bedrooms', Bathrooms ='$Bathrooms', Size = '$Size', Amount = '$Amount', Description = '$Description' WHERE aID = '$aID'";
 
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

             <!--Apartmentpage Admin-->
           
            
            
               <div class="landform">
                <h2>Apartment Details</h2>
                <br>

                    <table>
                    <tr>
                    <form action = "adminApartment.php" method="post">
                     <th></th> <label for="aID">Apartment Name:</label> <br>
                      <input type="text" id="aID" name="aID"  value=<?php echo $aID;?> > <br>
                   
                  
                      <label for="Location">Location:</label> <br>
                      <input type="text" id="Location" name="Location" value=<?php echo $Location;?> > <br>

                      <label for="Floors">Number of floors:</label> <br>
                      <input type="text" id="Floors" name="Floors" value=<?php echo $Floors;?> > <br>

                      <label for="Bedrooms">Number of bedrooms in a house:</label> <br>
                      <input type="text" id="Bedrooms" name="Bedrooms" value=<?php echo $Bedrooms;?> > <br>
					  
					   <label for="Bathrooms">Number of bathrooms in a house:</label> <br>
                      <input type="text" id="Bathrooms" name="Bathrooms" value=<?php echo $Bathrooms;?> > <br>

                      <label for="Size">Size of a house:</label> <br>
                      <input type="text" id="power" name="Size" value=<?php echo $Size;?>> <br>

                      <label for="Amount">Price of an apartment:</label> <br>
                      <input type="text" id=" Amount" name=" Amount" value=<?php echo $Amount;?> > <br>

                      <label for="Description" >Description:</label> <br>
                      <input type="text" id="Description" name="Description"value=<?php echo $Description;?>> <br>
                      </th>
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