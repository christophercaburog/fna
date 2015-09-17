<?php
session_start();
include('inc/dbconnect.php');

if(isset($_POST['delete'])){

$user = $_POST['session'];



FoodNutrientsAnalyzer::oldDb();
		mysql_query("DELETE FROM userstatus WHERE uid='$user'");//delete all from status
		header('Location:my-nutrient-status.php');
}else {


	header('Location:index.php');
	}
	
	
	

?>