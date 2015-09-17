<?php

include_once('function.php');

$z = new AdminAdapter();

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
	
	<!-- dito yung script ng image pra sa pag upload gamit ang ajax-->
	<!--carousel source start-->
	
	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/animate.css/animate.css">
        <link rel="stylesheet" href="../css/nrc.css">
    

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
	
   </head>
   <style>
				.preview
				{
				width:200px;
				border:solid 1px #dedede;
				padding:10px;
				}
				#preview
				{
				color:#cc0000;
				font-size:12px
				}

</style>
<body >
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
                   <img src="../assets/img/timbangan.gif"  height="100" width="100" alt="" />
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
                         <a href="user.php" ><i class="fa fa-user fa-fw"></i>Manage User</a>
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
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-home fa-fw"></i> Home</h1>
                </div>
                <!--End Page Header -->
            </div>

			<label for="filter">Search</label> 
            <div style="width:200px"><input type="text" name="filter" value="" id="filter" class="form-control" /></div><br>
			
			<div class = "panel body">	
			
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                     <tr>
                           
                           <th>Image</th>
                           <th>Food Name</th>
                           <th>Type</th>
                           <th>Date Inserted</th>
                           <th>Actions</th>
                           </tr>
                 </thead>
							<tbody>
                                  <form action="function.php" method="POST">      
                                        
                                          
										  
									<?php
												
										$z->getAllFood();	
										
											
									?>	
								
								  </form>
										
                                         
                                        
                                       
                             </tbody>
                  </table>
				  </div>
				  </div>


          

           
   
				
			
			
			
			
            
        <!-- end page-wrapper -->

    </div>
    </div>
    <!-- end wrapper -->
	
	
	
							
							
							
							<!-- modal content for About-->
							
							<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file fa-fw">About</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
										  About Us!!
										  
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<!-- modal content for About-->
                            <!-- modal content for contact-->
                            
                            <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file fa-fw">Add&nbsp;Food</i></h4>
                                            <div id="feedback" class="alert alert-info">
                                            Please fill up the form correctly
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                          <form action="#" id="nutrients">
                                        <div class = "span4"><select name="category" id="application" class="form-control">
                                                    <option value="">-- Chose category --</option>
                                                    <option value="1">Breakfast</option>
                                                    <option value="2">Lunch</option>
                                                    <option value="3">Dinner</option>
                                                
                                        </select><br>
										</div>
										<div style="width:600px">

										<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
										Upload food image <input type="file" name="photoimg" id="photoimg" />
										</form>
										<div id='preview'>
										</div>
										</div>
										<div class="row show-grid">
										
                                        <div class="col-md-4 clearfix"><input type="text" name="water" placeholder="water"class="form-control" ></div>
										
										
										<div class="col-md-4 clearfix"><input type="text" name="energy" placeholder="energy"class="form-control" ></div>
									
										<div class="col-md-4 clearfix"><input type="text" name="protein" placeholder="protein"class="form-control" ></div><br>
									
										<div class="col-md-4 clearfix"><input type="text" name="fat" placeholder="fat"class="form-control" ></div>
									
										<div class="col-md-4 clearfix"><input type="text" name="carbohydrate" placeholder="carbohydrate"class="form-control" ></div>
										
										<div class="col-md-4 clearfix"><input type="text" name="crudefiber" placeholder="crude fiber"class="form-control" ></div><br>
										
										<div class="col-md-4 clearfix"><input type="text" name="ash" placeholder="ash"class="form-control" ></div>
										
										<div class="col-md-4 clearfix"><input type="text" name="calcium" placeholder="calcium"class="form-control" ></div>
										
										<div class="col-md-4 clearfix"><input type="text" name="phosphorus" placeholder="phosphorus"class="form-control" ></div><br>
										
										<div class="col-md-4 clearfix"><input type="text" name="iron" placeholder="iron"class="form-control" ></div>
										
										<div class="col-md-4 clearfix"><input type="text" name="retinol" placeholder="retinol"class="form-control" ></div>
										
										<div class="col-md-4 clearfix"><input type="text" name="bcarotene" placeholder="B-carotene"class="form-control" ></div><br>
										
										<div class="col-md-4 clearfix"><input type="text" name="vita" placeholder="Vit A"class="form-control" ></div>
									
										<div class="col-md-4 clearfix"><input type="text" name="thiamine" placeholder="thiamine"class="form-control" ></div>
										
										<div class="col-md-4 clearfix"><input type="text" name="riboflavin" placeholder="riboflavin"class="form-control" ></div><br>
										
										<div class="col-md-6 clearfix"><input type="text" name="niacin" placeholder="niacin"class="form-control" ></div>
										
										<div class="col-md-6 clearfix"><input type="text" name="ascorbicacid" placeholder="ascorbic acid"class="form-control" ></div>
		
										</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">fSubmit</button>
                                            
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content for Contact-->
							
			

    <!-- Core Scripts - Include with every page -->
   
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
	
	<!--this script is for loading-->
    <script src="../assets/plugins/pace/pace.js"></script>
	<!--this script is for loading-->
	
    <script src="../assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
	
	
	<!-- itong script na to ang salarin sa table na search-->
    <script src="../assets/plugins/morris/morris.js"></script>
	
    <script src="../assets/scripts/dashboard-demo.js"></script>
	<script src="source/remolacio.js" type="text/javascript" charset="utf-8"></script>
    <script src="source/application.js" type="text/javascript" charset="utf-8"></script>
	
	 <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
	
	<hr>

</body>

</html>
