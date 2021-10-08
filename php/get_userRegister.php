<?php

	require 'config.php';
?>

<?php

	$F_name = $_POST['f_name'];
	$L_name = $_POST['l_name'];
	$gender = $_POST['gender'];
	$dob    = $_POST['year'].'-'.$_POST['mon'].'-'.$_POST['day'];
	$A_no   = $_POST['A_no'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$po_code = $_POST['po_code'];
	$p_no = $_POST['p_no'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT * FROM register WHERE email= '$email'";
	$result = mysqli_query($conn, $sql);
	$no = mysqli_num_rows($result);

	if($no == 1)
	{
		echo"EMAIL ALREADY EXIST";
	}
	else
	{
		$reg= "INSERT INTO register(f_name, l_name, gender, DoB, address_no, street, city, po_code, p_no, email, password)  
		VALUES ('$F_name', '$L_name', '$gender', '$dob', '$A_no', '$street', '$city', '$po_code', '$p_no', '$email', '$pwd')"; 

		mysqli_query($conn, $reg);
		header('location:homeMain.php');
	}

	mysqli_close($conn);
?>