
<?php
//error_reporting(0);
include 'inc/dbconnect.php';

$she = new Analyzer();//create a  new construtor for analyzer class

if(isset($_POST['submit']))
{
$uid = $_POST['user'];
$a="";

foreach ($_POST['check'] as $value)//loop ko yung laman nd id 
  {
	$a++;
	$inputAmount = $_POST['amount'][$a];//data came from input box
	$getId = $_POST['check'][$a];
	
	
	
  if(!empty($inputAmount)){
  $u++;//para makuha ko ang loop ng input
  $t = $she->getSpecicFoodAndCompute($inputAmount,$getId,$u,$uid);//get the user input data , id of food
	//echo $t; //for testing purposes lang to hehehe
		$she->getTempId($getId,$inputAmount);
	
	//echo "maylaman";	 

  

 
  }else {
  
  echo "walang laman";
  }//end of !empty
	
  
  }//end of foreach loop
  
 // header('Location:breakfast-status.php');
  
//$zz = $she->totalData();
header('Location: breakfast-status.php');
	echo " Total data came from DB  ".$zz."  hahahaha<br>";
//$she->deleteData();
}//end of isset

$jenny = $she->getFoodId();

Analyzer::getFoodName($jenny);
//start of class
class Analyzer {
		
		public $link;
		public $tempId; // temporary id
		public $tempamount;
		public $tempwater;
		public $tempenergy;
		public $tempprotein;
		public $tempfat;
		public $tempcarbohydrate;
		public $tempcrudefiber;
		public $tempash;
		public $tempcalcium;
		public $tempphosporus;
		public $iron;
		public $tempretinol;
		public $tempbcarotene;
		public $tempvita;
		public $tempthiamine;
		public $tempriboflavin;
		public $tempniacin;
		public $tempascorbicacid;
		public $tempTotalValue;
		
		function __construct() 
		{

		$db_connection = new FoodNutrientsAnalyzer();
		$this->link = $db_connection->connect();

		return $this->link;

		}

		function getAllBreakfast () 
		{
		FoodNutrientsAnalyzer::oldDb();
		$a=1;
		$c=1;
		$aa="";
		$cc="";
		$getId="";
				$result = mysql_query("SELECT * FROM nutrient WHERE category='1'");
				
				while($row = mysql_fetch_array($result))
				{ 
				$getId = $row['id'];
				echo "<tr>";
				$aa = $a++;
				$cc = $c++;
				
				echo "<td><img src=admin/".$row['image']." width=100 height=70 /></td>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['amoutPer']."</td>";
				echo "<td>".$row['amount']." g</td>";
				echo "<td><i><font color=green><b>".$row['foodName']."</b></font></i></td>";
				//echo "<td><input type=text name=amount[".$aa."]  onkeypress=return isNumberKey(event) class=form-control></td>";
				
				
				echo "<td><select name=amount[".$aa."] id=application class=form-control>";
				
				
                                                    echo "<option value=>-- Chose Quantity --</option>";
                                                    echo "<option value=1 cup>1</option>";
                                                    echo "<option value=2 cup>2</option>";
                                                    echo "<option value=3 cup>3</option>";
                                                    echo "<option value=4 cup>4</option>";
                                                    echo "<option value=5 cup>5</option>";
                                                    echo "<option value=6 cup>6</option>";
                                                    echo "<option value=7 cup>7</option>";
                                                    echo "<option value=8 cup>8</option>";
                                                    echo "<option value=9 cup>9</option>";
                                                    echo "<option value=10 cup>10</option>";
                                                   
                                                
                                     echo   "</select></td>";
				
				
				
				
				//echo "<td><input type=text name=amount".$aa."  ></td>";
				//echo "<td><input type=checkbox name=check".$cc." value=".$getId." /></td>";
				echo "<input type=hidden name=check[".$cc."] value=".$getId." />";
				
				echo "</tr>";
				$this->tempId = $getId;
				
				
					
					//echo $_POST["check".$aa.""];
					//echo $_POST["amount".$cc.""];	
				
				}//end while
		
		}//end of getAllBreakfast
		
		
		function getDataIntoArray () 
		{
		
		
		
		}
		
