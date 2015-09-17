
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
					<a href="pinoy-plate.php"><i class="fa fa-file fa-fw"></i>  Pinoy Plate</a>
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
                        <div class="panel-heading">
                            <i class="fa fa-fire fa-fw"></i>Pinoy Plate
                        </div>

                        <div class="panel-body">
                           
                           <div class="row">
                                    <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Region 1
                                            </div>
                                            <div class="panel-body">
                                                <a href= "#" data-toggle="modal" data-target="#region1"><image src="assets/img/pinoyplateimage/227sisig.jpg" width="100%"></a>
                                            </div>
                                            <div class="panel-footer">
                                                details about sa region
                                            </div>
                                        </div>
                                    </div>


                                                    <div class="col-lg-4">
                                                        <div class="panel panel-primary">
                                                                             <div class="panel-heading">
                                                                         Region 2
                                                                        </div>
                                                                      <div class="panel-body">
                                                                           <a href= "#" data-toggle="modal" data-target="#region2"> <image src="assets/img/pinoyplateimage/adobo-baboy1.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            details din about sa region 2
                                                                        </div>
                                                                </div>
                                        
                                                    </div> 

                                                            <div class="col-lg-4">
                                                                    <div class="panel panel-primary">
                                                                        <div class="panel-heading">
                                                                            Region 3
                                                                        </div>
                                                                        <div class="panel-body">
                                                                           <a href= "#" data-toggle="modal" data-target="#region3"> <image src="assets/img/pinoyplateimage/adobong baboy.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            details ulit dito
                                                                        </div>
                                                                    </div>
                                                    </div>
                                                </div>

                                                <!--second row-->

                                                <div class="row">
                                                        <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Region 4
                                            </div>
                                            <div class="panel-body">
                                               <a href= "#" data-toggle="modal" data-target="#region4"><image src="assets/img/pinoyplateimage/adobong kangkong1.jpg" width="100%"></a>
                                            </div>
                                            <div class="panel-footer">
                                                details po
                                            </div>
                                        </div>
                                    </div>


                                                    <div class="col-lg-4">
                                                        <div class="panel panel-primary">
                                                                             <div class="panel-heading">
                                                                         Region 5
                                                                        </div>
                                                                      <div class="panel-body">
                                                                            <a href= "#" data-toggle="modal" data-target="#region5"> <image src="assets/img/pinoyplateimage/adobong sitaw.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            Details po
                                                                        </div>
                                                                </div>
                                        
                                                    </div> 

                                                            <div class="col-lg-4">
                                                                    <div class="panel panel-primary">
                                                                        <div class="panel-heading">
                                                                            Region 6
                                                                        </div>
                                                                        <div class="panel-body">
                                                                           <a href= "#" data-toggle="modal" data-target="#region6">  <image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            detailspo
                                                                        </div>
                                                                    </div>
                                                    </div>

                                                </div><!--end second row-->
												
												<!--start of third row-->
												<div class="row">
                                                        <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Region 7
                                            </div>
                                            <div class="panel-body">
                                               <a href= "#" data-toggle="modal" data-target="#region7"><image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                            </div>
                                            <div class="panel-footer">
                                                Details po :) ; 
                                            </div>
                                        </div>
                                    </div>


                                                    <div class="col-lg-4">
                                                        <div class="panel panel-primary">
                                                                             <div class="panel-heading">
                                                                         Region 8
                                                                        </div>
                                                                      <div class="panel-body">
                                                                            <a href= "#" data-toggle="modal" data-target="#region8"> <image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            details ulit
                                                                        </div>
                                                                </div>
                                        
                                                    </div> 

                                                            <div class="col-lg-4">
                                                                    <div class="panel panel-primary">
                                                                        <div class="panel-heading">
                                                                            Region 9
                                                                        </div>
                                                                        <div class="panel-body">
                                                                           <a href= "#" data-toggle="modal" data-target="#region9">  <image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                           details
                                                                        </div>
                                                                    </div>
                                                    </div>

                                                </div>
												<!--end of third row-->
												
												
												<!--start of apat row-->
												<div class="row">
                                                        <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Region 10
                                            </div>
                                            <div class="panel-body">
                                               <a href= "#" data-toggle="modal" data-target="#region10"><image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                            </div>
                                            <div class="panel-footer">
                                                details
                                            </div>
                                        </div>
                                    </div>


                                                    <div class="col-lg-4">
                                                        <div class="panel panel-primary">
                                                                             <div class="panel-heading">
                                                                         Region 11
                                                                        </div>
                                                                      <div class="panel-body">
                                                                            <a href= "#" data-toggle="modal" data-target="#region11"> <image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            details ulit
                                                                        </div>
                                                                </div>
                                        
                                                    </div> 

                                                            <div class="col-lg-4">
                                                                    <div class="panel panel-primary">
                                                                        <div class="panel-heading">
                                                                            Region 12
                                                                        </div>
                                                                        <div class="panel-body">
                                                                           <a href= "#" data-toggle="modal" data-target="#region12">  <image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            details ulit
                                                                        </div>
                                                                    </div>
                                                    </div>

                                                </div>
												<!--end of apat row-->
												
												
												<!--start of lima row-->
												<div class="row">
                                                        <div class="col-lg-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                Region 13
                                            </div>
                                            <div class="panel-body">
                                               <a href= "#" data-toggle="modal" data-target="#region13"><image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                            </div>
                                            <div class="panel-footer">
                                                Plate
                                            </div>
                                        </div>
                                    </div>


                                                    <div class="col-lg-4">
                                                        <div class="panel panel-primary">
                                                                             <div class="panel-heading">
                                                                         ARMM
                                                                        </div>
                                                                      <div class="panel-body">
                                                                            <a href= "#" data-toggle="modal" data-target="#armm"> <image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            Plate
                                                                        </div>
                                                                </div>
                                        
                                                    </div> 

                                                            <div class="col-lg-4">
                                                                    <div class="panel panel-primary">
                                                                        <div class="panel-heading">
                                                                           CAR
                                                                        </div>
                                                                        <div class="panel-body">
                                                                           <a href= "#" data-toggle="modal" data-target="#car">  <image src="assets/img/pinoyplateimage/adobong-kangkong.jpg" width="100%"></a>
                                                                        </div>
                                                                        <div class="panel-footer">
                                                                            Plate
                                                                        </div>
                                                                    </div>
                                                    </div>

                                                </div>
												<!--end of lima row-->
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
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">Icecream</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/icecream.jpg">

                                            <p> region 1</p>

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
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">egg</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/eggPlate.jpg">

                                            <p> region 3</p>

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
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">wine</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/icecream.jpg">

                                            <p> region 3</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->

                                              <!-- modal content for region 4 -->
            <div class="modal fade" id="region4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">coffe</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/cape.jpg">

                                            <p> region 4</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->

                            <div class="modal fade" id="region5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 5</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							<!-- modal content -->

                            <div class="modal fade" id="region6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 6</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							<!-- modal content -->

                            <div class="modal fade" id="region7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 7</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							<!-- modal content -->

                            <div class="modal fade" id="region8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 8</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							<!-- modal content -->

                            <div class="modal fade" id="region9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 9</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							<!-- modal content -->

                            <div class="modal fade" id="region10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 10</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							
							<!-- modal content -->

                            <div class="modal fade" id="region11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 11</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							<!-- modal content -->

                            <div class="modal fade" id="region12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 12</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							<!-- modal content -->

                            <div class="modal fade" id="region13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> region 13</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							<!-- modal content -->

                            <div class="modal fade" id="armm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> armm</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- modal content -->
							<!-- modal content -->

                            <div class="modal fade" id="car" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fire fa-fw">juice</i></h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <image src="assets/img/juice.jpg">

                                            <p> car</p>

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
