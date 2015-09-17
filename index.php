<?php
session_start();
 if (isset($_SESSION['user'])) 
 {
 
 header('Location:home.php');
 
 }//session

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
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
        $("#form").submit(function()
        {
        
        $.post('registration.php',$("#form").serialize(), function(data)
            {
        $("#feedback").html(data);
        //clear();
            });
            return false;
        });
        
        function clear(){
                        
                        $("#form :input").each(function()
                                                        {
                                                $(this).val("");
                        
                                                        });
        
                        }
    });
    
    </script>

    <script type="text/javascript">
    $(document).ready(function()
    {
        $("#form2").submit(function()
        {
        
        $.post('confirm.php',$("#form2").serialize(), function(data)
            {
        $("#feedlog").html(data);
       // clear();
        if(data==2){
        window.location="home.php";
        }else if (data==1){
        window.location="admin/index.php";
		

		
        }
            });
            return false;
        });
        
        function clear(){
                        
                        $("#form2 :input").each(function()
                                                        {
                                                $(this).val("");
                        
                                                        });
        
                        }
    });
    
    </script>
	
    <style type="text/css">
<!--
.style1 {
	font-family: FontAwesome
}
-->
    </style>
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
				
                <a  href="index.php">
                <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','150','height','160','src','assets/img/flash','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','assets/img/flash' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="150" height="160">
                  <param name="movie" value="assets/img/flash.swf">
                  <param name="quality" value="high">
                  <embed src="assets/img/flash.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="150" height="160"></embed>
                </object></noscript>
                </a>            </div>
            <!-- end navbar-header -->
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
        <nav class="navbar-default navbar-static-side" role="navigation" >
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
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
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>  Pinoy Plate<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="region1.php">Region 1</a>
                            </li>
                            <li>
                                <a href="region2.php">Region 2</a>
                            </li>
							<li>
                                <a href="region3.php">Region 3</a>
                            </li>
							<li>
                                <a href="region4.php">Region 4</a>
                            </li>
							<li>
                                <a href="region5.php">Region 5</a>
                            </li>
							<li>
                                <a href="region6.php">Region 6</a>
                            </li>
							<li>
                                <a href="region7.php">Region 7</a>
                            </li>
							<li>
                                <a href="region8.php">Region 8</a>
                            </li>
							<li>
                                <a href="region9.php">Region 9</a>
                            </li>
							<li>
                                <a href="region10.php">Region 10</a>
                            </li>
							<li>
                                <a href="region11.php">Region 11</a>
                            </li>
							<li>
                                <a href="region12.php">Region 12</a>
                            </li>
							<li>
                                <a href="region13.php">Region 13</a>
                            </li>
							<li>
                                <a href="armmm.php">Region ARMM</a>
                            </li>
							<li>
                                <a href="carr.php">Region CAR</a>
                            </li>
                        </ul>
                       
                    </li>
                     
                    
                     <li>
                        <a href="timeline.html"><i class="fa fa-plus fa-fw"></i>  Health Corner <span class ="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
                                <a href="alcohol-view.php"><i class="fa fa-plus fa-fw"></i> Alcohol Intake</a>
                            </li>
							<li>
                                <a href="diet-view.php"><i class="fa fa-plus fa-fw"></i> Balance Diet</a>
                            </li>
							<li>
                                <a href="brush-view.php"><i class="fa fa-plus fa-fw"></i> Brushing of Teeth</a>
                            </li>
							<li>
                                <a href="exercise-view.php"><i class="fa fa-plus fa-fw"></i> Exercise</a>
                            </li>
							<li>
                                <a href="hand-view.php"><i class="fa fa-plus fa-fw"></i> Hand Washing</a>
                            </li>
						</ul>
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
                                    <img src="assets\img\manok.jpg" alt=""
                                         class="adl-1 pos-ab top-20 animated bounceInRight"
                                         data-anim-in="bounceInRight" data-anim-out="bounceOutRight">
                                    <img src="assets\img\pork.jpg" alt="" class="adl-3 pos-ab top-100 rig-50 animated fadeInLeftBig"
                                         data-anim-in="fadeInLeftBig" data-anim-out="fadeOutLeftBig">
                                    <img src="assets\img\halo.jpg" alt=""
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

                                    <p align="justify" class="cl-2 bg-white lead  animated  adl-3 style1" data-anim-in="bounceInRight"
                                       data-anim-out="bounceOutRight">While the daily recommended amount of water is eight cups per day, not all of this water must be consumed in the liquid form. Nearly every food or drink item provides some water to the body.									   </p>
                                </div>
