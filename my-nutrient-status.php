<?php
session_start();

if(isset($_SESSION['user'])){

$user = $_SESSION['user'];


}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Nutrients Analyser</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
	
	
	<!--carousel source start-->
	
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/animate.css/animate.css">
        <link rel="stylesheet" href="css/nrc.css">
    

	<!--carousel source end-->
	
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body style="background-image:url(assets/img/bg/bg_1.png)">
    <!--  wrapper -->
    <div id="wrapper" style="background-image:url(assets/img/bg/bg_1.png)">
        <!-- navbar top -->
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar" style="background-image:url(assets/img/foodHeader.jpg)">
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
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','150','height','160','src','assets/img/flash','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','assets/img/flash' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="150" height="160">
                     <param name="movie" value="assets/img/flash.swf">
                     <param name="quality" value="high">
                     <embed src="assets/img/flash.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="150" height="160"></embed>
                  </object></noscript>
                </a>            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"  data-toggle="modal" data-target="#profile"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a a href="#"  data-toggle="modal" data-target="#account"><i class="fa fa-gear fa-fw"></i>Edit Account</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->
            <br>
            <br>
            <br>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="assets/img/logo.png" alt="" />
          
        </nav>
         <br>
        <br>
        <br>
        <br>
        <!-- end navbar top -->

        <!-- navbar side -->
       
        <!-- end navbar side -->

        <!--  page-wrapper -->
        <div  style="background-image:url(assets/img/bg/bg_1.png)">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-fire fa-fw"></i>Analyze-Status</h1>
                </div>
                <!--End Page Header -->
            </div>

               <div class="row">
                <div class="col-lg-12">
                    <!--Timeline -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-fire fa-fw"></i>Status
							
		<button class="btn btn-warning" ahref="#" data-toggle="modal" data-target="#reni">View RENI</button><?php //<button class="btn btn-warning">Save Status</button>?>
		
		<form action="delete.php" method="POST">
		
		<input type="hidden" name="session" value="<?php echo $user; ?>"/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="delete" class="btn btn-warning"  >Clear   LOG</button>
		</form>
                          
						
						</div>

                        <div class="panel-body">
						
						 <table style= "overflow:auto; height:100px; " table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
										  <thead>
										  <tr>
										  <th>Food&nbsp;Id</th>
										  <th>Water</th>
										  <th>energy</th>
										  <th>protein</th>
										  <th>fat</th>
										  <th>carbohydrate</th>
										  <th>crude fiber</th>
										  <th>ash</th>
										  <th>calcium</th>
										  <th>phosphorus</th>
										  <th>iron</th>
										  <th>retinol</th>
										  <th>B - carotene</th>
										  <th>Vit A</th>
										  <th>thiamin</th>
										  <th>riboflavin</th>
										  <th>niacin</th>
										  <th>ascorbic acid</th>
										  
										  </tr>
										  </thead>
										  <tbody>
									<?php
										  include ('analyzer.php');
										  ?>
										  
										
										 <?php $she->getNut($user);
										  
										  $zz = $she->totalDataStatus($user);
										   
										  ?>
										  
										 
										  </tbody>
										  
										  
										  </table> 
										
                                          <p>
										  <?php //$she->deleteData(); ?>
                                            <!--
						
						<table table border="1" class="table table-striped table-bordered table-hover">
						<thead>
						<tr>
						<th></th>
						<th>Water</th>
						<th>Energy</th>
						<th>Protein</th>
						<th>Fat</th>
						<th>Carbohydrate</th>
						<th>Crude Fiber</th>
						<th>Ash</th>
						<th>Calcium</th>
						<th>Phosphorus</th>
						<th>Iron</th>
						<th>Retinol</th>
						<th>B- Carotene</th>
						<th>Vit- A</th>
						<th>Thiamin</th>
						<th>Riboflavin</th>
						<th>Niacin</th>
						<th>Ascorbic Acid</th>
						
						</tr>
						</thead>
						<tbody>
						
                           <?php
						   
						         //$zz = $she->totalData();
								 //echo " Total data came from DB  ".$zz."  hahahaha<br>";
								
								// delete temporary data from the status
							     
						   
						   ?>
						  </tbody>
						  </table>
                          -->
                                          </p>
                                          <ul>
                                            <li>Percent daily values are based  on a 2,000 calorie diet. Your daily values may be higher or lower depending on  your calorie needs.  </li>
                                          </ul>
                                          <p>Signs and Symbols:<br>
                                            g = gram<br>
                                            mg = milligram<br>
                                            µg = microgram<br>
                                            kcal = kilo calorie<br>
                             				0 = zero, the amount present is below the  detection limit of the method of analyses used. Value imputed for food  component not analysed, but known to be present in negligible amount.<br>

                                          <p>
                                            
                                            
                                            
                                            <!--End Timeline -->
                                                            </p>
                        </div>
            </div>


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
	
	
	
	<!-- modal content for ricecream -->
			<div class="modal fade" id="iceCream" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">Icecream</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/icecream.jpg">

                                            <p> content ng icecream blah blah blah</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<!-- modal content -->

                            <!-- modal content for ricecream -->
            <div class="modal fade" id="egg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">egg</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/eggPlate.jpg">

                                            <p> content ng egg blah blah blah</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							
							  <!-- modal content for reni -->
            <div class="modal fade" id="reni" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">Recommended&nbsp;Energy&nbsp;and&nbsp;Nutrient&nbsp;Intakes&nbsp;for&nbsp;Filipinos,&nbsp;RENI</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          <table table border="1" class="table table-striped table-bordered table-hover"1>
										  <thead>
										  <tr>
										  <th>Polulation Group</th>
										  <th>Weight (kg)</th>
										  <th>Energy (kcal)</th>
										  <th>Protein (g)</th>
										  <th>Vitamin A (mg)</th>
										  <th>Vitamin C (mg)</th>
										  <th>Thiamin (mg)</th>
										  <th>Riboflavin (mg)</th>
										  <th>Niacin (mg)</th>
										  <th>Folate (&mu;g DFE)</th>
										  <th>Calcium (mg)</th>
										  <th>Iron (mg)</th>
										  <th>Iodine (&mu;g)</th>
										  </tr>
										  </thead>
										  
										  
										  <tbody>
										   <?php
										  $she->getReni();
										  ?>
										  </tbody>
                                          
										  </table>
                                         

                                        

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							
                            <!-- modal content for ricecream -->
            <div class="modal fade" id="wine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">wine</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/icecream.jpg">

                                            <p> content ng wine blah blah blah</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->

                                              <!-- modal content for ricecream -->
            <div class="modal fade" id="cape" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">coffe</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/cape.jpg">

                                            <p> content ng cape blah blah blah</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->

                            <div class="modal fade" id="juice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> content ng juice blah blah blah</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
	
	 <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
	
	<hr>

</body>

</html>
