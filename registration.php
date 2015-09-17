<?php
include 'inc/dbconnect.php';
//error_reporting(0);

$users = new ManageUsers ();
$mysqldb = new FoodNutrientsAnalyzer ();

if(isset($_POST['userName'])){

	$tempacc=$_POST['userName'];
	$temppass=$_POST['password'];
	$tempname=$_POST['name'];
	$temppassword_again=$_POST['confirmPassword'];
	$templastname=$_POST['lastName'];
	$tempmiddlename=$_POST['middleName'];
	$tempemail=$_POST['emailAddress'];
	$tempcp=$_POST['number'];
	$tempad=$_POST['address'];
	$temputype=2;
	$tempage=$_POST['age'];
	$tempdate=date("m/d/Y");
 
			if( preg_match("/[\s]/",$tempacc ) || preg_match("/</",$tempacc )) {
						echo "User account not contain white space";
						}else if(strlen($tempacc) > 15){
						echo "User acount not exeed 15 characters";
						}else if( preg_match("/[^A-Za-z0-9]/",$tempacc ) ) {
						echo "User account not contain symbols";
						}
						
						else if( preg_match("/[\s]/",$temppass ) || preg_match("/</",$temppass )) {
						echo "Password not contain white space";
						}else if(strlen($temppass) > 10|| strlen($temppass) < 6){
						echo "Password between 6 to 10 characters";
						}else if( preg_match("/[^A-Za-z0-9]/",$temppass ) ) {
						echo "Password not contain symbols";
						}
						
						else if( preg_match("/[\s]/",$temppassword_again) || preg_match("/</",$temppassword_again)) {
						echo "Password not contain white space";
						}else if(strlen($temppassword_again) > 15){
						echo "Password exeed 15 characters";
						}else if( preg_match("/[^A-Za-z0-9]/",$temppassword_again) ) {
						echo "Password not contain symbols";
						}
						
						else if( preg_match("/[\s]/",$templastname) || preg_match("/</",$templastname)) {
						echo "Lastname not contain white space";
						}else if(strlen($templastname) > 15){
						echo "Lastname exeed 15 characters";
						}else if( preg_match("/[^A-Za-z0-9]/",$templastname) ) {
						echo "Lastname not contain symbols";
						}
						
						else if( preg_match("/[\s]/",$tempname) || preg_match("/</",$tempname)) {
						echo "Firstname not contain white space";
						}else if(strlen($tempname) > 15){
						echo "Firstname not exeed 15 characters";
						}else if( preg_match("/[^A-Za-z0-9]/",$tempname) ) {
						echo "Firstname not contain symbols";
						}
						
						else if( preg_match("/[\s]/",$tempmiddlename) || preg_match("/</",$tempmiddlename)) {
						echo "Middlename not contain white space";
						}else if(strlen($tempmiddlename) > 15){
						echo "Middlename not exeed 15 characters";
						}else if( preg_match("/[^A-Za-z0-9]/",$tempmiddlename) ) {
						echo "Middlename not contain symbols";
						}
						else if($temppass!=$temppassword_again)
						 {
						 echo "Password did not match";
                		 //include 'register.php';
                   		  }
					 
			

else {
	
		$checkAvailability = $users->getUserInfo($tempacc);
		 if ($checkAvailability == 0):
			 $users->registerdUsers($tempacc, $temppass, $tempname, $temppassword_again,
			 $templastname, $tempmiddlename, $tempemail, $tempcp, $tempad, $temputype, $tempage, $tempdate);
				echo "Successful";
		 else:
		 		echo "Username already exist";
		 endif;
		
	   }				   
										     
  }
else{
  header('Location: index.php');
    }	
?>

<?php
include_once( 'inc/dbconnect.php' );

class ManageUsers 
{
	public $link;
	public $tempCount;

	function __construct() 
	{

		$db_connection = new FoodNutrientsAnalyzer();
		$this->link = $db_connection->connect();

		return $this->link;

	}
	function registerdUsers($tempacc, $temppass, $tempname, $temppassword_again,
	 $templastname, $tempmiddlename, $tempemail, $tempcp, $tempad, $temputype, $tempage, $tempdate) 
	{

	 $query = $this->link->prepare("INSERT INTO user (id, username, password,name,middleName,lastName,address,age,emailAddress,mobile,userType,udate) 
	 	VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

	 $values = array(NULL, $tempacc, $temppass, $tempname, $tempmiddlename, $templastname, $tempad, $tempage, $tempemail, $tempcp, $temputype, $tempdate);
	 $query->execute($values);
	 $counts = $query->rowCount();

	 return $counts;
	}
	function getUserInfo($tempacc) {
		$query = $this->link->query("SELECT * FROM user WHERE username='$tempacc'");
		$rowcount = $query->rowCount();	
		if($rowcount == 1):

			$result = $query->fetchAll();
			return $result;
		else:
		 	return $rowcount;		
		 endif;
	}



}
?>