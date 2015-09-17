<?php
session_start();
include_once('../inc/dbconnect.php');

if(isset($_SESSION['admin'])){
	
	if(isset($_POST['delete'])){
	
	$uid = $_POST['article'];
	
	FoodNutrientsAnalyzer::oldDb();
	mysql_query("DELETE FROM article WHERE id='$uid'");
	header('Location:article-table.php');
	
	}

	
}else{
header('Location:../home.php');

}

?>