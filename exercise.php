
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
					<!--<li>
                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-fw"></i>  Food Nutrition Analyser</a>
                    </li>
					<li>
                        <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user fa-fw"></i>  Login</a>
                    </li>-->
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
                    <h1 class="page-header"><i class="fa fa-home fa-fw"></i> Exercise</h1>
                </div>
                <!--End Page Header -->
            </div>

            


           

              <p>
                <!--start of the carousel -->
              Joining an  aerobic fitness class can be a great way to improve your health.Aerobic  exercise can provide the following health benefits:</p>
              <ul>
                <li>Helps with weight loss or management.</li>
                <li>Increases your stamina and reduces fatigue.</li>
                <li>Conditions your heart and lungs by increasing the  amount of oxygen that is available and by helping your heart use oxygen more  efficiently.</li>
                <li>Helps manage your stress level.</li>
                <li>Increases your mobility.</li>
                <li>Reduces your risk of developing hypertension and  stroke.</li>
                <li>Improves your blood fats, increasing HDL (good)  cholesterol and decreasing LDL (bad) cholesterol.</li>
                <li>Reduces your risk of developing certain forms of  cancer, including breast, colon and prostate cancer.</li>
              </ul>
              <p>Aerobic  &amp; Fitness Classes<br>
                Most aerobic  and fitness classes are designed to use the same large muscle group  rhythmically for a set amount of time, normally ranging from 30 minutes to an  hour, while maintaining 65-75% of your maximum heart rate. When you are  engaging in aerobic exercise, you should be able to have a conversation without  feeling winded. Listed below are some of the most popular forms of aerobic  exercise classes:<br>
  <strong>Step Training.</strong>&nbsp;Step training is a low impact form of  exercise that involves music, a platform ranging from 4-12 inches in height,  and movements utilizing the large muscle groups of your body. Step aerobics  provide a fairly intense workout, but the intensity can be modified to  accommodate individuals of most fitness and ability levels.<br>
  <strong>Aquatic Exercises.</strong>&nbsp;Aquatic exercises put less strain on your  musculoskeletal system and are less likely to cause injury or strain than  regular forms of exercise, which makes them ideal for people with arthritis or  osteoporosis. Water provides sufficient resistance to help strengthen your  muscles, burn calories and raise your heart rate to your target level.<br>
  <strong>Spinning®.</strong>&nbsp;Spinning is a high-intensity exercise program  that utilizes a specially designed stationary bicycle and a series of cycling  movements that provide you with both a physical and mental workout. Spinning  classes are led by a specially trained instructor and are usually set to  fast-paced, motivating music.<br>
  <strong>Pilates.</strong>&nbsp;Pilates is a form of exercise that combines mind and body control  with stretching and resistance training. Pilates exercises help build muscle  strength, increase flexibility, and improve coordination and overall mental  concentration. These exercises are performed on a mat or specific machines and  are executed in a slow, controlled manner.<br>
  <strong>Tae-Bo®.</strong>&nbsp;Tae-Bo is a high-impact exercise class that combines elements of  Tae-Kwan-Do with aerobics and boxing. Tae-Bo classes are comprised of punching  and kicking movements that work both the upper and lower portions of your body.</p>
              <div>
                <h2>Source : The Health Benefits of  Aerobic Exercise and Fitness Classes</h2>
              </div>
              <p>Regular  physical activity is one of the most important things you can do for your  health. It can help</p>
              <ul type="disc">
                <li>Control       your weight</li>
                <li>Lower       your risk of heart disease</li>
                <li>Lower       your risk for type 2 diabetes and metabolic syndrome</li>
                <li>Lower       your risk of some cancers</li>
                <li>Strengthen       your bones and muscles</li>
                <li>Improve       your mental health and mood</li>
                <li>Improve       your ability to do daily activities and prevent falls, if you're an&nbsp;<a name="noreveal"></a><a href="http://www.nlm.nih.gov/medlineplus/exerciseforseniors.html">older adult </a> </li>
                <li>Increase       your chances of living longer</li>
              </ul>
              <p>Fitting  regular exercise into your daily schedule may seem difficult at first. But even  ten minutes at a time is fine. The key is to find the right exercise for you.  It should be fun and should match your abilities.<br>
                Source: <strong>A service of the&nbsp;</strong><a href="http://www.nlm.nih.gov/" target="_blank"><strong>U.S. National Library of Medicine</strong></a><strong>&nbsp;</strong><strong><br>