		//note kailangan muna lagyan ng value ang $tempId sa baba na galing sa form.
		function getSpecicFoodAndCompute ($inputAmount,$getId,$a,$uid) 
		{
		
		$iddaw = $uid;
		
		//$uu = $_SESSION['user'];
		//$amount="";
		FoodNutrientsAnalyzer::oldDb();
		$water="";
		$energy="";
		$protein="";
		$fat="";
		$carbohydrate="";
		$crudefiber="";
		$ash="";
		$calcium="";
		$phosphorus="";
		$iron="";
		$retinol="";
		$bcarotene="";
		$vita="";
		$thiamine="";
		$riboflavin="";
		$niacin="";
		$ascorbicacid="";
		
		$tempaa=$inputAmount;
				$result = mysql_query("SELECT * FROM nutrient WHERE id='$getId'");//dapat nalagay ang id ng pinag click na category
				while($row = mysql_fetch_array($result))
				{
				$foodId = $row['id'];// get the id of food
				
				$amount = $tempaa;
				$water = $water + ($row['water']*$amount);
				$energy = $energy + ($row['energy']*$amount);
				$protein = $protein + ($row['protein']*$amount);
				$fat = $fat + ($row['fat']*$amount);
				$carbohydrate = $carbohydrate + ($row['carbohydrate']*$amount);
				$crudefiber = $crudefiber + ($row['crudefiber']*$amount);
				$ash = $ash + ($row['ash']*$amount);
				$calcium = $calcium + ($row['calcium']*$amount);
				$phosphorus = $phosphorus + ($row['phosphorus']*$amount);
				$iron = $iron + ($row['iron']*$amount);
				$retinol = $retinol + ($row['retinol']*$amount);
				$bcarotene = $bcarotene + ($row['bcarotene']*$amount);
				$vita = $vita + ($row['vita']*$amount);
				$thiamine = $thiamine + ($row['thiamine']*$amount);
				$riboflavin = $riboflavin + ($row['riboflavin']*$amount);
				$niacin = $niacin + ($row['niacin']*$amount);
				$ascorbicacid = $ascorbicacid + ($row['ascorbicacid']*$amount);
				
				//for testing purpose
				$xy++;
				
				$v=$a;
				
				
				 //Analyzer::totalData($water);//pass the data and calculate
				}//end while
				
				
				$sample=$water;
				
						$this->tempamount = $amount; //total amount yung kinuha ko dito para sa future dosage na na consume nya.
						$this->tempwater = $water;
						$this->tempenergy = $energy;
						$this->tempprotein = $protein;
						$this->tempfat = $fat;
						$this->tempcarbohydrate = $carbohydrate;
						$this->tempcrudefiber = $crudefiber;
						$this->tempash = $ash;
						$this->tempcalcium = $calcium;
						$this->tempphosporus = $phosphorus;
						$this->iron = $iron;
						$this->tempretinol = $retinol;
						$this->tempbcarotene = $bcarotene;
						$this->tempvita = $vita;
						$this->tempthiamine = $thiamine;
						$this->tempriboflavin = $riboflavin;
						$this->tempniacin = $niacin;
						$this->tempascorbicacid = $ascorbicacid;
			
			
	
					$totalServingss = $water + $totalServingss;
echo "amount  ng input ng food ".$inputAmount."<br>"."id  of food ".$getId."<br>"."increment data came from outside function ".$v." sample water in total ".$water. "<br>";//for testing purposes lang to
		 echo "<br>";
		 

		 
		Analyzer::analyzeFood($getId,$water,$energy, $protein, $fat, $carbohydrate, $crudefiber, $ash, $calcium, $phosphorus, $iron, $retinol, $bcarotene, $vita, $thiamine, $riboflavin, $niacin, $ascorbicacid, $iddaw);
		Analyzer::analyzeFoodSave($getId,$water,$energy, $protein, $fat, $carbohydrate, $crudefiber, $ash, $calcium, $phosphorus, $iron, $retinol, $bcarotene, $vita, $thiamine, $riboflavin, $niacin, $ascorbicacid, $iddaw);
		 $this->tempTotal=$tempTotal;
				
		}//end of getAllSpecipicFood
		