<div class="col-lg-7">
                                    <img src="assets\img\water.jpg" alt=""
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
                                    <img src="assets\img\dalandan.jpg" alt="" style="margin-top:50px;"
                                         data-anim-in="fadeInLeftBig" data-anim-out="fadeOutLeftBig"
                                         class="pull-right animated fadeInLeftBig"/>
                                </div>
                                <div class="col-lg-4">
                                    <div class="text-center">
                                        <img src="assets\img\orange.jpg" alt="" style="margin-top: 200px;"
                                             data-anim-in="fadeInUpBig" data-anim-out="fadeOutUpBig"
                                             class="animated fadeInUpBig"/>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <img src="assets\img\orange1.jpg" alt="" style="margin-top:50px;"
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
            <!-- login form -->
               
                <div  id ="a" class="row" >
                <div class="well" id ="aa"  >
                    <form id="form2">
                        <fieldset>
                             <br>
                            <legend><i class="fa fa-user fa-fw"> Login</i></legend>
                           <div id="feedlog" class="alert alert-info">
                                                                    Please fill up the form correctly
                                                                 </div>
                            <input type="text" name="username" placeholder="username" class="form-control">
                            <input type="password" name="password" placeholder="password" class="form-control">
                            <button type="submit" name="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModalLogin">Login</button>
                            <button type="submit" name="submit" class="btn btn-info" data-toggle="modal" data-target="#myModal">Register</button>
                        </fieldset>
                    </form>
                </div>
                                      
                </div>

                <!-- end of the login form -->
			
			</div>
			
			
			<!--end of the carousel -->
				
            
        <!-- end page-wrapper -->


    </div>


    </div>
    <!-- end wrapper -->
	
	
	<!-- modal content for registration -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user fa-fw">Register</i></h4>
                                                              <div id="feedback" class="alert alert-info">
                                                                    Please fill up the form correctly
                                                                 </div>
                                        </div>
                                        <div class="modal-body">
                          
                
                                <form id="form">
                                          <form id="form">
                                            
                                            <div class="controls controls-row">
                                                <label>Username</label>
                                           <input type="text" name="userName" placeholder="username"class="form-control" >
                                                 <label>Password</label>
                                           <input type="password" name="password" class="form-control" placeholder="password">
                                             <label>Confirm Password</label>
                                           <input type="password" name="confirmPassword"  placeholder="confirm password" class="form-control">
										   </div>

                                           <div class="controls control-group">
                                            <label>Name</label>
                                           <input type="text" name="name" class="form-control" placeholder="name">
                                            <label>Last Name</label>
                                           <input type="text" name="lastName" class="form-control" placeholder="last name">
                                            <label>MIddle Name</label>
                                           <input type="text" name="middleName"class="form-control" placeholder="middle name">
                                            <label>Age</label>
                                           </div>

                                           <!--<input type="text" name="age"class="form-control" placeholder="age">-->
										   
										   <select name="age" id="application" class="form-control">
                                                    <option value="">-- Chose your gender and age--</option>
                                                    <option value="1">Infants, mo Birth -< 6</option>
                                                    <option value="2">infants, mo 6 to 12</option>
                                                    <option value="3">Children, y 1 - 3</option>
                                                    <option value="4">Children, y 4 - 6</option>
                                                    <option value="5">Children, y 7 - 9</option>
                                                    <option value="6">Male, y 10 - 12</option>
                                                    <option value="7">Male, y 13 - 15</option>
                                                    <option value="8">Male, y 16 - 18</option>
                                                    <option value="9">Male, y 19 - 29</option>
                                                    <option value="10">Male, y 30 - 49</option>
                                                    <option value="11">Male, y 50 - 64</option>
                                                    <option value="12">Male, y 65+</option>
													 <option value="13">Female, y 10 - 12</option>
                                                    <option value="14">Female, y 13 - 15</option>
                                                    <option value="15">Female, y 16 - 18</option>
                                                    <option value="16">Female, y 19 - 29</option>
                                                    <option value="17">Female, y 30 - 49</option>
                                                    <option value="18">Female, y 50 - 64</option>
                                                    <option value="19">Female, y 65+</option>
													<option value="20">Pregnant, First</option>
													<option value="21">Pregnant, Second</option>
													<option value="22">Pregnant, Third</option>
													<option value="23">Lactating, 1st six months</option>
													<option value="24">Lactating, 2nd six months</option>
                                                
										  </select>
										   
                                            <label>Address</label>
                                           <input type="text" name="address" class="form-control" placeholder="address">
                                            <label>Phone Number</label>
                                           <input type="text" name="number" onkeypress="return isNumberKey(event)" required="" class="form-control" placeholder="number">
                                            <label>Email Address</label>
										   <input type="text" name="emailAddress" class="form-control" required="" placeholder="email address">

										     
                                    
										 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                        </div>
                                         </form>
                                    </div>
                                </div>
                            </div>
							
							<!-- modal content -->
							
							<!-- modal content for login-->
							
							<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user fa-fw">Login</i></h4>
                                        </div>
                                        <div class="modal-body">
                                                        <div id="feedlog" class="alert alert-info">
                                                                    Please fill up the form correctly
                                                                 </div>
                                          <form id="form2">
										  Username: <input type="text" name="username" >
										  Password: <input type="password" name="password"><br><br>
										   
										  
										 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                        </div>
                                         </form>
                                    </div>
                                </div>
                            </div>

							
							<!-- modal content for login-->
							
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
							
			

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
	
	<!--this script is for loading-->
    <script src="assets/plugins/pace/pace.js"></script>
	<!--this script is for loading-->
	
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
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
	
	<hr>

</body>

</html>
