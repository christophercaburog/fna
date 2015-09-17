





<?php
//error_reporting(0);
include 'inc/dbconnect.php';
$login = new ManageLogin ();

//include 'inc/dbconnect.php';
		if(isset($_POST['username'])){
			$myuser=$_POST['username'];
			$mypassword=$_POST['password'];
		if($myuser==""&&$mypassword=="")
		{  
			echo "All fields are required";
								session_start();
			
								unset($_SESSION['currentUser']);
								unset($_SESSION['admin']);
								session_destroy();
		}
		else if($myuser=="")
		{

			echo "input a user name";
								session_start();
			
								unset($_SESSION['currentUser']);
								unset($_SESSION['admin']);
								session_destroy();
		}
		else if( preg_match("/[^A-Za-z0-9]/",$myuser) ) {
						echo "invalid username";
								session_start();
			
								unset($_SESSION['currentUser']);
								unset($_SESSION['admin']);
								session_destroy();
						}
		else if( preg_match("/[^A-Za-z0-9]/",$mypassword) ) {
						echo "invalid password";
								session_start();
			
								unset($_SESSION['currentUser']);
								unset($_SESSION['admin']);
								session_destroy();
						}
		else if($mypassword=="")
					{
					
								echo "input a password";
								session_start();
			
								unset($_SESSION['currentUser']);
								unset($_SESSION['admin']);
								session_destroy();
					}
				else{
						
				$login->loginUser($myuser,$mypassword);
					
					}	 
            }
						 else{
						 echo "error";
						  }
	 
?>

<?php
//include 'inc/dbconnect.php';
class ManageLogin {

		public $link;
		public $utype;


	function __construct() 
	{

		$db_connection = new FoodNutrientsAnalyzer();
		$this->link = $db_connection->connect();

		return $this->link;

	}

		function loginUser ($myuser, $mypassword) {
		$query = $this->link->query("SELECT * FROM user WHERE username='$myuser' and password='$mypassword'");
		$rowcount = $query->rowCount();	
		//$temp = mysql_query($query);
		//$row = mysql_fetch_assoc($temp);
		//extract($row);
		//$type = $row['userType'];

		if ($rowcount == 1):
		session_start();
		$_SESSION['user'] = $myuser;
				$result=ManageLogin::getUserTypePDO($myuser, $mypassword);
		return $result;
		else:
			ManageLogin::validateAccount();
		endif;

		
		}

		function validateAccount () {
			session_start();
			echo "you dont have account register first";
		 	unset($_SESSION['currentUser']);
			unset($_SESSION['admin']);
			session_destroy();
		}

		function noAccount($myuser, $mypassword) {
		$query = $this->link->query("SELECT * FROM user WHERE username='$myuser' and password='$mypassword'");
		$rowcount = $query->rowCount();	
		if ($rowcount==0):
			session_start();
			echo "you dont have account register first";
		 	unset($_SESSION['currentUser']);
			unset($_SESSION['admin']);
			session_destroy();
			return "You dont have account";
		
		return $rowcount;
		endif;
		}
		//getting the  user type 
		function getUserType ($myuser, $mypassword) {
		//FoodNutrientsAnalyzer::oldDb(); defrecated codes ko to
		
		$temp = $this->link->query("SELECT * FROM user WHERE username='$myuser' and password='$mypassword'");
		//$temp = mysql_query("SELECT * FROM user WHERE username='$myuser' and password='$mypassword'");
	 
		$find = mysql_num_rows($temp);
			if($find == 1){
			$fetch = mysql_fetch_array($temp);
			extract($fetch);
			$type = $fetch['userType'];
			echo $type;
			
			if($type == 1){
			
			$_SESSION['admin'] = $myuser;
			
			
			}
			
			return $type;
			}else{
				return false;
			}
		
		
		}//end of the funtion
		
		
		function getUserTypePDO ($myuser, $mypassword)
		{
		$query = $this->link->query("SELECT * FROM user WHERE username='$myuser' and password='$mypassword'");
		
		while($r = $query->fetch())
			{
			
			$uType =  $r['userType'];
			
			echo $uType;//kailangan to naka echo para dun sa window location sa ajax posting
			if($uType == 1){
			//tinawag ko na yung session dun sa labas
			$_SESSION['admin'] = $myuser;
			
			
							}
			return $uType;
			}//end of while
			}
		
		
		}
		
		
		




?>