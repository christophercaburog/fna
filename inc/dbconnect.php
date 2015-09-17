<?php

?>
<?php
class FoodNutrientsAnalyzer {

protected $db_conn;
public $db_name ='fna';
public $db_user = 'root';
public $db_pass = '';
public $db_host = 'localhost';

function connect() 
{

	try
	{
		$this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user,$this->db_pass);

		return $this->db_conn;
	}
	catch(PDOException $e)
	{
		return $e->getMessage();
	}

	
}
function oldDb () {
$dbhost = 'localhost'; 
$dbuser = 'root'; 
$dbpass = '';
$dbname = 'fna';
mysql_select_db($dbname,mysql_connect($dbhost, $dbuser, $dbpass)) or die ('Error connecting to mysql');

}

}


?>