		function analyzeFood ($getId,$water,$energy, $protein, $fat, $carbohydrate, $crudefiber, $ash, $calcium, $phosphorus, $iron, $retinol, $bcarotene, $vita, $thiamine, $riboflavin, $niacin, $ascorbicacid, $iddaw) //dito yung pag pasok sa dtabase para sa pag compute
		{
		
		
	$query = $this->link->prepare("INSERT INTO status (id, fid, water, energy, protein, fat, carbohydrate, crudefiber, ash, calcium, phosphorus, iron, retinol, bcarotene, vita, thiamine, riboflavin, niacin, ascorbicacid, uid) 
	 	VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	 $values = array(NULL, $getId, $water, $energy, $protein, $fat, $carbohydrate, $crudefiber, $ash, $calcium, $phosphorus, $iron, $retinol, $bcarotene, $vita, $thiamine, $riboflavin, $niacin, $ascorbicacid, $iddaw);
	 $query->execute($values);
	 $counts = $query->rowCount();

	 return $counts;
		
		
		
		}//end of analyzeFood
		function totalData () 
		{
		$sumwater="";
		$sumenergy="";
		$sumprotein="";
		$sumfat="";
		$sumcarbohydrate="";
		$sumcrudefiber="";
		$sumash="";
		$sumcalcium="";
		$sumphosphorus="";
		$sumiron="";
		$sumretinol="";
		$sumbcarotene="";
		$sumvita="";
		$sumthiamine="";
		$sumriboflavin="";
		$sumniacin="";
		$sumascorbicacid="";
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM status");
		while($row = mysql_fetch_array($result))
		{
		
		$sumwater+=$row['water'];
		$sumenergy+=$row['energy'];
		$sumprotein+=$row['protein'];
		$sumfat+=$row['fat'];
		$sumcarbohydrate+=$row['carbohydrate'];
		$sumcrudefiber+=$row['crudefiber'];
		$sumash+=$row['ash'];
		$sumcalcium+=$row['calcium'];
		$sumphosphorus+=$row['phosphorus'];
		$sumiron+=$row['iron'];
		$sumretinol+=$row['retinol'];
		$sumbcarotene+=$row['bcarotene'];
		$sumvita+=$row['vita'];
		$sumthiamine+=$row['thiamine'];
		$sumriboflavin+=$row['riboflavin'];
		$sumniacin+=$row['niacin'];
		$sumascorbicacid+=$row['ascorbicacid'];
		
		
		}
		echo "<tr>";
		echo "<td><b>Total</b></td>";
		echo "<td><b>".$sumwater." g </b></td>";
		
		echo "<td><b>".$sumenergy." kcal</b></td>";
		
		echo "<td><b>".$sumprotein." g</b></td>";
		
		echo "<td><b>".$sumfat." g</b></td>";
		
		echo "<td><b>".$sumcarbohydrate." g</b></td>";
		
		echo "<td><b>".$sumcrudefiber." g</b></td>";
		
		echo "<td><b>".$sumash." g</b></td>";
		
		echo "<td><b>".$sumcalcium."%</b></td>";
		
		echo "<td><b>".$sumphosphorus." %</b></td>";
		
		echo "<td><b>".$sumiron."%</b></td>";
		
		echo "<td><b>".$sumretinol." &mu;g</b></td>";
		
		echo "<td><b>".$sumbcarotene."&mu;g</b></td>";
		
		echo "<td> <b>".$sumvita."%</b></td>";
		
		echo "<td><b>".$sumthiamine." %</b></td>";
	
		echo "<td> <b>".$sumriboflavin." %</b></td>";
		
		echo "<td> <b>".$sumniacin." %</b></td>";
		
		echo "<td><b>".$sumascorbicacid." %</b></td>";
		echo "</tr>";
		
		
		}//end of function totalData
		
		
		function deleteData () 
		{
		//start of deleteData
		FoodNutrientsAnalyzer::oldDb();
		mysql_query("DELETE FROM status WHERE sid='0'");//delete all from status
		
		
		}
		function getAllArticleData () 
		{
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM article");//dapat nalagay ang id ng pinag click na category
				while($row = mysql_fetch_array($result))
				{
				
				echo " <ul class=>";
                               echo" <li>";
                                  echo"  <div class=>";
                                     echo "   <i class=></i>";
                                 echo "   </div>";
                                    echo "<div class=>";
                                      echo "  <div class=>";
                                        echo "    <h4 class=timeline-title>".$row['title']."</h4>";
                                        echo "<table>";
										echo "<tbody>";
										echo "<tr>";
										echo "<td>";
										echo "  <p>";
                                       
                                        echo "<img src=admin/".$row['image']." width=100% height=200 />&nbsp; &nbsp;";
										echo "   </p>";
										echo "</td>";
                                      echo "  </div>";
									  echo "<td>";
                                       echo " <div class=timeline-body>";
									   
                                           echo " <p><i> &nbsp; &nbsp; &nbsp;"     .$row['description']."</i></p>";
										   echo "<br>";
									   echo "<br>";
									   echo "<br>";
									   echo "<br>";
									   echo "<br>";
									   echo "<br>";
									   echo "<br>";
									   echo "<br>";
									   echo "<br>";
										   echo "</td>";
										   echo "</tr>";
										   echo "</tbody>";
										   echo "</table>";
										 
										   
									 echo "<hr>";
									  echo" </div>";
										
										
                                   echo " </div>";
									
									
                              echo  " </li>"; 
                            echo "</ul>";
				
				}
		
		}
		//end of deleteData

		function getReni () 
		{
		
		$reniId = Analyzer::getUserAge();
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM reni WHERE id='$reniId'");
		$row = mysql_fetch_array($result);
		echo "<tr>";
		echo "<td>".$row['populationGroup']."</td>";
		echo "<td>".$row['weight']."</td>";
		echo "<td>".$row['energy']."</td>";
		echo "<td>".$row['protein']."</td>";
		echo "<td>".$row['vitaminA']."</td>";
		echo "<td>".$row['vitaminC']."</td>";
		echo "<td>".$row['thiamin']."</td>";
		echo "<td>".$row['riboflavin']."</td>";
		echo "<td>".$row['niacin']."</td>";
		echo "<td>".$row['folate']."</td>";
		echo "<td>".$row['calcium']."</td>";
		echo "<td>".$row['iron']."</td>";
		echo "<td>".$row['iodine']."</td>";
		echo "</tr>";
		
		//echo $row['populationGroup'];
			
		}//get reni
		
		function getUserAge() 
		{
		session_start();
		$userId = $_SESSION['user'];
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM user WHERE username='$userId'");
		$row = mysql_fetch_array($result);
		$tempagee = $row['age'];
		return $tempagee;
		
		}//end of user age
		
		function getAllLunch () 
		{
		FoodNutrientsAnalyzer::oldDb();
		$a=1;
		$c=1;
		$aa="";
		$cc="";
		$getId="";
				$result = mysql_query("SELECT * FROM nutrient WHERE category='2'");
				
				while($row = mysql_fetch_array($result))
				{ 
				$getId = $row['id'];
				echo "<tr>";
				$aa = $a++;
				$cc = $c++;
				
				echo "<td><img src=admin/".$row['image']." width=100 height=70 /></td>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['amoutPer']."</td>";
				echo "<td>".$row['amount']." g</td>";
				echo "<td><i><font color=green><b>".$row['foodName']."</b></font></i></td>";
				//echo "<td><input type=text name=amount[".$aa."]  onkeypress=return isNumberKey(event) class=form-control></td>";
				
				
				echo "<td><select name=amount[".$aa."] id=application class=form-control>";
				
				
                                                    echo "<option value=>-- Chose Quantity --</option>";
                                                    echo "<option value=1 cup>1</option>";
                                                    echo "<option value=2 cup>2</option>";
                                                    echo "<option value=3 cup>3</option>";
                                                    echo "<option value=4 cup>4</option>";
                                                    echo "<option value=5 cup>5</option>";
                                                    echo "<option value=6 cup>6</option>";
                                                    echo "<option value=7 cup>7</option>";
                                                    echo "<option value=8 cup>8</option>";
                                                    echo "<option value=9 cup>9</option>";
                                                    echo "<option value=10 cup>10</option>";
                                                   
                                                
                                     echo   "</select></td>";
				
				
				//echo "<td><input type=text name=amount".$aa."  ></td>";
				//echo "<td><input type=checkbox name=check".$cc." value=".$getId." /></td>";
				echo "<input type=hidden name=check[".$cc."] value=".$getId." />";
				
				echo "</tr>";
				$this->tempId = $getId;
				
				
					
					//echo $_POST["check".$aa.""];
					//echo $_POST["amount".$cc.""];	
				
				}//end while
		
		
		
		
		}// end of function get lunch
		
		
		
		
		function getAllDinner () 
		{
		
		FoodNutrientsAnalyzer::oldDb();
		$a=1;
		$c=1;
		$aa="";
		$cc="";
		$getId="";
				$result = mysql_query("SELECT * FROM nutrient WHERE category='2'");
				
				while($row = mysql_fetch_array($result))
				{ 
				$getId = $row['id'];
				echo "<tr>";
				$aa = $a++;
				$cc = $c++;
				
				echo "<td><img src=admin/".$row['image']." width=100 height=70 /></td>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['amoutPer']."</td>";
				echo "<td>".$row['amount']." g</td>";
				echo "<td><i><font color=green><b>".$row['foodName']."</b></font></i></td>";
				//echo "<td><input type=text name=amount[".$aa."]  onkeypress=return isNumberKey(event) class=form-control></td>";
				
				
				echo "<td><select name=amount[".$aa."] id=application class=form-control>";
				
				
                                                    echo "<option value=>-- Chose Quantity --</option>";
                                                    echo "<option value=1 cup>1</option>";
                                                    echo "<option value=2 cup>2</option>";
                                                    echo "<option value=3 cup>3</option>";
                                                    echo "<option value=4 cup>4</option>";
                                                    echo "<option value=5 cup>5</option>";
                                                    echo "<option value=6 cup>6</option>";
                                                    echo "<option value=7 cup>7</option>";
                                                    echo "<option value=8 cup>8</option>";
                                                    echo "<option value=9 cup>9</option>";
                                                    echo "<option value=10 cup>10</option>";
                                                   
                                                
                                     echo   "</select></td>";
				
				
				//echo "<td><input type=text name=amount".$aa."  ></td>";
				//echo "<td><input type=checkbox name=check".$cc." value=".$getId." /></td>";
				echo "<input type=hidden name=check[".$cc."] value=".$getId." />";
				
				echo "</tr>";
				$this->tempId = $getId;
				
				
					
					//echo $_POST["check".$aa.""];
					//echo $_POST["amount".$cc.""];	
				
				}//end while
		
		
		
		}//end of function
		
		
		function getB() 
		{
		
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM status");
		while($row = mysql_fetch_array($result))
				{ 
				
				echo "<tr>";
				echo "<td>".$row['fid']."</td>";
				echo "<td>".$row['water']."</td>";
				echo "<td>".$row['energy']."</td>";
				echo "<td>".$row['protein']."</td>";
				echo "<td>".$row['fat']."</td>";
				echo "<td>".$row['carbohydrate']."</td>";
				echo "<td>".$row['crudefiber']."</td>";
				echo "<td>".$row['ash']."</td>";
				echo "<td>".$row['calcium']."</td>";
				echo "<td>".$row['phosphorus']."</td>";
				echo "<td>".$row['iron']."</td>";
				echo "<td>".$row['retinol']."</td>";
				echo "<td>".$row['bcarotene']."</td>";
				echo "<td>".$row['vita']."</td>";
				echo "<td>".$row['thiamine']."</td>";
				echo "<td>".$row['riboflavin']."</td>";
				echo "<td>".$row['niacin']."</td>";
				echo "<td>".$row['ascorbicacid']."</td>";
				echo "</tr>";
				
				}//end while
		
		
		}//end of function
		
		function getFoodId() 
		{
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM status");
				
				while($row = mysql_fetch_array($result))
				{ 
				
				$jenny =  $row['fid'];
				
				}
		
		}
		
		
		
		function getFoodName($jenny){
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM nutrient WHERE id='$jenny'");
				
				while($row = mysql_fetch_array($result))
				{ 
				
				echo $row['foodName'];
				
				}
		
		}//end of funtion
		
		function getTempId ($id,$amount) 
		{
		FoodNutrientsAnalyzer::oldDb();
		mysql_query("INSERT INTO stored (id, amount, foodid)
		VALUES (NULL, '$amount', '$id')");
		
		
		
		}//end of the function
		
		
		function getUserIdFromStatus ()
		{
		session_start();
		
		$u = $_POST['user'];
		
		
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM user WHERE username='$u'");
				
				while($row = mysql_fetch_array($result))
				{ 
				
				 $x = $row['id'];
				
				
				
				}
				
				return $x;
		
		}//end of the function
		
		function analyzeFoodSave($getId,$water,$energy, $protein, $fat, $carbohydrate, $crudefiber, $ash, $calcium, $phosphorus, $iron, $retinol, $bcarotene, $vita, $thiamine, $riboflavin, $niacin, $ascorbicacid, $iddaw) //dito yung pag pasok sa dtabase para sa pag compute
		{
		
			FoodNutrientsAnalyzer::oldDb();
		
	mysql_query("INSERT INTO userstatus (id, fid, water, energy, protein, fat, carbohydrate, crudefiber, ash, calcium, phosphorus, iron, retinol, bcarotene, vita, thiamine, riboflavin, niacin, ascorbicacid, uid) 
	 	VALUES (NULL, '$getId', '$water', '$energy', '$protein', '$fat', '$carbohydrate', '$crudefiber', '$ash', '$calcium', '$phosphorus', '$iron', '$retinol', '$bcarotene', '$vita', '$thiamine', '$riboflavin', '$niacin', '$ascorbicacid', '$iddaw')");

		
		
		
		
		}//end of user stats
		
		
		function getNut($user) 
		{
		
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM userstatus WHERE uid='$user'");
		while($row = mysql_fetch_array($result))
				{ 
				
				echo "<tr>";
				echo "<td>".$row['fid']."</td>";
				echo "<td>".$row['water']."</td>";
				echo "<td>".$row['energy']."</td>";
				echo "<td>".$row['protein']."</td>";
				echo "<td>".$row['fat']."</td>";
				echo "<td>".$row['carbohydrate']."</td>";
				echo "<td>".$row['crudefiber']."</td>";
				echo "<td>".$row['ash']."</td>";
				echo "<td>".$row['calcium']."</td>";
				echo "<td>".$row['phosphorus']."</td>";
				echo "<td>".$row['iron']."</td>";
				echo "<td>".$row['retinol']."</td>";
				echo "<td>".$row['bcarotene']."</td>";
				echo "<td>".$row['vita']."</td>";
				echo "<td>".$row['thiamine']."</td>";
				echo "<td>".$row['riboflavin']."</td>";
				echo "<td>".$row['niacin']."</td>";
				echo "<td>".$row['ascorbicacid']."</td>";
				echo "</tr>";
				
				}//end while
		
		
		}//end of function
		
		
		function totalDataStatus ($user) 
		{
		FoodNutrientsAnalyzer::oldDb();
		$result = mysql_query("SELECT * FROM userstatus WHERE uid='$user'");
		while($row = mysql_fetch_array($result))
		{
		
		$sumwater+=$row['water'];
		$sumenergy+=$row['energy'];
		$sumprotein+=$row['protein'];
		$sumfat+=$row['fat'];
		$sumcarbohydrate+=$row['carbohydrate'];
		$sumcrudefiber+=$row['crudefiber'];
		$sumash+=$row['ash'];
		$sumcalcium+=$row['calcium'];
		$sumphosphorus+=$row['phosphorus'];
		$sumiron+=$row['iron'];
		$sumretinol+=$row['retinol'];
		$sumbcarotene+=$row['bcarotene'];
		$sumvita+=$row['vita'];
		$sumthiamine+=$row['thiamine'];
		$sumriboflavin+=$row['riboflavin'];
		$sumniacin+=$row['niacin'];
		$sumascorbicacid+=$row['ascorbicacid'];
		
		
		}
		echo "<tr>";
		echo "<td><b>Total</b></td>";
		echo "<td><b>".$sumwater." g </b></td>";
		
		echo "<td><b>".$sumenergy." kcal</b></td>";
		
		echo "<td><b>".$sumprotein." g</b></td>";
		
		echo "<td><b>".$sumfat." g</b></td>";
		
		echo "<td><b>".$sumcarbohydrate." g</b></td>";
		
		echo "<td><b>".$sumcrudefiber." g</b></td>";
		
		echo "<td><b>".$sumash." g</b></td>";
		
		echo "<td><b>".$sumcalcium."%</b></td>";
		
		echo "<td><b>".$sumphosphorus." %</b></td>";
		
		echo "<td><b>".$sumiron."%</b></td>";
		
		echo "<td><b>".$sumretinol." &mu;g</b></td>";
		
		echo "<td><b>".$sumbcarotene."&mu;g</b></td>";
		
		echo "<td> <b>".$sumvita."%</b></td>";
		
		echo "<td><b>".$sumthiamine." %</b></td>";
	
		echo "<td> <b>".$sumriboflavin." %</b></td>";
		
		echo "<td> <b>".$sumniacin." %</b></td>";
		
		echo "<td><b>".$sumascorbicacid." %</b></td>";
		echo "</tr>";
		
		
		}//end of function totalData
		
		
		
		



}//end of the class 													ANALYZER

// function analyzeFood ($getId,$water) 
		// {
		
		
	// $query = $this->link->prepare("INSERT INTO status (id, fid, water) 
	 	// VALUES (?,?,?)");

	 // $values = array(NULL, $getId, $water);
	 // $query->execute($values);
	 // $counts = $query->rowCount();

	 // return $counts;
		
		
		
		// }
//note kaya ko pinag database ang status ay para ma hold ang value in input

?>