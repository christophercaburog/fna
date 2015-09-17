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
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar"  style="background-image:url(assets/img/foodHeader.jpg)">
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
					<li class="selected">
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
                    <h1 class="page-header"><i class="fa fa-fire fa-fw"></i>Pinoy Plate</h1>
                </div>
                <!--End Page Header -->
            </div>

               <div class="row">
                 <div class="col-lg-12">
                   <!--Timeline -->
                   <div class="panel panel-primary">
                     <div class="panel-heading"> <i class="fa fa-fire fa-fw"></i>Pinoy Plate </div>
                     <div class="panel-body">
                       <div class="row">
                         <div class="col-lg-4">
                           <div class="panel panel-primary">
                             <div class="panel-heading"> Plate 1 </div>
                             <div class="panel-body"> <a href= "#" data-toggle="modal" data-target="#region1">
                               <image src="assets/img/pinoyplateimage/bulalo2.jpg" width="100%" height = "30%">
                             </a> </div>
                             <div class="panel-footer"> BULALO </div>
                           </div>
                         </div>
                         <div class="col-lg-4">
                           <div class="panel panel-primary">
                             <div class="panel-heading"> Plate 2 </div>
                             <div class="panel-body"> <a href= "#" data-toggle="modal" data-target="#region2">
                               <image src="assets/img/pinoyplateimage/pansithabhab.jpg" width="100%" height="30%">
                             </a> </div>
                             <div class="panel-footer"> PANSIT HABHAB </div>
                           </div>
                         </div>
                         <div class="col-lg-4">
                           <div class="panel panel-primary">
                             <div class="panel-heading"> Plate 3 </div>
                             <div class="panel-body"> <a href= "#" data-toggle="modal" data-target="#region3">
                               <image src="assets/img/pinoyplateimage/nilupak.jpg" width="100%" height = "30%">
                             </a> </div>
                             <div class="panel-footer"> NILUPAK </div>
                           </div>
                         </div>
                       </div>
                       <!--End Timeline -->
                     </div>
                   </div>
                 </div>
                 <!-- end page-wrapper -->
</div>
<!-- end wrapper -->
	
	
	<!-- modal content for region 1 -->
			<div class="modal fade" id="region1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">BULALO</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/pinoyplateimage/bulalo2.jpg" width= 600>

                                            <p align = "justify">  Bulalo or Beef Shank is not the most healthy food among Filipino’s line of goodies, as a matter of fact, I would not suggest this dish if you are watching your calorie intake or advised by your doctor not to eat anything high in cholesterol.yeah, the one that other Nilagang Baka does not have is the Marrow which is very flavorful and very delicious.</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<!-- modal content -->

                            <!-- modal content for region 2 -->
            <div class="modal fade" id="region2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">PANSIT HABHAB</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/pinoyplateimage/pansithabhab.jpg" width= 600>

                                            <p align="justify"> Pancit Habhab or Pancit Lucban is a pancit version that originated from the Quezon province. This noodle dish might look like the traditional Pancit Canton, but there are some notable differences. Pancit Habhab uses dried flour noodles which are known as miki Lucban. These are not the same noodles used in pancit canton; it is also different from the fresh miki noodles, which are made fresh and have softer texture. This pancit version is served over a piece of banana leaf and is eaten without any utensils. How? Imagine eating a sandwich. You will need to grab the banana leaf with noodles and put it directly to your mouth. Don’t eat the banana leaf though. I’m not sure if Miki-Lucban is available in some Filipino stores in the US. We got this from our good friends as a pasalubong from their Philippine vacation. This is best eaten with vinegar. I usually put about a teaspoon of cane vinegar for every serving.
</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
                            <!-- modal content for region 3 -->
            <div class="modal fade" id="region3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">NILUPAK</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/pinoyplateimage/nilupak.jpg" width= 600>

                                            <p align="justify">Nilupak is a delicious Filipino treat made from cassava. This is enjoyed in the Philippines as a snack and it can also be considered as a dessert, sometimes. Other ingredients involved are grated or shredded coconut, condensed milk, and butter or margarine. There are other Nilupak versions that make use of saba banana.Nilupak is a delicious Filipino treat made from cassava. This is enjoyed in the Philippines as a snack and it can also be considered as a dessert, sometimes. Other ingredients involved are grated or shredded coconut, condensed milk, and butter or margarine. There are other Nilupak versions that make use of saba banana. </p>

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
	
	<hr>

</body>

</html>
