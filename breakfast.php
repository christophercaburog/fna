<?php

//include_once('analyzer.php');

//$x = new Analyzer();

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
	
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
        $("#analyzer").submit(function()
        {
        
        $.post('analyzer.php',$("#analyzer").serialize(), function(data)
            {
        $("#feedback").html(data);
        //clear();
            });
            return false;
        });
        
        function clear(){
                        
                        $("#analyzer :input").each(function()
                                                        {
                                                $(this).val("");
                        
                                                        });
        
                        }
    });
    
    </script>
		
	
   </head>
<body >
    <!--  wrapper -->
    <div id="wrapper" style="background-image:url(assets/img/bg/bg_1.png)">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
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

        </nav>
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
					<li>
                        <a href="pinoy-plate.php"><i class="fa fa-fire fa-fw"></i>  Pinoy Plate<span class="fa arrow"></span></a>
						
						<ul class="nav nav-second-level">
                            <li>
                                <a href="pinoy-plate.php"><i class="fa fa-home fa-fw"></i> Region I</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.php"><i class="fa fa-home fa-fw"></i> Region II</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.php"><i class="fa fa-home fa-fw"></i> Region III</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.php"><i class="fa fa-home fa-fw"></i> Region IV</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.php"><i class="fa fa-home fa-fw"></i> Region V</a>
                            </li>
							<li>
                                <a href="pinoy-plate.php"><i class="fa fa-home fa-fw"></i> Region VI</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region VII</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region VIII</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region 9</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region 10</a>
                            </li>
							<li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region 11</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region 12</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region 13</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region 14</a>
                            </li>
                            <li>
                                <a href="pinoy-plate.html"><i class="fa fa-home fa-fw"></i> Region 15</a>
                            </li>
                        </ul>
						
                    </li>
                     <li>
                         <a href="#" data-toggle="modal" data-target="#contact"><i class="fa fa-message fa-fw"></i> Contact Us</a>
                    </li>
                    
                     <li>
                        <a href="timeline.html"><i class="fa fa-plus fa-fw"></i>  Health Corner <span class ="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
                                <a href="health.html"><i class="fa fa-plus fa-fw"></i> Alcohol Intake</a>
                            </li>
							<li>
                                <a href="health.html"><i class="fa fa-plus fa-fw"></i> Balance Diet</a>
                            </li>
							<li>
                                <a href="health.html"><i class="fa fa-plus fa-fw"></i> Brushing of Teeth</a>
                            </li>
							<li>
                                <a href="health.html"><i class="fa fa-plus fa-fw"></i> Exercise</a>
                            </li>
							<li>
                                <a href="health.html"><i class="fa fa-plus fa-fw"></i> Hand Washing</a>
                            </li>
							<li>
                                <a href="health.html"><i class="fa fa-plus fa-fw"></i> Alcohol Intake</a>
                            </li>
						</ul>
                    </li>
					<!--<li>
                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-fw"></i>  Food Nutrition Analyser</a>
                    </li>
					<li>
                        <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user fa-fw"></i>  Login</a>
                    </li>-->
                    <li>
                        <a href="#" data-toggle="modal" data-target="#about"><i class="fa fa-file fa-fw" ></i>  About Us</a>
                    </li>
                    
                    
					
					
                    
                    
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
                            <i class="fa fa-fire fa-fw"></i>Breakfast
                        </div>

                        <div >
                           
                          	
                                         

                                      
                </div>
            </div>


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
	<form action="analyzer.php" method="POST">
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
																<th>Image</th>
																<th>Food Name</th>
																<th>Quantity Per servings</th>
															
																
																</tr>
																</thead>
													 
													 <?php
														include_once('analyzer.php');
														$x = new Analyzer();
											
														$x->getallBreakfast();
				                                     ?>
													 
											</table>
											<input type="submit" name="submit" class="btn btn-default" value="Analyzer"/>
										</form>				

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
