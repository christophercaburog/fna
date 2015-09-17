<?php
session_start();

if(isset($_SESSION['admin'])){

$admin = $_SESSION['admin'];

}else{


header('Location:../home.php');

}

?>



<?php
include_once ('function.php');

$s = new AdminAdapter();

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

    <!--for the tables-->
 
	<!--for the tables-->
	
	<!--carousel source start-->
	
	<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/animate.css/animate.css">
        <link rel="stylesheet" href="../css/nrc.css">
    

	<!--carousel source end-->
    <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
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
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus fa-fw"></i> Edit</h1>
                </div>
                <!--End Page Header -->
            </div>

  
										
										
										<form id="imageform" method="post" enctype="multipart/form-data" action='function.php'>
										<div class="row show-grid">
									 <!--	<div class="col-md-4 clearfix"><div id='preview'>
										
										<img  id ="design" src="uploads/.<?php //$pangalanNgImage; ?> ."/>
										</div></div>-->
										
										<div class="col-md-15 clearfix">Upload food image <input type="file" name="photoimg" required="" id="photoimg" onKeyPress="return validate_required(this)"/>
										 
										
                                       <div class="col-md-4 clearfix"> <div class = "span4"><select name="category" id="application" class="form-control">
                                                    <option value="">-- Chose category --</option>
                                                    <option value="1">Breakfast</option>
                                                    <option value="2">Lunch</option>
                                                    <option value="3">Dinner</option>
                                                
                                        </select>
										</div>
										</div>
										
										<div class="col-md-4 clearfix"><input type="text" required="" name="name" placeholder="food name"class="form-control" ></div>
										
										<div class="col-md-4 clearfix">
										<select name="perPiece" required="" id="application" class="form-control" placeholder="">
                                                    <option value="">-- Chose amount per piece/cup/slice/serving/tablespoon/ounce --</option>
                                                    <option value="1/2 cup">1/2 cup</option>
                                                    <option value="1 cup">1 cup</option>
                                                    <option value="1/2 piece">1/2 piece</option>
                                                    <option value="1 piece">1 piece</option>
                                                	<option value="1 slice">1 slice</option>
                                                    <option value="1 serving">1/2 serving</option>
													<option value="1 serving">1 serving</option>
													<option value="1 tablespoon">1 tablespoon</option>
													<option value="1 tablespoon">1 ounce</option>
                                                
                                        </select>
										<input type="text" name="amount" placeholder="amount of food per grams"class="form-control" ></div>
											
											
							
										
										
										<div class="col-md-4 clearfix"><input type="text" name="energy" placeholder="energy"class="form-control" ></div>
									
										<div class="col-md-4 clearfix"><input type="text" name="protein" placeholder="protein"class="form-control" ></div><br>
									
										
										</div>
                                        </div>
                                        
                                            
                                            
                                        
                                    </form>
               
				
			
			
			
			
            
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
                                            <h4 class="modal-title" id="myModalLabel"><i class="fa fa-file fa-fw">Message</i></h4>
                                            <div id="feedback" class="alert alert-info">
                                            Please fill up the form correctly
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                          <form action="#" id="contact2">
                                        <select name="application" id="application" class="form-control">
                                                    <option value="">-- Chose one --</option>
                                                    <option value="1">Breakfast</option>
                                                    <option value="2">Lunch</option>
                                                    <option value="3">Dinner</option>
                                                
                                        </select>
                                        <input type="text" name="email" placeholder="Email"class="form-control" ><br>
                                        <input type="text" name="subject" placeholder="Subject"class="form-control" ><br>
                                        <label>Message</label>
                                        <textarea class="form-control" rows="3" type="text" name="message"></textarea>
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
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
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
    <script src="source/remolacio.js" type="text/javascript" charset="utf-8"></script>
    <script src="source/application.js" type="text/javascript" charset="utf-8"></script>
	
	<hr>

</body>

</html>

