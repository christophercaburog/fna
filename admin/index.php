<?php
session_start();

if(isset($_SESSION['admin'])){

$admin = $_SESSION['admin'];

}else{


header('Location:../home.php');

}

?>
<html>

<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Nutrients Analyser</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
	
	<!--ito yung script sa tables -->
	 <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	
	<!-- dito yung script ng image pra sa pag upload gamit ang ajax-->
	
	
	
	<script language="JavaScript" type="text/JavaScript">
function makeRequestObject(){
var xmlhttp=false; 
try {
xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');
} catch (e) {
try {
xmlhttp = new ActiveXObject('Microsoft.XMLHTTP'); 
} catch (E) {
xmlhttp = false;
}
}
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
xmlhttp = new XMLHttpRequest(); 
}
return xmlhttp;
}

function showdata()
{
		var xmlhttp=makeRequestObject();
		var user=document.getElementById('user_name').value;// temporary store the value in user variable
		var email=document.getElementById('email_id').value;//temporary store the value in email variable
		var file = 'ajaxaccessdata.php?usernme='; //s
		xmlhttp.open('GET', file + user+'&emailid='+email, true); 
		xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status == 200) { 
		var content = xmlhttp.responseText; 
		if( content ){ 
			document.getElementById('info').innerHTML = content; 
						}
			}
}
xmlhttp.send(null) 
}

</script>
	
	
	
	
	
	
	<!-- dito yung script ng image pra sa pag upload gamit ang ajax-->
	<!--carousel source start-->
	
	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/animate.css/animate.css">
        <link rel="stylesheet" href="../css/nrc.css">
		
	<script type="text/javascript" src="source/jquery-1.9.1.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#show").click(function() {
			$("#edit").modal("show");
			$.post('function.php?getNutrients', "nutId"+ch_id, function(data) {
            $("#tbody").html(data);
            
        });
                
            });
			
			$(".getReq").click(function(e){
        var ch_id = $(this).attr("id");
        $.post('ajax.php?getRequirementSa', "ch_id="+ch_id, function(data) {
            $("#tbody").html(data);
            $("#reqSaModal").modal("show");
        });
        });
    </script>

	<!--carousel source end-->
    <script type="text/javascript">
    $(document).ready(function()
    {
	
		  $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
		//
		
        $("#nutrients").submit(function()
        {
        
        $.post('function.php',$("#nutrients").serialize(), function(data)
            {
        $("#feedback").html(data);
        //clear();
            });
            return false;
        });
        
        function clear(){
                        
                        $("#nutrients :input").each(function()
                                                        {
                                                $(this).val("");
                        
                                                        });
        
                        }
    });
    
    </script>

	<!--dito yung ajax sa pag kua ng data na walang refresh gamit ang get-->
	
	<!--dito natapos ang ajax-->
	
	
	
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
	
	
<script type="text/javascript">
function show_confirm()
{
var r=confirm("Are you sure you want to DELETE?");
if (r==true)
  {
  alert("confirm!");
  }
else
  {
  alert("CANCELED!");
  }
}
</script>
</head>

<body>

    <!--  wrapper -->
    <!--  wrapper -->
    <div id="wrapper" style="background-image:url(../assets/img/bg/bg_1.png)">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar" style="background-image:url(../assets/img/foodHeader.jpg)">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <a  href="home.php">
                  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','150','height','160','src','flash','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','flash' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="150" height="160">
                    <param name="movie" value="flash.swf">
                    <param name="quality" value="high">
                    <embed src="flash.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="150" height="160"></embed>
                  </object></noscript>
                </a>            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->

                <li class="dropdown">
				<br>
				<br>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <?php echo "<font color=white><i><b>".$_SESSION['admin']."</b></i></font>"; ?>&nbsp; <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                       
                        
                     
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->
            <br>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="../assets/img/logo.png" alt="" />
          
        </nav>
         <br>
        <br>
		<br>
		<br>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                       
                        <div class="user-section">
						 <!-- user image section
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
							end user image section-->
                        </div>
                        
                    </li>
					
					   <!-- search section
                    <li class="sidebar-search">
                     
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
						
						
                       
                    </li>
					 end search section-->
                    <li class="selected">
                        <a href="index.php"><i class="fa fa-home fa-fw"></i>  Home</a>
                    </li>
                     <li>
                         <a href="add-food.php" ><i class="fa fa-plus fa-fw"></i> Add Food</a>
                    </li>
					<li>
                         <a href="article.php" ><i class="fa fa-plus fa-fw"></i> Add Article</a>
                    </li>
					<li>
                         <a href="article-table.php" ><i class="fa fa-minus fa-fw"></i> Delete Article</a>
                    </li>
                    <li>
                         <a href="user.php" ><i class="fa fa-user fa-fw"></i>Manage User</a>
                    </li>
					<li>
                         <a href="message.php" ><i class="fa fa-comment fa-fw"></i>Message</a>
                    </li>
                    
					
     
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper" style="background-image:url(../assets/img/bg/bg_1.png)">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Home </h1>
					
					
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Home
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Food Name</th>
                                            <th>Food Type</th>
                                            <th>Date Inserted</th>
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                             
                                        
                                     
				<?php include 'source/dbconnect.php';	
				 FoodNutrientsAnalyzer::oldDb();   
	
				 $result = mysql_query("SELECT * FROM nutrient"); 
				 while($row = mysql_fetch_array($result)) 
				 { ?>
				  
				<tr>
				<form action="function.php" method="POST">
				<td><img src="<?php echo $row['image'];?>" width="100" height="70" /></td>
				 
				
				<td><?php echo $row['foodName'];?></td>
				
				<?php
				switch($row['category']){
				
				case 1:
				echo "<td>Breakfast</td>";
				break;
				case 2:
				echo "<td>Lunch</td>";
				break;
				case 3:
				echo "<td>Dinner</td>";
				default:
				echo "";
				}
				?>
				<?php $_SESSION['idedit'] = $row['id']; ?>	
					
				<td><?php echo $row['date'];?></td>
				<input type ="hidden" name = "foodId" class = "form-control" value ="<?php echo $row['id'];?>" />
				
		<td><button type="submit" name="edit" class="btn btn-primary">Edit</button>&nbsp;<input type="submit" name="delete" class="btn btn-success" onclick="show_confirm()" value="Delete"/></td>
			
				
				</tr>
								</form>			
							<?php }//end while?>		
								
								  
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
                
            </div>
            
         

    </div>
    <!-- end wrapper -->
	                <!-- modal content for ricecream -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">wine</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                        
sadadads
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->

    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
	
	<!--ito ang script para sa validation ng input-->
	<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

</body>

</html>
