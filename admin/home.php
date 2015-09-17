<?php
include('db.php');
session_start();
$session_id='1'; //$session id
?>
<html>
<head>
<title>fna</title>
</head>
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
	
	<!-- dito yung script ng image pra sa pag upload gamit ang ajax-->
	<script type="text/javascript" src="source/jquery.min.js"></script>
	<script type="text/javascript" src="source/jquery.form.js"></script>	
	<!-- dito yung script ng image pra sa pag upload gamit ang ajax-->
	<!--carousel source start-->
	
	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/animate.css/animate.css">
        <link rel="stylesheet" href="../css/nrc.css">


<style>

body
{
font-family:arial;
}
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

 <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
	
		
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
                         <a href="#" data-toggle="modal" data-target="#contact"><i class="fa fa-plus fa-fw"></i> Add Food</a>
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

            


           

              <!--start of the carousel -->

            <div class="row">
                <div class="col-lg-6">
                    
			<div class="container">
            <!--begin custom carousel-->
            <div id="homeCarousel" class="carousel">
                <div class="carousel-inner">
                    <!--begin slide 1-->
                    <div class="item active heig-400">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="animated bounceInDown mar-top-40 mar-bot-40 font-30 cl-1 "
                                         data-anim-in="bounceInDown" data-anim-out="bounceOutDown">Food 
										 <br>
										 Nutrients
                                        <br>Analyser
                                    </div>

                                    <a href="#" class="animated bounceInRight btn btn-lg btn-success"
                                       data-anim-in="bounceInRight" data-anim-out="bounceOutRight">Click here!</a>

                                </div>
                                <div class="col-lg-9 pos-rel">
                                    <img src="../assets\img\manok.jpg" alt=""
                                         class="adl-1 pos-ab top-20 animated bounceInRight"
                                         data-anim-in="bounceInRight" data-anim-out="bounceOutRight">
                                    <img src="../assets\img\pork.jpg" alt="" class="adl-3 pos-ab top-100 rig-50 animated fadeInLeftBig"
                                         data-anim-in="fadeInLeftBig" data-anim-out="fadeOutLeftBig">
                                    <img src="../assets\img\halo.jpg" alt=""
                                         class="adl-5 pos-ab top-200 lef-0 animated fadeInLeftBig"
                                         data-anim-in="fadeInLeftBig" data-anim-out="fadeOutLeftBig">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end slide 1-->

                    <!--begin slide 2-->
                    <div class="item heig-400">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
								
								<div class="animated bounceInDown mar-top-40 mar-bot-40 font-30 cl-1 ">
                                    <h3 data-anim-in="bounceInDown" data-anim-out="bounceOutDown"
                                        class="btn-primary pad-20 animated adl-5">Did you know that!</h3>
										</div>

                                    <p class="cl-2 bg-white lead  animated  adl-3" data-anim-in="bounceInRight"
                                       data-anim-out="bounceOutRight">blah blah blah sadadadasdadadadasdsadadad
									   asdasdddddddddddddddd
									   asdasdasdasdasd
									   asdasdasd
									   asd
									   </p>
                                </div>
                                <div class="col-lg-7">
                                    <img src="../assets\img\water.jpg" alt=""
                                         class="adl-1 pos-ab animated "
                                         data-anim-in="bounceInRight" data-anim-out="bounceOutRight">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end slide 2-->

                   

                    <!--begin slide 4-->
                    <div class="item heig-400">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="../assets\img\dalandan.jpg" alt="" style="margin-top:50px;"
                                         data-anim-in="fadeInLeftBig" data-anim-out="fadeOutLeftBig"
                                         class="pull-right animated fadeInLeftBig"/>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="../assets\img\orange.jpg" alt="" style="margin-top: 200px;"
                                             data-anim-in="fadeInUpBig" data-anim-out="fadeOutUpBig"
                                             class="animated fadeInUpBig"/>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <img src="../assets\img\orange1.jpg" alt="" style="margin-top:50px;"
                                         data-anim-in="fadeInRightBig" data-anim-out="fadeOutRightBig"
                                         class="animated fadeInRightBig"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end slide 4-->
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#homeCarousel" data-slide="prev"><span class="icon-prev"></span></a>
                <a class="carousel-control right" href="#homeCarousel" data-slide="next"><span class="icon-next"></span></a>
            </div>
            <!--end custom carousel-->
			</div>
			
			</div>
			
			</div>
			
			
			<!--end of the carousel -->
			
			
               
				
			
			
			
			
            
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
										

										
										Upload food image <input type="file" name="photoimg" id="photoimg" />
										
	
									
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
                                            <button type="submit" name="enter" class="btn btn-primary">Submit</button>
                                            
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
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/scripts/dashboard-demo.js"></script>
</body>
</html>