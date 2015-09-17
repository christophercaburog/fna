<?php

session_start();
include_once('dbconnect.php');

if(isset($_POST['save']))
	{
	
	
	
	FoodNutrientsAnalyzer::oldDb();
	$temp = $_SESSION['user'];
	$tname = $_POST['rname'];
	$tmiddle = $_POST['middlename'];
	$tlastname = $_POST['lastname'];
	$taddress = $_POST['address'];
	$tage = $_POST['age'];
	$temail = $_POST['emailaddress'];
	$tnumber = $_POST['mobilenumber'];
	
	 
	
	
	mysql_query("UPDATE user SET name = '$tname', middleName = '$tmiddle', lastName = '$tlastname', address = '$taddress', age = '$tage', emailAddress = '$temail', mobile = '$tnumber'
WHERE username = '$temp'")or die("error".mysql_error());
	
	//$save = new FnaAdapter();
	echo "<script type=text/javascritp>alert(successfully update);</script>";
	//$save -> updateUserProfile ($tname, $tmiddle, $tlastname, $taddress, $tage, $temail, $tnumber, $temp);
header('Location:../home.php');

	}

if(isset($_POST['submit'])):
	
	$tempname = $_POST['name'];
	$tempemail = $_POST['email'];
	$tempsubject = $_POST['subject'];
	$tempmessage = $_POST['message'];
	$tempdate = date("m/d/Y");
	$send = new FnaAdapter();
	
	$send-> sendMessage ($tempname, $tempemail, $tempsubject, $tempmessage, $tempdate);
	
	endif;
	
	

class FnaAdapter {
	
	function __construct() 
	{

		$db_connection = new FoodNutrientsAnalyzer();
		$this->link = $db_connection->connect();

		return $this->link;

	}

	function validate ($tempname, $tempemail, $tempsubject, $tempmessage) {
	
	}
	
	function sendMessage () {
	$query = $this->link->prepare("INSERT INTO message (id, name, email, subject,message,date) 
	 	VALUES (?,?,?,?,?,?)");

	 $values = array(NULL, $tempname, $tempemail, $tempsubject, $tempmessage, $tempdate);
	 $query->execute($values);
	}
	
	
	// function updateUserProfile ($tname, $tmiddle, $tlastname, $taddress, $tage, $temail, $tnumber, $temp) 
	// {
		// FoodNutrientsAnalyzer::oldDb();
		
			// $query="SELECT * FROM user WHERE username='$temp'";
						// $result=mysql_query($query);
			            // $count=mysql_num_rows($result);
			         	


		// if($count==1){
		
		// mysql_query("UPDATE user SET name = '$tname', middleName = '$tmiddle', lastName = '$tlastname', address = '$taddress', age = '$tage', email = '$temail', mobile = '$tnumber'
// WHERE mobile = '$temp'");
		
		// //header('Location:../home.php');
		// echo $temp;
		// }
		
		// }//end of update user profile

}
?>


