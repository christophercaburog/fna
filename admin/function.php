<?php


include 'source/dbconnect.php';

// //image
// if(isset($_FILES['image'])){
// $time = time();
// $file = $_FILES["image"]["name"];
// $file = substr($time,0).$_FILES['image']['name'];
	// move_uploaded_file($_FILES["image"]["tmp_name"],"_assets/".$file) ;
	// $result = mysql_query("update members set `image`='$file' where `mid` = '$mid' ");
	// //if($result){header("location:home.php");}
// }


//image
$yyyy = new AdminAdapter();

if(isset($_POST['deleteMessage'])){

$del = $_POST['id'];

$yyyy->deleteMessage($del);

}//end delete msg_get_queue

if(isset($_POST['users'])){

$u = $_POST['users'];
FoodNutrientsAnalyzer::oldDb();


echo $u;
 mysql_query("DELETE FROM user WHERE id='$u'");

 header('Location:user.php');
 
 //echo "<script type=text/javascript>alert(sasadad);</script>";

}


if(isset($_POST['button'])) {



$file=$_FILES['imahe']['tmp_name'];
//$image= addslashes(file_get_contents($_FILES['photoimg']['tmp_name']));
$image_name= addslashes($_FILES['imahe']['name']);
$image_size= $_FILES['imahe']['size'];
$pangalanNgImage = $_FILES["imahe"]["name"];
$filetype = $_FILES['imahe']['type'];
$ext = substr($pangalanNgImage, strrpos($pangalanNgImage, '.') +1);

if((!empty($_FILES['imahe'])) && ($_FILES['imahe']['error'] == 0)){

if(($ext == "jpg") 
											|| ($ext == "JPG") 
											|| ($ext == "jpeg") 
											|| ($ext == "JPEG") 
											|| ($ext == "png") 
											|| ($ext == "PNG") 
											&& ($filetype == ".jpg") 
											|| ($filetype == ".JPG") 
											|| ($filetype === ".jpeg") 
											|| ($filetype == ".JPEG") 
											|| ($filetype == ".png") 
											|| ($filetype == ".PNG")){
											
											
											if ($image_size <= 10000000){
											$img = $_FILES['imahe'];
											$title = $_POST['title'];
											$desc = $_POST['description'];
											
											move_uploaded_file($_FILES["imahe"]["tmp_name"],"imagearticle/" . $_FILES["imahe"]["name"]);
			
								
									$location = "imagearticle/".basename($_FILES["imahe"]["name"]);
											
											$yyyy->AddArticle($location,$title,$desc);
											header('Location:article-table.php');
											}//end of image size
											
											else {
											
											echo "Invalid file  ";
											
											}
											
											
										}//end of ext
										
										else {
											
											echo "Invalid file ";
											
											}

}//end of not empty
	
										else {
											
											echo "Invalid file  ";
											
											}



//pasok sa database


}//end of article set

if(isset($_POST['delete'])){

$del = $_POST['foodId'];

$yyyy->deleteFood($del);

}//end of set delete