</strong><img border="0" width="25" height="16" src="exercise_clip_image001.png" alt="Description: From the National Institutes of Health"><a href="http://www.nih.gov/" target="_blank"><strong>National Institutes of Health</strong></a></p>
              <div><br>
                <a href="http://www.nlm.nih.gov/medlineplus/">http://www.nlm.nih.gov/medlineplus/</a> </div>
              <h2>Exercise: 7 benefits of regular  physical activity</h2>
              <p><strong>You know exercise is good for you, but do you know how good?  From boosting your mood to improving your sex life, find out how exercise can  improve your life.</strong><br>
                  <a href="http://www.mayoclinic.org/about-this-site/welcome">By  Mayo Clinic Staff</a> <br>
                Want to feel better, have more energy and perhaps even live  longer? Look no further than exercise. The health benefits of regular exercise  and physical activity are hard to ignore. And the benefits of exercise are  yours for the taking, regardless of your age, sex or physical ability. Need  more convincing to exercise? Check out these seven ways exercise can improve  your life.</p>
              <h3>No. 1: Exercise controls weight</h3>
              <p>Exercise can help prevent excess weight gain or help maintain  weight loss. When you engage in physical activity, you burn calories. The more  intense the activity, the more calories you burn. You don't need to set aside  large chunks of time for exercise to reap weight-loss benefits. If you can't do  an actual workout, get more active throughout the day in simple ways — by  taking the stairs instead of the elevator or revving up your household chores.</p>
              <h3>No. 2: Exercise combats health  conditions and diseases</h3>
              <p>Worried about heart disease? Hoping to prevent high blood  pressure? No matter what your current weight, being active boosts high-density  lipoprotein (HDL), or &quot;good,&quot; cholesterol and decreases unhealthy  triglycerides. This one-two punch keeps your blood flowing smoothly, which  decreases your risk of cardiovascular diseases. In fact, regular physical  activity can help you prevent or manage a wide range of health problems and  concerns, including stroke, metabolic syndrome, type 2 diabetes, depression,  certain types of cancer, arthritis and falls.</p>
              <h3>No. 3: Exercise improves mood</h3>
              <p>Need an emotional lift? Or need to blow off some steam after a  stressful day? A workout at the gym or a brisk 30-minute walk can help.  Physical activity stimulates various brain chemicals that may leave you feeling  happier and more relaxed. You may also feel better about your appearance and  yourself when you exercise regularly, which can boost your confidence and  improve your self-esteem.</p>
              <h3>No. 4: Exercise boosts energy</h3>
              <p>Winded by grocery shopping or household chores? Regular physical  activity can improve your muscle strength and boost your endurance. Exercise  and physical activity deliver oxygen and nutrients to your tissues and help  your cardiovascular system work more efficiently. And when your heart and lungs  work more efficiently, you have more energy to go about your daily chores.</p>
              <h3>No. 5: Exercise promotes better sleep</h3>
              <p>Struggling to fall asleep? Or to stay asleep? Regular physical  activity can help you fall asleep faster and deepen your sleep. Just don't  exercise too close to bedtime, or you may be too energized to fall asleep.</p>
              <h3>No. 6: Exercise puts the spark back  into your sex life</h3>
              <p>Do you feel too tired or too out of shape to enjoy physical  intimacy? Regular physical activity can leave you feeling energized and looking  better, which may have a positive effect on your sex life. But there's more to  it than that. Regular physical activity can lead to enhanced arousal for women.  And men who exercise regularly are less likely to have problems with erectile  dysfunction than are men who don't exercise.</p>
              <h3>No. 7: Exercise can be fun</h3>
              <p>Exercise and physical activity can be a fun way to spend some  time. It gives you a chance to unwind, enjoy the outdoors or simply engage in  activities that make you happy. Physical activity can also help you connect  with family or friends in a fun social setting. So, take a dance class, hit the  hiking trails or join a soccer team. Find a physical activity you enjoy, and  just do it. If you get bored, try something new.</p>
              <h3>The bottom line on exercise</h3>
              <p>Exercise and physical activity are a great way to feel better,  gain health benefits and have fun. As a general goal, aim for at least 30  minutes of physical activity every day. If you want to lose weight or meet  specific fitness goals, you may need to exercise more. Remember to check with  your doctor before starting a new exercise program, especially if you haven't  exercised for a long time, have chronic health problems, such as heart disease,  diabetes or arthritis, or you have any concerns.</p>
              <p>Source  : By  Mayo Clinic Staff</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <h1>Why&nbsp;is Physical Activity &amp; Fitness Important?</h1>
              <p><img width="200" height="200" src="exercise_clip_image001.jpg" alt="Description: Two women walk down long set of steps together"> <br>
                Related  Pages&nbsp;<br>
  <a href="http://www.takingcharge.csh.umn.edu/conditions/heart-disease">Heart  Disease</a> <br>
  <a href="http://www.takingcharge.csh.umn.edu/conditions/diabetes">Diabetes</a> <br>
  <a href="http://www.takingcharge.csh.umn.edu/conditions/anxiety-depression">Anxiety  &amp; Depression</a> <br>
  <a href="http://www.takingcharge.csh.umn.edu/conditions/migraine">Migraines</a> <br>
                Would you like to:</p>
              <ul>
                <li>Decrease your risk of  disease?</li>
                <li>Feel better physically and  mentally?</li>
                <li>Look better?</li>
                <li>Help avoid injuries?</li>
                <li>Keep doing activities you  enjoy throughout your life?</li>
              </ul>
              <p>Regular physical  activity will help you do these things. Physical activity is essential to  prevent and reduce risks of many diseases and improve physical and mental  health. It can even help you live longer—research from the&nbsp;<em>American Journal of Preventative  Medicine&nbsp;</em>indicates that  regular exercise can add up to five years to your life.<br>
                Physical activity  also keeps you in shape so you can enjoy leisure activities and safely perform  work and home chores. It offers great mental and social benefits as well. The  Lancet released a series of studies that attribute positive outcomes to  physical activity, including “a<a href="http://www.takingcharge.csh.umn.edu/wellbeing/life-purpose">&nbsp;sense  of purpose</a>&nbsp;and value, a better quality of life, improved<a href="http://www.takingcharge.csh.umn.edu/wellbeing/health/sleep">&nbsp;sleep</a>, and reduced&nbsp;<a href="http://www.takingcharge.csh.umn.edu/wellbeing/health/stress-mastery">stress</a>, as well as&nbsp;<a href="http://www.takingcharge.csh.umn.edu/wellbeing/relationships">stronger  relationships</a>&nbsp;and&nbsp;<a href="http://www.takingcharge.csh.umn.edu/wellbeing/community">social  connectedness</a>.”<br>
                On the other hand,  lack of physical activity is associated with increased risks of:</p>
              <ul>
                <li>Anxiety, stress, and feelings  of depression</li>
                <li>Developing many preventable  conditions, such as high blood pressure, coronary heart diseases, diabetes,  osteoporosis, colon cancer, and obesity</li>
                <li>Dying prematurely</li>
              </ul>
              <p>The authors of the&nbsp;<em>Lancet</em>&nbsp;studies even suggest that the  sedentary lifestyle so common in our culture is more deadly than smoking. They  also believe that 6-10% of the world’s non-communicable diseases (such as heart  disease, diabetes, and certain kinds of cancer) are caused by physical  inactivity.</p>
              <h3>12  important reasons to be physically active</h3>
              <p>1. Be healthier<br>
                2. Increase your  chances of living longer<br>
                3. Feel better about  yourself<br>
                4. Reduce the chance  of becoming depressed<br>
                5. Sleep better at  night<br>
                6. Look good<br>
                7. Be in shape<br>
                8. Get around better<br>
                9. Have stronger  muscles and bones<br>
                10. Achieve or  maintain a healthy weight<br>
                11. Be with friends  or meet new people<br>
                12. Have fun</p>
              <h3>Physical  activity reduces risk for eight conditions</h3>
              <p>According to the  Centers for Disease Control, exercise can reduce your risk of:</p>
              <ul>
                <li><a href="http://www.takingcharge.csh.umn.edu/conditions/heart-disease">Heart  disease</a> </li>
                <li>Stroke</li>
                <li>High blood pressure</li>
                <li><a href="http://www.takingcharge.csh.umn.edu/conditions/diabetes">Type  2 diabetes</a> </li>
                <li>Obesity</li>
                <li><a href="http://www.takingcharge.csh.umn.edu/conditions/anxiety-depression">Depression</a> </li>
                <li><a href="http://www.takingcharge.csh.umn.edu/conditions/cancer">Breast  and colon cancer</a> </li>
                <li>Osteoporosis</li>
              </ul>
              <h3>Fitness  for kids</h3>
              <p>Regular physical  exercise is important for younger generations too, especially with the rise of  obesity in children. Heart disease, type 2 diabetes, asthma, and social  discrimination are just a few of the possible consequences of a childhood spent  in front of the television or the internet. Check out&nbsp;<a href="http://www.letsmove.gov/" target="_blank">Let's Move!</a>&nbsp;for&nbsp;<a href="http://www.takingcharge.csh.umn.edu/glossary/3#term29">nutrition</a>&nbsp;and fitness tips for children.<br>
                  <br>
                Source : Expert Contributor:&nbsp;</p>
              <div><br>
  &nbsp;<a href="http://www.takingcharge.csh.umn.edu/our-experts/mary-jo-kreitzer-rn-phd">Mary Jo Kreitzer, RN, PhD</a>;&nbsp;<a href="http://www.takingcharge.csh.umn.edu/our-experts/archelle-georgiou-md">Archelle Georgiou, MD</a> </div>
              <p>&nbsp;</p>
              <h1>Benefits  of exercise</h1>
              <p>It  can reduce your risk of major illnesses, such as heart disease, stroke,  diabetes&nbsp;and cancer by up to 50% and lower your risk of early death by up  to 30%.<br>
                It’s  free, easy to take, has an immediate effect and you don’t need a GP to get  some.&nbsp;Its name? Exercise.<br>
                Click  on&nbsp;the links below to find out if you're doing enough for your age:</p>
              <ul type="disc">
                <li><a href="http://www.nhs.uk/Livewell/fitness/Pages/physical-activity-guidelines-for-children.aspx">early       childhood (under 5 years old)</a> </li>
                <li><a href="http://www.nhs.uk/Livewell/fitness/Pages/physical-activity-guidelines-for-young-people.aspx">young       people (5-18 years old)</a> </li>
                <li><a href="http://www.nhs.uk/Livewell/fitness/Pages/physical-activity-guidelines-for-adults.aspx">adults       (19-64 years old)</a> </li>
                <li><a href="http://www.nhs.uk/Livewell/fitness/Pages/physical-activity-guidelines-for-older-adults.aspx">older       adults (65 and over)</a> </li>
              </ul>
              <p>Exercise  is the&nbsp;miracle cure we’ve always had, but&nbsp;for too long we’ve  neglected to take our recommended dose.&nbsp;Our health is now suffering as a  consequence.<br>
                This  is no snake oil. Whatever your age, there's strong scientific evidence that  being physically active can help you lead a healthier and even happier life.<br>
                People  who do regular activity have a lower risk of many chronic diseases, such as  heart disease, type 2 diabetes, stroke and some cancers.<br>
                Research  shows that&nbsp;physical activity can also boost self-esteem, mood, sleep  quality and&nbsp;energy, as well as reducing your risk of stress,<a href="http://www.nhs.uk/Livewell/Depression/Pages/Depressionexercise.aspx">depression</a>,  dementia and Alzheimer’s disease.<br>
                “If  exercise were a pill, it would be one of the most cost-effective drugs ever  invented,” says Dr Nick Cavill, a health promotion consultant.</p>
              <h2>Health benefits</h2>
              <p>Given  the overwhelming evidence,&nbsp;it seems obvious that we should all  be&nbsp;physically active. It's essential if you want to live a healthy and  fulfilling life into old age.<br>
                It's&nbsp;medically  proven&nbsp;that people who do regular&nbsp;physical activity have:</p>
              <ul type="disc">
                <li>up to       a&nbsp;35% lower risk of coronary heart disease and stroke</li>
                <li>up to a 50%       lower risk of type 2 diabetes</li>
                <li>up to a 50%       lower risk of colon cancer</li>
                <li>up to a 20%       lower risk of breast cancer</li>
                <li>a 30% lower       risk of early death</li>
                <li>up to an       83% lower risk of osteoarthritis</li>
                <li>up to a 68%       lower risk of hip fracture</li>
                <li>a 30% lower       risk of falls (among older adults)</li>
                <li>up to a 30%       lower risk of depression</li>
                <li>up to a 30%       lower risk of dementia</li>
              </ul>
              <h2>What counts?</h2>
              <p>Moderate-intensity  aerobic activity means you're working hard enough to raise your heart rate and  break a sweat. One way to tell if you're working at a moderate intensity  is&nbsp;if you can still&nbsp;talk but&nbsp;you can't&nbsp;sing the words  to&nbsp;a song.<br>
                Examples  of moderate-intensity aerobic activities are:</p>
              <ul type="disc">
                <li>walking       fast</li>
                <li>water       aerobics</li>
                <li>riding a       bike on level ground or with few hills</li>
                <li>playing       doubles tennis</li>
                <li>pushing a       lawn mower</li>
              </ul>
              <p>Daily  chores such as shopping, cooking or housework don't count towards your 150  minutes. This is&nbsp;because the effort needed to do them&nbsp;isn’t hard  enough to get your heart rate up.</p>
              <h2>A modern problem</h2>
              <p>People  are less active nowadays, partly because technology has made our lives easier.  We drive cars or take public transport. Machines wash our clothes. We entertain  ourselves in front of a TV or computer screen. Fewer people are doing manual  work, and most of us have jobs that involve little physical effort. Work, house  chores, shopping and other necessary activities are far less demanding than for  previous generations.<br>
                We  move around less and burn off less energy than people used to. Research  suggests that many adults spend more than seven hours a day sitting down, at  work, on transport or in their&nbsp;leisure time. People aged over 65 spend 10  hours or more each day sitting or lying down, making them the most sedentary  age group.&nbsp;</p>
              <h2>Sedentary&nbsp;lifestyles</h2>
              <p>Inactivity  is described by the Department of Health as a “silent killer”. Evidence is  emerging that&nbsp;sedentary behaviour, such as sitting or lying down for long  periods,&nbsp;is bad for your health.<br>
                Not  only should you try to raise your activity levels, but you should also reduce  the amount of time you and your family spend sitting down.<br>
                Common  examples of&nbsp;sedentary behaviour include watching TV, using a computer,  using the car&nbsp;for short journeys and sitting down to read, talk or listen  to music – and such behaviour is thought to increase your risk of many chronic  diseases, such as heart disease, stroke and diabetes, as well as weight gain  and obesity.&nbsp;<br>
                “Previous  generations were active more naturally through work and manual labour, but  today we have to find ways of integrating activity into our daily lives,” says  Dr Cavill.<br>
                Whether  it's limiting the time babies spend&nbsp;strapped in their&nbsp;buggies, or  encouraging adults to stand up and move frequently, people of all ages need to  reduce&nbsp;their sedentary behaviour.<br>
                “This  means that each of us needs to think about increasing the types of activities  that suit our lifestyle and can easily be included in our day,” says Dr Cavill.<br>
                Crucially,  you can&nbsp;hit your weekly activity target but still be at risk of ill health  if you spend the rest of the time sitting or lying down. For tips on building  physical activity and exercise into your day, whatever your age, read&nbsp;<a href="http://www.nhs.uk/Livewell/fitness/Pages/Activelifestyle.aspx">Get&nbsp;active  your way</a>.</p>
              <div><br>
                Source : <a href="http://www.nhs.uk/Livewell/fitness/Pages/Whybeactive.aspx">http://www.nhs.uk/Livewell/fitness/Pages/Whybeactive.aspx</a> </div>
              <p>Physical  activity provides long-term health benefits for everyone! By being active, you  will burn calories that you store from eating throughout the day and—it can be  as easy as walking the dog or as rigorous as running a marathon. Providing  opportunities for children to be active early on puts them on a path to better  physical and mental health. It's never too late to jumpstart a healthy  lifestyle.</p>
              <h2>PHYSICAL  ACTIVITY &amp; OBESITY</h2>
              <p>Physical activity, along  with proper nutrition, is beneficial to people of all ages, backgrounds, and  abilities. And it is important that everyone gets active: over the last 20  years, there's been a significant increase in obesity in the United States.  About one-third of U.S. adults (33.8%) are obese and approximately 17% (or 12.5  million) of children and adolescents (aged 2-19 years) are obese.<a href="http://www.fitness.gov/be-active/why-is-it-important/#1">1</a>&nbsp; <br>
                The  health implications of obesity in America are startling:</p>
              <ul>
                <li>If things remain as they are today,  one-third of all children born in the year 2000 or later may suffer from  diabetes at some point in their lives, while many others are likely to face  chronic health problems such as heart disease, high blood pressure, cancer,  diabetes, and asthma.<a href="http://www.fitness.gov/be-active/why-is-it-important/#2">2</a> </li>
                <li>Studies indicate that overweight  youth may never achieve a healthy weight, and up to 70% of obese teens may  become obese adults.<a href="http://www.fitness.gov/be-active/why-is-it-important/#3">3</a> </li>
                <li>Even more worrisome, the cumulative  effect could be that children born in the year 2000 or later may not outlive  their parents.&nbsp;<a href="http://www.fitness.gov/be-active/why-is-it-important/#4">4</a> </li>
              </ul>
              <p>The impact of obesity  doesn't end there. Obesity has personal financial and national economic  implications as well. Those who are obese have medical costs that are $1,429 more  than those of normal weight on average (roughly 42% higher).<a href="http://www.fitness.gov/be-active/why-is-it-important/#5">5</a>&nbsp;And  annual direct costs of childhood obesity are $14.3 billion.<a href="http://www.fitness.gov/be-active/why-is-it-important/#6">6</a>&nbsp; <br>
                By  incorporating physical activity into your daily life—30 minutes for adults and  60 minutes for children—as well as healthy eating, you will experience positive  health benefits and be on the path for a better future.</p>
              <h2>THE IMPACT  OF PHYSICAL ACTIVITY ON YOUR HEALTH</h2>
              <p>Regular  physical activity can produce long-term health benefits. It can help:<br>
                  <img border="0" width="129" height="88" src="exercise_clip_image001_0000.jpg" alt="Description: Child playing soccer"> </p>
              <ul>
                <li>Prevent chronic diseases such as  heart disease, cancer, and stroke (the three leading health-related causes of  death)</li>
                <li>Control weight</li>
                <li>Make your muscles stronger</li>
                <li>Reduce fat</li>
                <li>Promote strong bone, muscle, and  joint development</li>
                <li>Condition heart and lungs</li>
                <li>Build overall strength and endurance</li>
                <li>Improve sleep</li>
                <li>Decrease potential of becoming  depressed</li>
                <li>Increase your energy and self-esteem</li>
                <li>Relieve stress</li>
                <li>Increase your chances of living  longer</li>
              </ul>
              <p>When  you are not physically active, you are more at risk for:</p>
              <ul>
                <li>High blood pressure</li>
                <li>High blood cholesterol</li>
                <li>Stroke</li>
                <li>Type 2 diabetes</li>
                <li>Heart disease</li>
                <li>Cancer</li>
              </ul>
              <p>Source : <a href="http://www.fitness.gov/be-active/why-is-it-important/">http://www.fitness.gov/be-active/why-is-it-important/</a> </p>
              <div><br>
  &nbsp;<a name="1"></a>Centers for Disease Control and Prevention.  U.S. Obesity Trends. (2011). Retrieved from:<a href="http://www.cdc.gov/obesity/data/trends.HTML" target="_blank">http://www.cdc.gov/obesity/data/trends.HTML</a> </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <h2>Health Benefits Of Physical Activity</h2>
              <p>The benefits of exercise extend far beyond weight management. Research  shows that regular physical activity can help reduce your risk for several  diseases and health conditions and improve your overall quality of life.  Regular physical activity can help protect you from the following health  problems.</p>
              <ul>
                <li><a href="http://www.medicinenet.com/script/main/art.asp?articlekey=379">Heart Disease</a>&nbsp;and&nbsp;<a href="http://www.medicinenet.com/script/main/art.asp?articlekey=489">Stroke</a>. Daily physical  activity can help prevent heart disease and stroke by strengthening your heart  muscle, lowering your blood pressure, raising your high-density lipoprotein  (HDL) levels (good&nbsp;<a href="http://www.medicinenet.com/script/main/art.asp?articlekey=320">cholesterol</a>) and lowering  low-density lipoprotein (LDL) levels (bad cholesterol), improving blood flow,  and increasing your heart's working capacity. Optimizing each of these factors can  provide additional benefits of decreasing the risk for&nbsp;<a href="http://www.medicinenet.com/script/main/forum.asp?articlekey=2025">Peripheral Vascular  Disease</a>.</li>
                <li><a href="http://www.medicinenet.com/script/main/art.asp?articlekey=378">High Blood Pressure</a>. Regular physical  activity can reduce blood pressure in those with high blood pressure levels.  Physical activity reduces body fat, which is associated with high blood  pressure.</li>
                <li><a href="http://www.medicinenet.com/script/main/art.asp?articlekey=343">Noninsulin-Dependent  Diabetes</a>. By reducing body fat, physical activity can help  to prevent and control this type of diabetes.</li>
                <li><a href="http://www.medicinenet.com/script/main/art.asp?articlekey=943">Obesity</a>. Physical activity  helps to reduce body fat by building or preserving muscle mass and improving  the body's ability to use calories. When physical activity is combined with  proper nutrition, it can help control weight and prevent obesity, a major risk  factor for many diseases.</li>
                <li><a href="http://www.medicinenet.com/script/main/art.asp?articlekey=289">Back Pain</a>. By increasing  muscle strength and endurance and improving flexibility and posture, regular  exercise helps to prevent back pain.</li>
                <li><a href="http://www.medicinenet.com/script/main/art.asp?articlekey=434">Osteoporosis</a>. Regular  weight-bearing exercise promotes bone formation and may prevent many forms of  bone loss associated with aging.</li>
                <li>Self Esteem And Stress Management.  Studies on the psychological effects of exercise have found that regular  physical activity can improve your mood and the way you feel about yourself.  Researchers have found that exercise is likely to reduce&nbsp;<a href="http://www.medicinenet.com/script/main/art.asp?articlekey=342">depression</a>&nbsp;and&nbsp;<a href="http://www.medicinenet.com/script/main/art.asp?articlekey=440">anxiety</a>&nbsp;and help you  to better manage&nbsp;<a href="http://www.medicinenet.com/script/main/art.asp?articlekey=488">stress</a>.</li>
                <li>Disability. Running and aerobic  exercise have been shown to postpone the development of disability in older  adults.</li>
              </ul>
              <p>Keep these health benefits in mind when deciding whether or not to  exercise.<br>
                Source : <a href="http://www.medicinenet.com/script/main/art.asp?articlekey=10074">http://www.medicinenet.com/script/main/art.asp?articlekey=10074</a></p>
              <div><br>
                ©1996-2014 MedicineNet, Inc. </div>
              <p><strong>The  Importance of Health, Fitness, and Wellness</strong></p>
              <h3>Primary Components of Fitness</h3>
              <p>The four primary components (also known as the  components of health related fitness) that are important to improved physical  health are as follows:<br>
                •&nbsp;<strong>Cardiorespiratory  capacity</strong>&nbsp;is the  ability of the body to take in oxygen (respiration), deliver it to the cells  (circulation), and use it at the cellular level to create energy  (bioenergetics) for physical work (activity). In fitness, we also refer to  cardiorespiratory capacity as aerobic capacity. This capacity includes aerobic  endurance (how long), aerobic strength (how hard), and aerobic power (how  fast). Some of the long-term adaptations of cardiorespiratory training are:  decreased resting heart rate, decreased risk of cardiovascular disease,  improved endurance, increased stroke volume and cardiac output.<br>
                •&nbsp;<strong>Muscular  capacity</strong>&nbsp;refers  to the spectrum of muscular capability. This includes muscular endurance (i.e.,  the ability to apply force over a long period of time or to complete repeated  muscle contractions); muscular strength (i.e., the ability to generate force,  or the maximum amount of force that a muscle can exert in a single contraction);  and muscular power (i.e., the ability to generate strength in an explosive  way). Some of the long-term adaptations of improving muscular capacity are  increased strength, improved muscular endurance, increased basal metabolic  rate, improved joint strength, and overall posture.<br>
                •&nbsp;<strong>Flexibility</strong>&nbsp;is the range of movement or amount of  motion that a joint is capable of performing. Each joint has a different amount  of flexibility. Some of the long-term adaptations of improved flexibility are  decreased risk of injury, improved range of motion, improved bodily movements,  and improved posture.<br>
                •&nbsp;<strong>Body  composition</strong>&nbsp;is  the proportion of fat-free mass (muscle, bone, blood, organs, and fluids) to  fat mass (adipose tissue deposited under the skin and around organs). Some of  the long-term adaptations of improving body composition are decreased risk of  cardiovascular disease, improved basal metabolic rate, improved bodily  function, and improved BMI.</p>
              <h3>Secondary Components of Fitness</h3>
              <p>The secondary components of fitness (also known  as the components of performance based fitness) are involved in all physical  activity and are necessary for daily functioning. Athletes experience different  levels of success depending on how well these secondary fitness components are  developed. Although the primary components of fitness are thought to be the  most important, we should not ignore the secondary components because of their  importance in the completion of daily tasks. The secondary components include  the following.<br>
                •&nbsp;<strong>Balance</strong>&nbsp;is the ability to maintain a specific  body position in either a stationary or dynamic (moving) situation.<br>
                •&nbsp;<strong>Coordination</strong>&nbsp;is the ability to use all body parts  together to produce smooth and fluid motion.<br>
                •&nbsp;<strong>Agility</strong>&nbsp;is the ability to change direction  quickly.<br>
                •&nbsp;<strong>Reaction  time</strong>&nbsp;is the time  required to respond to a specific stimulus.<br>
                •&nbsp;<strong>Speed</strong>&nbsp;is the ability to move rapidly. Speed  is also known as velocity (rate of motion).<br>
                •&nbsp;<strong>Power</strong>&nbsp;is the product of strength and speed.  Power is also known as explosive strength.<br>
                •&nbsp;<strong>Mental  capability</strong>&nbsp;is the  ability to concentrate during exercise to improve training effects as well as  the ability to relax and enjoy the psychological benefits of activity  (endorphins).</p>
              <h3>Health and Wellness</h3>
              <p>Health is a dynamic process because it is always  changing. We all have times of good health, times of sickness, and maybe even  times of serious illness. As our lifestyles change, so does our level of  health.<br>
                Those of us who participate in regular physical  activity do so partly to improve the current and future level of our health. We  strive toward an optimal state of well-being. As our lifestyle improves, our  health also improves and we experience less disease and sickness. When most  people are asked what it means to be healthy, they normally respond with the  four components of fitness mentioned earlier (cardiorespiratory ability,  muscular ability, flexibility, and body composition). Although these components  are a critical part of being healthy, they are not the only contributing  factors. Physical health is only one aspect of our overall health.<br>
                The other components of health (Greenberg, 2004,  p. 7) that are just as important as physical health include the following:<br>
                •&nbsp;<strong>Social  health</strong>-The ability to interact well with people and the  environment and to have satisfying personal relationships.<br>
                •&nbsp;<strong>Mental  health</strong>-The ability to learn and grow intellectually. Life  experiences as well as more formal structures (e.g., school) enhance mental  health.<br>
                •&nbsp;<strong>Emotional  health</strong>-The ability to control emotions so that you feel  comfortable expressing them and can express them appropriately.<br>
                •&nbsp;<strong>Spiritual  health</strong>-A belief in some unifying force. It varies from person  to person but has the concept of faith at its core.<br>
                Wellness is the search for enhanced quality of  life, personal growth, and potential through positive lifestyle behaviours and  attitudes. If we take responsibility for our own health and well-being, we can  improve our health on a daily basis. Certain factors influence our state of  wellness, including nutrition, physical activity, stress-coping methods, good  relationships, and career success.<br>
                Each day we work toward maximizing our level of  health and wellness to live long, full, and healthy lives. The pursuit of  health, personal growth, and improved quality of life relies on living a  balanced life. To achieve balance, we need to care for our mind, body, and  spirit.<br>
                If any of these three areas is consistently  lacking or forgotten about, we will not be at our optimal level of health. We  are constantly challenged with balancing each of these three areas throughout  life.<br>
                As fitness professionals, we have a  responsibility to guide and motivate others to improve their level of health  and wellness. We can promote a holistic approach to health (mind, body, and  spirit), not just encourage physical activity. As good role models, we should  demonstrate positive health behaviours that assist in improving our own health  and the health of others. If our focus is strictly on the physical benefits of  exercise, we are doing a disservice to our clients and we are not fulfilling  our professional obligation.</p>
              <h3>Benefits of Physical Activity</h3>
              <p>As fitness professionals, we spend a great deal  of time inspiring and assisting others in their pursuit of improved health.  Education is an important aspect of this. We must promote the benefits of  regular activity and help people understand why they should be active.<br>
                Figure 1.2 will help you educate your clients  about the benefits of activity and why each of these benefits is important to  long-term health.</p>
              <h3>Activity Guidelines</h3>
              <p>Health Canada introduced Canada’s Physical  Activity Guide to Healthy Active Living to help Canadians make wise choices  about physical activity as a way to improve health. Scientists say you should  accumulate 60 minutes of physical activity every day to stay healthy or improve  health. The recommendations in the Physical Activity Guide are as follows:<br>
                • Endurance-On 4 to 7 days a week, perform  continuous activity for your heart, lungs, and circulatory system. Time  required for improvements depends on effort.<br>
                • Flexibility-On 4 to 7 days a week, perform  gentle reaching, bending, and stretching to keep muscles relaxed and joints  mobile.<br>
                • Strength-On 2 to 4 days a week, perform  resistance exercise to strengthen muscles and bones and improve posture.<br>
                The American College of Sports Medicine (ACSM)  has also developed activity guidelines for improving health:<br>
                • Perform 30 minutes or more of  moderate-intensity physical activity on most days of the week for  cardiovascular health. The 30 minutes need not be continuous.<br>
                • Performing 1 set of 8 to 12 repetitions of  resistance training for the entire body is necessary to maintain and develop  muscular strength and endurance.<br>
                • Flexibility training should be performed  daily, including stretches for all major muscle groups, in order to maintain  mobility.</p>
              <div>
                <p>Source : <a href="http://www.humankinetics.com/excerpts/excerpts/the-importance-of-health-fitness-and-wellness">http://www.humankinetics.com/excerpts/excerpts/the-importance-of-health-fitness-and-wellness</a> </p>
              </div>
              <p>&nbsp;</p>
              <ul>
                <li>Correspondence to Jonathan Myers, PhD,  Cardiology 111-C, VA Palo Alto Health Care System, 3801 Miranda Ave, Palo Alto,  CA 94304. E-mail&nbsp;<a href="mailto:drj993@aol.com">drj993@aol.com</a> </li>
              </ul>
              <p>Over  the past 4 decades, numerous scientific reports have examined the relationships  between physical activity, physical fitness, and cardiovascular health. Expert  panels, convened by organizations such as the Centers for Disease Control and  Prevention (CDC), the American College of Sports Medicine (ACSM), and the  American Heart Association (AHA),<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-1">1–3</a>&nbsp;along with the 1996 US Surgeon General’s  Report on Physical Activity and Health,<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-4">4</a>&nbsp;reinforced scientific evidence linking  regular physical activity to various measures of cardiovascular health. The  prevailing view in these reports is that more active or fit individuals tend to  develop less coronary heart disease (CHD) than their sedentary counterparts. If  CHD develops in active or fit individuals, it occurs at a later age and tends  to be less severe.<br>
                As  many as 250 000 deaths per year in the United States are attributable to a lack  of regular physical activity. In addition, studies that followed large groups  of individuals for many years have documented the protective effects of  physical activity for a number of noncardiovascular chronic diseases, such as  non–insulin-dependent diabetes, hypertension, osteoporosis, and colon cancer.<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-4">4</a>&nbsp;In contrast, we see a higher rate of  cardiovascular events and a higher death rate in those individuals with low  levels of physical fitness.<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-1">1,4</a>&nbsp;Even midlife increases in physical  activity, through change in occupation or recreational activities, are  associated with a decrease in mortality.<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-5">5</a>&nbsp;Despite this evidence, however, the vast  majority of adults in the United States remains effectively sedentary; less  than one-third of Americans meets the minimal recommendations for activity as  outlined by the CDC, ACSM, and AHA expert panels.</p>
              <p><a href="http://circ.ahajournals.org/content/107/1/e2.full#sec-5" title="How Much Exercise Is Enough?">Next  Section</a> </p>
              <div>
                <h2>What Are the Benefits of Exercise?</h2>
              </div>
              <p>A sedentary lifestyle is one of the 5  major risk factors (along with high blood pressure, abnormal values for blood  lipids, smoking, and obesity) for cardiovascular disease, as outlined by the  AHA. Evidence from many scientific studies shows that reducing these risk  factors decreases the chance of having a heart attack or experiencing another  cardiac event, such as a stroke, and reduces the possibility of needing a  coronary revascularization procedure (bypass surgery or coronary angioplasty).  Regular exercise has a favorable effect on many of the established risk factors  for cardiovascular disease. For example, exercise promotes weight reduction and  can help reduce blood pressure. Exercise can reduce “bad” cholesterol levels in  the blood (the low-density lipoprotein [LDL] level), as well as total  cholesterol, and can raise the “good” cholesterol (the high-density lipoprotein  level [HDL]). In diabetic patients, regular activity favorably affects the  body’s ability to use insulin to control glucose levels in the blood. Although  the effect of an exercise program on any single risk factor may generally be  small, the effect of continued, moderate exercise on overall cardiovascular  risk, when combined with other lifestyle modifications (such as proper  nutrition, smoking cessation,and medication use), can be dramatic.</p>
              <h3>Benefits of Regular  Exercise on Cardiovascular Risk Factors</h3>
              <ul>
                <li>Increase in exercise tolerance</li>
                <li>Reduction in body weight</li>
                <li>Reduction in blood pressure</li>
                <li>Reduction in bad (LDL and total) cholesterol</li>
                <li>Increase in good (HDL) cholesterol</li>
                <li>Increase in insulin sensitivity</li>
              </ul>
              <p>There are a number of physiological  benefits of exercise; 2 examples are improvements in muscular function and  strength and improvement in the body’s ability to take in and use oxygen  (maximal oxygen consumption or aerobic capacity). As one’s ability to transport  and use oxygen improves, regular daily activities can be performed with less  fatigue. This is particularly important for patients with cardiovascular  disease, whose exercise capacity is typically lower than that of healthy  individuals. There is also evidence that exercise training improves the capacity  of the blood vessels to dilate in response to exercise or hormones, consistent  with better vascular wall function and an improved ability to provide oxygen to  the muscles during exercise. Studies measuring muscular strength and  flexibility before and after exercise programs suggest that there are  improvements in bone health and ability to perform daily activities, as well as  a lower likelihood of developing back pain and of disability, particularly in  older age groups.<br>
                Patients with newly diagnosed heart disease  who participate in an exercise program report an earlier return to work and  improvements in other measures of quality of life, such as more  self-confidence, lower stress, and less anxiety. Importantly, by combining  controlled studies, researchers have found that for heart attack patients who  participated in a formal exercise program, the death rate is reduced by 20% to  25%. This is strong evidence in support of physical activity for patients with  heart disease. Although the benefits of exercise are unquestionable, it should  be noted that exercise programs alone for patients with heart disease have not  convincingly shown improvement in the heart’s pumping ability or the diameter  of the coronary vessels that supply oxygen to the heart muscle.<br>
  <a href="http://circ.ahajournals.org/content/107/1/e2.full#sec-2" title="What Are the Benefits of Exercise?">Previous Section</a><a href="http://circ.ahajournals.org/content/107/1/e2.full#sec-7" title="Physical Fitness and Mortality">Next Section</a> </p>
              <div>
                <h2>How Much Exercise Is Enough?</h2>
              </div>
              <p>In  1996, the release of the Surgeon General’s Report on Physical Activity and  Health provided a springboard for the largest government effort to date to  promote physical activity among Americans. This historic turning point  redefined exercise as a key component to health promotion and disease  prevention, and on the basis of this report, the Federal government mounted a  multi-year educational campaign. The Surgeon General’s Report, a joint CDC/ACSM  consensus statement, and a National Institutes of Health report agreed that the  benefits mentioned above will generally occur by engaging in at least 30  minutes of modest activity on most, preferably all, days of the week. Modest  activity is defined as any activity that is similar in intensity to brisk  walking at a rate of about 3 to 4 miles per hour. These activities can include  any other form of occupational or recreational activity that is dynamic in  nature and of similar intensity, such as cycling, yard work, and swimming. This  amount of exercise equates to approximately five to seven 30-minute sessions  per week at an intensity equivalent to 3 to 6 METs (multiples of the resting  metabolic rate<a href="http://circ.ahajournals.org/content/107/1/e2.full#fn-1">*</a>), or approximately 600 to 1200 calories  expended per week.<br>
                Note that the specific phrase “…30 minutes  of accumulated activity…” is used in the above-mentioned reports. It has been  shown that repeated intermittent or shorter bouts of activity (such as 10  minutes) that include occupational and recreational activity or the tasks of  daily living have similar cardiovascular and other health benefits if performed  at the moderate intensity level with an accumulated duration of at least 30  minutes per day. People who already meet these standards will receive  additional benefits from more vigorous activity.<br>
                Many of the studies documenting the  benefits of exercise typically use programs consisting of 30 to 60 minutes of  continuous exercise 3 days per week at an intensity corresponding to 60% to 75%  of the individual’s heart rate reserve. It is not usually necessary, however,  for healthy adults to measure heart rate diligently because substantial health  benefits can occur through modest levels of daily activity, irrespective of the  specific exercise intensity. In fact, researchers estimate that as much as a  30% to 40% reduction in cardiovascular events is possible if most Americans  were simply to meet the government recommendations for activity.</p>
              <h3>Recommendation for  Physical Activity From the CDC/ACSM Consensus Statement and Surgeon General’s  Report</h3>
              <p><em>Every American adult should participate in 30 minutes or more of  moderate intensity activity on most, and preferably all, days of the week</em>.</p>
              <ul>
                <li>Moderate activities: activities comparable to walking briskly at  about 3 to 4 miles per hour; may include wide variety of occupational or  recreational activities, including yard work, household tasks, cycling,  swimming, etc.</li>
                <li>Thirty minutes of moderate activity daily equates to 600 to 1200  calories of energy expended per week.</li>
              </ul>
              <p><a href="http://circ.ahajournals.org/content/107/1/e2.full#sec-5" title="How Much Exercise Is Enough?">Previous  Section</a><a href="http://circ.ahajournals.org/content/107/1/e2.full#sec-8" title="What Are the Risks of Exercise?">Next Section</a> </p>
              <div>
                <h2>Physical Fitness and Mortality</h2>
              </div>
              <p>One  need not be a marathon runner or an elite athlete to derive significant  benefits from physical activity. In fact, the Surgeon General’s physical  activity recommendations seem surprisingly modest. One reason for this is that  the greatest gains in terms of mortality are achieved when an individual goes  from being sedentary to becoming moderately active. Studies show that less is  gained when an individual goes from being moderately active to very active. In  a study performed among US veterans, subjects were classified into 5 categories  according to fitness level. The largest gains in terms of mortality were  achieved between the lowest fitness group and the next lowest fitness group.  The researchers studied 6213 men over a 6-year period and compared the risks of  death (after allowing for age adjustment) by gradients of physical fitness.<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-6">6</a>&nbsp;The&nbsp;<a href="http://circ.ahajournals.org/content/107/1/e2.full#F1">Figure</a>&nbsp;shows the relative risks associated with the different  categories (1 to 5, lowest to highest) of fitness measured. Healthy adults who  are the least fit have a mortality risk that is 4.5 times that of the most fit.  Surprisingly, an individual’s fitness level was a more important predictor of  death than established risk factors such as smoking, high blood pressure, high  cholesterol, and diabetes. This study, along with others, underscores the fact  that fitness and daily activity levels have a strong influence on the incidence  of heart disease and overall mortality.<br>
                  <a href="http://circ.ahajournals.org/content/107/1/e2/F1.expansion.html"><img border="0" width="200" height="145" src="exercise_clip_image001.gif" alt="Description: Figure"></a> <br>
                View larger version: </p>
              <ul>
                <li><a href="http://circ.ahajournals.org/content/107/1/e2/F1.expansion.html">In this page</a> </li>
              </ul>
              <ul>
                <li><a href="http://circ.ahajournals.org/content/107/1/e2/F1.expansion.html" target="_blank">In a new window</a> </li>
                <li><a href="http://circ.ahajournals.org/powerpoint/107/1/e2/F1">Download as PowerPoint Slide</a> </li>
              </ul>
              <p>Age-adjusted  mortality rates in healthy men categorized by level of fitness. The range of  values for exercise capacity (METs) for each category are represented within  each bar (modified from reference&nbsp;<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-6">6</a>).<br>
                <a href="http://circ.ahajournals.org/content/107/1/e2.full#sec-7" title="Physical Fitness and Mortality">Previous Section</a><a href="http://circ.ahajournals.org/content/107/1/e2.full#sec-9" title="How Should You Begin if You Want to Become More Physically Active?">Next Section</a> </p>
              <div>
                <h2>What Are the Risks of Exercise?</h2>
              </div>
              <p>During  exercise, there is a transient increase in the risk of having a cardiac-related  complication (for example, a heart attack or serious heart rhythm disorder).  However, this risk is extremely small. For adults without existing heart  disease, the risk of a cardiac event or complication ranges between 1 in 400  000–800 000 hours of exercise. For patients with existing heart disease, an  event can occur an average of once in 62 000 hours.<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-2">2,3</a>&nbsp;Importantly, the risk of a cardiac event  is significantly lower among regular exercisers. Evidence suggests that a  sedentary person’s risk is nearly 50 times higher than the risk for a person  who exercises about 5 times per week. Stated simply, individuals who exercise  regularly are much less likely to experience a problem during exercise.  Moreover, contrary to popular view, the majority of heart attacks  (approximately 90%) occur in the resting state, not during physical activity.<br>
                Exercise  is therefore considered to be extremely safe. Nevertheless, it is a good idea  to be aware of the warning signs or symptoms that may indicate a problem: chest  discomfort (pain or pressure in the chest, jaw, or neck, possibly radiating  into the shoulder, arm, or back), unusual shortness of breath, dizziness or  light-headedness, and heart rhythm abnormalities (sensations of heart beat  skipping, palpitations, or thumping). If one of these symptoms occurs, medical  attention should be sought immediately (see also Cardiology Patient Page by  Ornato JP, Hand MM. Warning signs of a heart attack.&nbsp;<em>Circulation</em>.  2001;104:1212-1213).<br>
  <a href="http://circ.ahajournals.org/content/107/1/e2.full#sec-8" title="What Are the Risks of Exercise?">Previous Section</a><a href="http://circ.ahajournals.org/content/107/1/e2.full#fn-group-1" title="Footnotes">Next Section</a> </p>
              <div>
                <h2>How Should You Begin if You Want to Become  More Physically Active?</h2>
              </div>
              <p>First,  if you currently have heart disease or are over 45 years of age and have 2 or  more risk factors (immediate family member with heart disease before age 55,  cigarette smoking, high blood pressure, abnormal cholesterol levels, diabetes,  sedentary lifestyle, or obesity), you should consult your physician before  starting any type of exercise.<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-2">2</a>&nbsp;Clearly, most people can derive  significant benefits from integrating a half hour of moderate activity into  their day. If you know you simply cannot or will not set aside a half hour of  activity on a given day, then try to work more activities into the day by  taking the stairs rather than the elevator, or try walking rather than driving  a short distance to the store. Try to work several shorter periods of activity,  such as 10 minutes, into your schedule. The most important thing is to get  started. There is mounting evidence in the scientific literature that physical  activity and physical fitness have a powerful influence on a host of chronic  diseases, a fact underscored by the recent Surgeon General’s report on Physical  Activity and Health.<a href="http://circ.ahajournals.org/content/107/1/e2.full#ref-4">4</a>&nbsp;Reducing the risk of heart disease through  greater physical activity could have an enormous impact on health in the United  States.</p>
              <p>Source : <a href="http://circ.ahajournals.org/content/107/1/e2.full">http://circ.ahajournals.org/content/107/1/e2.full</a> </p>
              -------------------------------------------------------------------------------------------------------------------------------
              <p>&nbsp;</p>
              <p>&nbsp; </p>
              <p>&nbsp; </p>
              <!--end of the carousel --></div>


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
                                           <input type="text" name="number" class="form-control" placeholder="number">
                                            <label>Email Address</label>
										   <input type="text" name="emailAddress" class="form-control" placeholder="email address">

										     
                                    
										 
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
	
	<hr>

</body>

</html>
