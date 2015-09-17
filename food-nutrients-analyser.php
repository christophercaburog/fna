<?php
session_start();
include ('analyzer.php');
$xaxa = new Analyzer();

if(isset($_SESSION['user'])){

	$user = $_SESSION['user'];
	

}
if(!isset($_SESSION['user'])){

header('Location:index.php');

}
if(isset($_SESSION['admin'])){

header('Location:admin/index.php');

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
	
	<script type="text/javascript" src="source/jquery.min.js"></script>
	<script type="text/javascript" src="source/jquery.form.js"></script>	
	<!--carousel source start-->
	
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/animate.css/animate.css">
        <link rel="stylesheet" href="css/nrc.css">
    

	<!--carousel source end-->
			<!--carousel source end-->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
        $("#contact2").submit(function()
        {
        
        $.post('message.php',$("#contact2").serialize(), function(data)
            {
        $("#feedback").html(data);
        //clear();
            });
            return false;
        });
        
        function clear(){
                        
                        $("#contact2 :input").each(function()
                                                        {
                                                $(this).val("");
                        
                                                        });
        
                        }
    });
    
    </script>
	
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body >
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
				<br>
				<br>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <?php echo "<i><font color=yellow>".$user."</font></i>"; ?>&nbsp; <i class="fa fa-user fa-3x"> </i>
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
                            <!--end user image section-->
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
					<a href="food-nutrients-analyser.php"><i class="fa fa-file fa-fw"></i>  FNA</a>
					</li>
					<li >
                        <a href="my-nutrient-status.php"><i class="fa fa-user fa-fw"></i>  My Status</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>  Pinoy Plate<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="region-1.php">Region 1</a>
                            </li>
                            <li>
                                <a href="region-2.php">Region 2</a>
                            </li>
							<li>
                                <a href="region-3.php">Region 3</a>
                            </li>
							<li>
                                <a href="region-4.php">Region 4</a>
                            </li>
							<li>
                                <a href="region-5.php">Region 5</a>
                            </li>
							<li>
                                <a href="region-6.php">Region 6</a>
                            </li>
							<li>
                                <a href="region-7.php">Region 7</a>
                            </li>
							<li>
                                <a href="region-8.php">Region 8</a>
                            </li>
							<li>
                                <a href="region-9.php">Region 9</a>
                            </li>
							<li>
                                <a href="region-10.php">Region 10</a>
                            </li>
							<li>
                                <a href="region-11.php">Region 11</a>
                            </li>
							<li>
                                <a href="region-12.php">Region 12</a>
                            </li>
							<li>
                                <a href="region-13.php">Region 13</a>
                            </li>
							<li>
                                <a href="armm.php">Region ARMM</a>
                            </li>
							<li>
                                <a href="car.php">Region CAR</a>
                            </li>
                        </ul>
                       
                    </li>
					
                     
                    
                     <li>
                        <a href="timeline.html"><i class="fa fa-plus fa-fw"></i>  Health Corner <span class ="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
                                <a href="alcohol.php"><i class="fa fa-plus fa-fw"></i> Alcohol Intake</a>
                            </li>
							<li>
                                <a href="diet.php"><i class="fa fa-plus fa-fw"></i> Balance Diet</a>
                            </li>
							<li>
                                <a href="brush.php"><i class="fa fa-plus fa-fw"></i> Brushing of Teeth</a>
                            </li>
							<li>
                                <a href="exercise.php"><i class="fa fa-plus fa-fw"></i> Exercise</a>
                            </li>
							<li>
                                <a href="hand.php"><i class="fa fa-plus fa-fw"></i> Hand Washing</a>
                            </li>
						</ul>
                    </li>
					<li>
                         <a href="#" data-toggle="modal" data-target="#contact"><i class="fa fa-comment fa-fw"></i> Contact Us</a>
                    </li>
					<!--<li>
                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-fw"></i>  Food Nutrition Analyser</a>
                    </li>
					<li>
                        <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user fa-fw"></i>  Login</a>
                    </li>-->
                   
                    
                    
					
					
                    
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->

        <!--  page-wrapper -->
        <div id="page-wrapper" style="background-image:url(assets/img/bg/bg_1.png)">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-fire fa-fw"></i>Food Nutrients Analyzer</h1>
                </div>
                <!--End Page Header -->
            </div>

               <div class="row">
                <div class="col-lg-12">
                    <!--Timeline -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-fire fa-fw"></i>Analyze Food
                        </div>

                        <div class="panel-body">
                           
                           <div class="row">
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Breakfast
                                            </div>
                                            <div class="panel-body">
                                                <a href= "breakfast-table.php" ><image src="assets/img/balay-tubay2.jpg" width="100%"></a>
                                            </div>
                                            <div class="panel-footer">
                                                Ready, Set, Breakfast!</div>
                                        </div>
                                    </div>


                                                    <div class="col-lg-4">
                                                        <div class="panel panel-primary">
                                                                             <div class="panel-heading">
                                                                         Lunch
                                                                        </div>
                                                                      <div class="panel-body">
                                                                           <a href= "lunch-table.php" > <image src="assets/img/3341328_f520.jpg" width="100%"></a>
                                                                       
																					

													      </div>
                                                                        <div class="panel-footer">
                                                                            Lunch
                                                                        &amp; Learn</div>
                                                      </div>
                                        
                                                    </div> 

                                                            <div class="col-lg-4">
                                                                    <div class="panel panel-primary">
                                                                        <div class="panel-heading">
                                                                            Dinner
                                                                        </div>
                                                                        <div class="panel-body">
                                                                           <a href= "dinner-table.php" > <image src="assets/img/5960345ChristmasDinner-Rex.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            Time for Dinner
                                                                        </div>
                                                                    </div>
                                                    </div>
                          </div>

                                                <!--second row-->

                          <div class="row"></div>
                                                <!--End Timeline -->
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
										
													<label for="filter">Search food</label> 
													<div style="width:200px"><input type="text" name="filter" value="" id="filter" class="form-control" /></div><br>		
											
											<table class="table table-striped table-bordered bootstrap-datatable datatable" >
													<thead>
															   <tr>
															   <form action="analyzer.php" method="POST">
															   <th>Image</th>
															   <th>Food Name</th>
															   <th>Quantity</th>
															
															   <th>Actions</th>
															   </tr>
													 </thead>
													 
													 <?php
														include_once('analyzer.php');
														$x = new Analyzer();
											
														$x->getallBreakfast();
				                                     ?>
													 
											</table>
											
											
											 

                                        </div>
                                        <div class="modal-footer">
											
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" name="submit" class="btn btn-default" value="Analyzer"/>
										</form>
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
							 <!-- modal content for contact-->
                            
                            <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file fa-fw">Message</i></h4>
                                            <div id="feedback" class="alert alert-info">
                                            Please fill up the form correctly
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                          <form action="#" id="contact2">
                                        <input type="text" name="name" placeholder="Name"class="form-control" ><br>
                                        <input type="text" name="email" placeholder="Email"class="form-control" ><br>
                                        <input type="text" name="subject" placeholder="Subject"class="form-control" ><br>
                                        <label>Message</label>
                                        <textarea class="form-control" rows="3" type="text" name="message"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">Send</button>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content for Contact-->
							
							
							<!-- modal content for MyProfile-->
							
							<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user fa-fw">Profile</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
										  <table class="table table-striped table-bordered table-hover">
										  <thead>
										  <tr>
										  <th>Profile</th>
										  </tr>
										  </thead>
										  <tbody>
										 
										  <?php
										  
										  //include ('inc/dbconnect.php');
										  FoodNutrientsAnalyzer::oldDb();
										  $result = mysql_query("SELECT * FROM user WHERE username='$user'");//dapat nalagay ang id ng pinag click na category
										  while($row = mysql_fetch_array($result))
										  {//start bracket
										  
											echo "<tr><td><b>Username : </b> ".$row['username']."</td></tr>";
											echo "<tr><td><b>Name : </b>".$row['name']."</td></tr>";
											echo "<tr><td><b>Middle Name : </b>".$row['middleName']."</td></tr>";
											echo "<tr><td><b>Last Name : </b>".$row['lastName']."</td></tr>";
											echo "<tr><td><b>Address : </b>".$row['address']."</td></tr>";
											echo "<tr><td><b>Age : </b>".$row['age']."</td></tr>";
											echo "<tr><td><b>Email Address : </b>".$row['emailAddress']."</td></tr>";
											echo "<tr><td><b>Mobile Number : </b>".$row['mobile']."</td></tr>";
											echo "<tr><td><b>Registered Date : </b>".$row['udate']."</td></tr>";
										
										  
										  
										  
										  }//end of while
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
							
							<!-- modal content for my profile-->
							
							
							<!-- modal content for my edit acount-->
							<div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file fa-fw">&nbsp;Edit&nbsp;Account</i></h4>
                                           
                                        </div>
                                        <div class="modal-body">
										<form action="inc/function.php" method="POST">
										  <?php
										  
										  //include ('inc/dbconnect.php');
										  FoodNutrientsAnalyzer::oldDb();
										  $result = mysql_query("SELECT * FROM user WHERE username='$user'");//dapat nalagay ang id ng pinag click na category
										  while($row = mysql_fetch_array($result))
										  {//start bracket
										  
											echo "<label>";
											echo "Name";
											echo "</label>";
										    echo "<input type=text name=rname class=form-control placeholder=name value=".$row['name']." />";
											
											echo "<label>";
											echo "Middle Name";
											echo "</label>";
										    echo "<input type=text name=middlename class=form-control placeholder=name value=".$row['middleName']." />";
											
											echo "<label>";
											echo "Last Name";
											echo "</label>";
										    echo "<input type=text name=lastname class=form-control placeholder=name value=".$row['lastName']." />";
											
											echo "<label>";
											echo "Address";
											echo "</label>";
										    echo "<input type=text name=address class=form-control placeholder=name value=".$row['address']." />";
											
											echo "<label>";
											echo "Age";
											echo "</label>";
										    echo "<input type=text name=age class=form-control placeholder=name value=".$row['age']." />";
											
											echo "<label>";
											echo "Email Address";
											echo "</label>";
										    echo "<input type=text name=emailaddress class=form-control placeholder=name value=".$row['emailAddress']." />";
											
											echo "<label>";
											echo "Mobile Number";
											echo "</label>";
										    echo "<input type=text name=mobilenumber class=form-control placeholder=name value=".$row['mobile']." />";
											
									
										  
										  
										  }//end of while
										  ?>
										
									 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                                            
                                        </div>
										</form>
                                    
                                    </div>
                                </div>
                            </div>
							<!-- modal content for my edit acount-->
							
							

    <!-- Core Scripts - Include with every page pag wala to gagana yung search problem lang di gagana modal boxes -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
	
	<!--ito yung script sa search <script src="admin/source/remolacio.js" type="text/javascript" charset="utf-8"></script>
    <script src="admin/source/application.js" type="text/javascript" charset="utf-8"></script>-->
	
	
	<hr>

</body>

</html>