if(isset($_POST['edit'])) {//start of eding the nutrients
FoodNutrientsAnalyzer::oldDb();
$idOfFoodHere = $_POST['foodId'];

$result = mysql_query("SELECT * FROM nutrient
WHERE id='$idOfFoodHere'");

while($row = mysql_fetch_array($result))
  {
 $tempididid =  $row['id'];
 $tempEditAmountPer = $row['amountPer'];
 $tempEditAmount = $row['amount'];
 $tempEditFoodName = $row['foodName'];
 $tempEditWater = $row['water'];
 $tempEditEnergy = $row['energy'];
 $tempEditProtein = $row['protein'];
 $tempEditFat = $row['fat'];
 $tempEditCarbohydrate = $row['carbohydrate'];
 $tempEditCrudeFiber = $row['crudefiber'];
 $tempEditAsh = $row['ash'];
 $tempEditCalcium = $row['calcium'];
 $tempEditPhosphorus = $row['phosphorus'];
 $tempEditIron = $row['iron'];
 $tempEditRetinol = $row['retinol'];
 $tempEditBcarotene = $row['bcarotene'];
 $tempEditVita = $row['vita'];
 $tempEditThiamine = $row['thiamine'];
 $tempEditRiboflavin = $row['riboflavin'];
 $tempEditNiacin = $row['niacin'];
 $tempEditAscorbicAcid = $row['ascorbicacid'];

  include_once('edit-food.php');

  }


	}//edit the nurients
	
	
if(isset($_POST['save'])){
//echo "this is a test";

$t = $_POST['editIdId'];
echo $tempididididi;
$tempper = $_POST['perPiece'];
$tempamount = $_POST['amount'];

$tempwater = $_POST['water'];
$tempenergy = $_POST['energy'];
$tempprotein = $_POST['protein'];
$tempfat = $_POST['fat'];
$tempcarbohydrate = $_POST['carbohydrate'];
$tempcrudefiber = $_POST['crudefiber'];
$tempash = $_POST['ash'];
$tempcalcium = $_POST['calcium'];
$tempphosphorus =$_POST['phosphorus'];
$tempiron = $_POST['iron'];
$tempretinol = $_POST['retinol'];
$tempbcarotene = $_POST['bcarotene'];
$tempvita = $_POST['vita'];
$tempthiamine = $_POST['thiamine'];
$tempriboflavin = $_POST['riboflavin'];
$tempniacin = $_POST['niacin'];
$tempascorbicasid = $_POST['ascorbicacid'];



FoodNutrientsAnalyzer::oldDb();
mysql_query("UPDATE nutrient SET amoutPer= '$tempper', amount = '$tempamount', water = '$tempwater', energy = '$tempenergy', protein = '$tempprotein', fat = '$tempfat', carbohydrate = '$tempcarbohydrate', crudefiber = '$tempcrudefiber', ash = '$tempash', calcium = '$tempcalcium', phosphorus = '$tempphosphorus', iron = '$tempiron', retinol = '$tempretinol', bcarotene = '$tempbcarotene', vita = '$tempvita', thiamine = '$tempthiamine', riboflavin = '$tempriboflavin', niacin = '$tempniacin', ascorbicacid = '$tempascorbicasid'
		WHERE id = '$t'");
 
 header('Location: index.php');

}//end of edit save

if(isset($_POST['enter'])) {
$tempper = $_POST['perPiece'];
$tempamount = $_POST['amount'];
$tempname = $_POST['name'];
$tempcategory = $_POST['category'];
$tempwater = $_POST['water'];
$tempenergy = $_POST['energy'];
$tempprotein = $_POST['protein'];
$tempfat = $_POST['fat'];
$tempcarbohydrate = $_POST['carbohydrate'];
$tempcrudefiber = $_POST['crudefiber'];
$tempash = $_POST['ash'];
$tempcalcium = $_POST['calcium'];
$tempphosphorus =$_POST['phosphorus'];
$tempiron = $_POST['iron'];
$tempretinol = $_POST['retinol'];
$tempbcarotene = $_POST['bcarotene'];
$tempvita = $_POST['vita'];
$tempthiamine = $_POST['thiamine'];
$tempriboflavin = $_POST['riboflavin'];
$tempniacin = $_POST['niacin'];
$tempascorbicasid = $_POST['ascorbicacid'];
//$tempimage= $_POST['photoimg'];
$tempdate=date("m/d/Y");


$n = new AdminAdapter ();

$tempnutrientsid = $n->setCategoryId($tempcategory);


//image ditto

									$file=$_FILES['photoimg']['tmp_name'];
									//$image= addslashes(file_get_contents($_FILES['photoimg']['tmp_name']));
									$image_name= addslashes($_FILES['photoimg']['name']);
									$image_size= $_FILES['photoimg']['size'];
									$pangalanNgImage = $_FILES["photoimg"]["name"];
									$filetype = $_FILES['photoimg']['type'];
									$ext = substr($pangalanNgImage, strrpos($pangalanNgImage, '.') +1);//para sa extension
									
							//dito yung umpisa sa pag validate ng image kung walang laman
							if((!empty($_FILES['photoimg'])) && ($_FILES['photoimg']['error'] == 0)){

							
							//dito mag uumpisa ang validation sa mga image extension
							if(($ext == "jpg") 
											|| ($ext == "JPG") 
											|| ($ext == "jpeg") 
											|| ($ext == "JPEG") 
											|| ($ext == "png") 
											|| ($ext == "PNG") 
											&& ($filetype == ".jpg") 
											|| ($filetype == ".JPG") 
											|| ($filetype === ".jpeg") 
											|| ($filetype == ".JPEG") 
											|| ($filetype == ".png") 
											|| ($filetype == ".PNG"))
											{								
																
	
								if ($image_size <= 10000000) //start dito ng validation sa kapag malaki yung image
								{
								//ito yung pag move ng files papunta sa upload/ na folder
									move_uploaded_file($_FILES["photoimg"]["tmp_name"],"uploads/" . $_FILES["photoimg"]["name"]);
			
								//dito kinuha yng temporary name ng files .jpg na ext
									$location = "uploads/".basename($_FILES["photoimg"]["name"]);
									
									//$newImageLocation = "uploads/".$location; pag gusto mo mawala yung ext nya ito ang ipasok sa database
				
									$n->insertDataDb($tempper, $tempamount, $tempname, $tempwater, $tempenergy, $tempprotein, 
									$tempfat, $tempcarbohydrate, $tempcrudefiber, $tempash, $tempcalcium, $tempphosphorus, 
									$tempiron, $tempretinol, $tempbcarotene, $tempvita, $tempthiamine, $tempriboflavin, $tempniacin, 
									$tempascorbicasid, $location, $tempdate, $tempnutrientsid, $tempcategory);
									//echo "<img src='uploads/".$location."'  class='preview'>";
									//echo "Sucessful";
									//exit();
									session_start();
									$_SESSION['img'] = $pangalanNgImage ;
									
									
								}else	
									{
											echo "image is to large ".$image_size;
											
											
									}//katapusan ng validation ng image kapag sobrang laki
									
								}else{
											echo "<center style = 'font-family:calibri;'>JPG,JPEG and PNG are the only extension available to upload</center>";
			
									 }//dito natapos ang validation sa extenxion ng image
								}else{
								
											echo "<center style = 'font-family:calibri;'>Invalid file no uploaded file</center>";
								
								     }//dito natapos yung validation pag empty ang file ng image


//image ditto





}//end of isset

?>


<?php
include_once( 'source/dbconnect.php' );
class AdminAdapter {
	public $link;
	
	function __construct() 
	{

		$db_connection = new FoodNutrientsAnalyzer();
		$this->link = $db_connection->connect();

		return $this->link;

	}
	function saveNutrients($tempwater, $tempenergy, $tempprotein, $tempfat, $tempcarbohydrate, $tempcrudefiber, $tempash, $tempcalcium, $tempphosphorus, $tempiron, $tempretinol, $tempbcarotene, $tempvita, $tempthiamine, $tempriboflavin, $tempniacin, $tempascorbicacid, $tempimage, $tempdate, $tempnutrientsid, $tempcategory) {
	
	 $query = $this->link->prepare("INSERT INTO nutrient (id, water, energy,protein, 
	 fat, carbohydrate, crudefiber, ash, calcium, phosphorus, iron, retinol, bcarotene, 
	 vita, thiamine, riboflavin, niacin, ascorbicacid, image, date, nutrientsId, category) 
	 	VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	 $values = array(NULL, $tempwater, $tempenergy, $tempprotein, $tempfat, $tempcarbohydrate, $tempcrudefiber, $tempash, $tempcalcium, $tempphosphorus, $tempiron, $tempretinol, $tempbcarotene, $tempvita, $tempthiamine, $tempriboflavin, $tempniacin, $tempascorbicacid, $tempimage, $tempdate, $tempnutrientsid, $tempcategory);
	 $query->execute($values);
	 $counts = $query->rowCount();

	 return $tempimage;

	}
	
	function insertDataDb($tempper, $tempamount, $tempname, $tempwater, $tempenergy, $tempprotein, $tempfat, $tempcarbohydrate, $tempcrudefiber, $tempash, $tempcalcium, $tempphosphorus, $tempiron, $tempretinol, $tempbcarotene, $tempvita, $tempthiamine, $tempriboflavin, $tempniacin, $tempascorbicacid, $location, $tempdate, $tempnutrientsid, $tempcategory) {
	
	FoodNutrientsAnalyzer::oldDb();
	//$tempwater==1; ginawa kong sample para sa pag upload ng 
	
	mysql_query("INSERT INTO nutrient (id, amoutPer, amount, foodName, water, energy,protein, 
	 fat, carbohydrate, crudefiber, ash, calcium, phosphorus, iron, retinol, bcarotene, 
	 vita, thiamine, riboflavin, niacin, ascorbicacid, image, date, nutrientsId, category)
                VALUES (NULL, '$tempper', '$tempamount', '$tempname', '$tempwater', '$tempenergy', '$tempprotein', '$tempfat', '$tempcarbohydrate', 
				'$tempcrudefiber', '$tempash', '$tempcalcium', '$tempphosphorus', '$tempiron', 
				'$tempretinol', '$tempbcarotene', '$tempvita', '$tempthiamine', '$tempriboflavin', 
				'$tempniacin', '$tempascorbicacid', '$location', '$tempdate', '$tempnutrientsid', '$tempcategory')");
			
			
			$add = 12.34 + 12.23; 
			echo "success ".$add;
			
			header('Location: add-food.php');
			
			
	
	}
	
	function setCategoryId ($category) {//start of set category id
	
	if($category=='Breakfast'){
		$category = 1;
	return $category;
	}
	elseif($category=='Lunch'){
		$category = 2;
	return $category;
	}elseif($category=='Dinner'){
		$category = 3;
	return $category;
	}
										}//end o the set category id
										
	function imageSet () {
	
	
	
	}
	function getAllUsers () {
	FoodNutrientsAnalyzer::oldDb();
				$result = mysql_query("SELECT * FROM user");
				while($row = mysql_fetch_array($result))
				{ 
				echo "<tr>"; 
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['middleName']."</td>";
				echo "<td>".$row['lastName']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['emailAddress']."</td>";
				echo "<td>".$row['mobile']."</td>";
				echo "<td>".$row['udate']."</td>";
				echo "<td>".$row['udate']."</td>";
				//echo "<br/>";
				echo "</tr>";
				
				
				
				}
	
	
	
	}//end of get users all
 
	function getAllFood () {
	
	FoodNutrientsAnalyzer::oldDb();
	
				$result = mysql_query("SELECT * FROM nutrient");
				while($row = mysql_fetch_array($result))
				{ 
				echo "<tr>"; 
				echo "<td><img src=".$row['image']." width=100 height=70 /></td>";
				//echo "<td>".$row['category']."</td>";
				
				echo "<td>".$row['foodName']."</td>";
				
				if ($row['category'] == 1) 	
				{
				
							echo "<td>Breakfast</td>";
				
				}
				else if ($row['category'] == 2) {
						
							echo "<td>Lunch</td>";
						  }
				else if ($row['category'] == 3) {
				
							echo "<td>Dinner</td>";
				
						   }				
				echo "<td>".$row['date']."</td>";
				echo "<input type = hidden name = foodId class = form-control value =".$row['id']." />";
				echo "<td><button type=submit name=edit class=btn btn-primary>Edit</button>&nbsp;<button type=submit name=delete class=btn btn-warning btn-circle>Delete</button></td>";
			
				
				echo "</tr>";
				}
					
						   }//end of the function getAllFood
						   
			function deleteFood ($del)  {
							
							FoodNutrientsAnalyzer::oldDb();
					mysql_query("DELETE FROM nutrient WHERE id='$del'");//delete all from status
									
									header('Location:index.php');
									
									}//end of delete food
									
			function editFood ()    {
			
							FoodNutrientsAnalyzer::oldDb();
			
			
									}//end of edit food
			function AddArticle ($img, $title, $description) 
			{
			
	$query = $this->link->prepare("INSERT INTO article (id, image, title, description) 
	 	VALUES (?,?,?,?)");

	 $values = array(NULL, $img, $title, $description);
	 $query->execute($values);
	 $counts = $query->rowCount();

	 //return $tempimage;
			
			}//end of add article

		function deleteMessage ($del) {
		
			FoodNutrientsAnalyzer::oldDb();
					mysql_query("DELETE FROM message WHERE id='$del'");//delete all from status
									
					header('Location:message.php');
		
		
		}
			
			

	}//end of the class admin adapter

?>