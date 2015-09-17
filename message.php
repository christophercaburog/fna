<?php
include_once('inc/dbconnect.php');
if(isset($_POST['name'])):
	$tempname = $_POST['name'];
	$tempemail = $_POST['email'];
	$tempsubject = $_POST['subject'];
	$tempmessage = $_POST['message'];
	$tempdate=date("m/d/Y");
	$send = new FnaAdapter();
	
	$send->sendMessage($tempname, $tempemail, $tempsubject, $tempmessage, $tempdate);

endif;
	?>
<?php
include_once('inc/dbconnect.php');
class FnaAdapter {

	public $link;
	function __construct() 
	{

		$db_connection = new FoodNutrientsAnalyzer();
		$this->link = $db_connection->connect();

		return $this->link;

	}

	function validate ($tempname, $tempemail, $tempsubject, $tempmessage) {
	
	}
	
	function sendMessage ($tempname, $tempemail, $tempsubject, $tempmessage, $tempdate) {
	$query = $this->link->prepare("INSERT INTO message (id, name, email, subject,message,rdate) 
	 	VALUES (?,?,?,?,?,?)");

	 $values = array(NULL, $tempname, $tempemail, $tempsubject, $tempmessage, $tempdate);
	 $query->execute($values);
	  $counts = $query->rowCount();

	 return $counts;

	}

}
?>


