
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
                    <h1 class="page-header"><i class="fa fa-home fa-fw"></i> Brushing of Teeth</h1>
                </div>
                <!--End Page Header -->
            </div>

            


           

              <!--start of the carousel -->
              <p>Brushing  your teeth is not only good for your pearly whites, it also decreases your  chances of suffering a&nbsp;<a href="http://www.webmd.com/heart-disease/guide/heart-disease-heart-attacks">heart attack</a>, a new study indicates.<br>
                Researchers  in England analyzed data from more than 11,000 people taking part in a study  called the Scottish Health Survey. They examined lifestyle habits such as  smoking, overall&nbsp;<a href="http://www.webmd.com/fitness-exercise/guide/default.htm">physical activity</a>, and oral health routines.<br>
                Patients  were asked whether they visited a dentist at least once every six months, every  one to two years, rarely, or never. They were also asked how often they brushed  their teeth -- twice daily, once a day, or less than every day.<br>
                The researchers  found that:</p>
              <ul>
                <li>62% of participants said they went to  a dentist every six months.</li>
                <li>71% said they brushed their teeth  twice a day.</li>
              </ul>
              <p>After  adjusting the data for cardiovascular risk factors such as obesity, smoking,  social class, and family&nbsp;<a href="http://www.webmd.com/heart-disease/default.htm">heart disease</a>&nbsp;history, the researchers found  that people who admitted to brushing their teeth less frequently had a 70%  extra risk of heart disease.<br>
                People who  reported poor oral hygiene also tested positive for bloodstream inflammatory  markers such as fibrinogen and C-reactive protein.<br>
  &quot;Our  results confirmed and further strengthened the suggested association between  oral hygiene and the risk of cardiovascular disease,&quot; Richard Watt, DDS,  of University College London, says in a news release. &quot;Furthermore,  inflammatory markers were significantly associated with a very simple measure  of poor oral health behavior.&quot;<br>
                He says  more studies are needed to confirm the findings and to determine whether oral  health and cardiovascular disease are causal or simply risk markers.<br>
                The  findings of the study were not necessarily shocking, the researchers say,  because scientists have increasingly wondered about a possible connection  between dental disease and cardiovascular health.<br>
  &quot;Inflammation  plays an important role in the pathogenesis of <a href="http://www.webmd.com/heart-disease/what-is-atherosclerosis">atherosclerosis</a>, and markers of low grade  inflammation have been consistently associated with a higher risk of cardiovascular  disease,&quot; they write.<br>
                Poor oral  hygiene is the major cause of&nbsp;<a href="http://www.webmd.com/oral-health/guide/gingivitis-periodontal-disease">periodontal disease</a>, a chronic infection of the tissues  surrounding the teeth. Thus, gum infections seem to add to the inflammatory  burden on individuals, increasing cardiovascular risk, the researchers say.<br>
                Oral  infections are common, so doctors should be alert to infections in the mouth as  signs of increased inflammation, and tell patients to brush their teeth and  maintain good oral hygiene, the researchers conclude.</p>
              <p>By&nbsp;<a href="http://www.webmd.com/bill-hendrick">Bill Hendrick</a><br>
                WebMD Health News</p>
              <div><br>
                Reviewed by&nbsp;<a href="http://www.webmd.com/elizabeth-klodas">Elizabeth Klodas, MD, FACC</a> </div>
              <p><strong>&nbsp;</strong></p>
              <p><strong>How to Brush</strong><br>
                  <strong>What Is  the Right Way to Brush?</strong><br>
                Proper&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Brushing.cvsp">brushing</a>&nbsp;takes  at least two minutes — that's right, 120 seconds! Most adults do not come close  to brushing that long. To get a feel for the time involved, try using a  stopwatch. To properly brush your teeth, use short, gentle strokes, paying  extra attention to the&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Gumline.cvsp">gumline</a>, hard-to-reach back teeth and areas around&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Fillings.cvsp">fillings</a>,&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Crowns.cvsp">crowns</a>&nbsp;or  other restoration. Concentrate on thoroughly&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Cleaning.cvsp">cleaning</a>&nbsp;each  section as follows:</p>
              <ul>
                <li>Clean the outer surfaces of your  upper teeth, then your lower teeth</li>
                <li>Clean the inner surfaces of your  upper teeth, then your lower teeth</li>
                <li>Clean the chewing surfaces</li>
                <li>For fresher breath, be sure to brush  your tongue, too</li>
              </ul>
              <table border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td><p><img border="0" width="110" height="113" src="brush_clip_image001.jpg" alt="Description: brush1"> </p></td>
                  <td><p><img border="0" width="110" height="113" src="brush_clip_image002.jpg" alt="Description: brush2"> </p></td>
                  <td><p><img border="0" width="110" height="113" src="brush_clip_image003.jpg" alt="Description: brush3"> </p></td>
                </tr>
                <tr>
                  <td valign="top"><p>Tilt the brush at a 45° angle    against the gumline and sweep or roll the brush away from the gumline.</p></td>
                  <td valign="top"><p>Gently brush the outside,    inside and chewing surface of each&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Tooth.cvsp">tooth</a>&nbsp;using    short back-and-forth strokes.</p></td>
                  <td valign="top"><p>Gently brush your tongue to    remove bacteria and freshen breath.</p></td>
                </tr>
              </table>
              <p><strong>What Type  of Toothbrush Should I Use?</strong><br>
                Most dental professionals agree that a soft-bristled brush is best for  removing&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Plaque.cvsp">plaque</a>&nbsp;and  debris from your teeth. Small-headed brushes are also preferable, since they  can better reach all areas of the mouth, including hard-to-reach back teeth.  For many, a powered toothbrush is a good alternative. It can do a better job of  cleaning teeth, particularly for those who have difficulty brushing or who have  limited manual dexterity. To find the right Colgate toothbrush for you,&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Products/Toothbrushes.cvsp">click here</a>.<br>
  <strong>How  Important is the Toothpaste I Use?</strong><br>
                It is important that you use a toothpaste that's right for you. Today there is  a wide variety of toothpaste designed for many conditions,  including&nbsp;cavities,&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Articles/Oral-and-Dental-Health-Basics/Common-Concerns/Gum-Disease/article/What-is-Gingivitis-Signs-and-Symptoms.cvsp">gingivitis</a>,&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Articles/Oral-and-Dental-Health-Basics/Common-Concerns/Plaque-and-Tartar/article/What-is-Tartar.cvsp">tartar</a>, stained  teeth and sensitivity. Ask your dentist or dental&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Hygienist.cvsp">hygienist</a>&nbsp;which  toothpaste is right for you. To find the right Colgate toothpaste for you,&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Products/Toothpastes.cvsp">click here</a>.<br>
  <strong>How Often  Should I Replace My Toothbrush?</strong><br>
                You should replace your toothbrush when it begins to show wear, or every three  months, whichever comes first. It is also very important to change toothbrushes  after you've had a cold, since the bristles can collect germs that can lead to  reinfection.<br>
  <a href="http://www.colgate.com/app/Colgate/US/HomePage.cvsp"><strong><img border="0" width="103" height="48" src="brush_clip_image004.png" alt="Description: Colgate"></strong></a><a href="http://www.colgate.com/app/CP/US/EN/OC/Information.cvsp"><strong><img border="0" width="325" height="48" src="brush_clip_image005.png" alt="Description: Colgate Oral and Dental Health Resource Center"></strong></a><strong> </strong></p>
              <div> </div>
              <p>&nbsp;</p>
              <p>Brushing with toothpaste is  important for several reasons. First and foremost, a toothpaste and a correct  brushing action work to remove plaque, a sticky, harmful film of bacteria that  grows on your teeth that causes cavities, gum disease and eventual tooth loss  if not controlled. Second, toothpaste contains fluoride, which makes the entire  tooth structure more resistant to decay and promotes remineralization, which  aids in repairing early decay before the damage can even be seen. Third,  special ingredients in toothpaste help to clean and polish the teeth and remove  stains over time. Fourth, toothpastes help freshen breath and leave your mouth  with a clean feeling.</p>
              <p><strong>Is brushing with toothpaste  enough to fight cavities and gum disease?</strong> </p>
              <p>No. Although brushing  thoroughly after each meal helps, flossing your teeth every day to remove  plaque and food particles between teeth and at the gumline is just as  important. Studies show that plaque will regrow on teeth that are completely  clean within three to four hours of brushing.</p>
              <div>
                <p>&nbsp;</p>
              </div>
              <p>&nbsp;</p>
              <h1>Taking Care of Your Teeth</h1>
              <p>Thanks to better at-home  care and in-office dental treatments, more people are keeping their teeth  throughout their lives. Some diseases and conditions can maTaking Care of Your  Teeth<br>
                Thanks to better at-home care  and in-office dental treatments, more people are keeping their teeth throughout  their lives. Some diseases and conditions can make dental disease and&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Tooth.cvsp">tooth</a>&nbsp;loss more likely. But  most of us have a good deal of control over whether we keep our teeth into old  age.<br>
                The most important thing  you can do is to&nbsp;<a href="http://www.simplestepsdental.com/SS/ihtSS/r.WSIHW000/st.31843/t.31879/pr.3.html"><strong>brush  and floss</strong></a>&nbsp;your  teeth each day.<br>
                Most mouth woes are  caused by&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Plaque.cvsp">plaque</a>.  Plaque is a sticky layer of bacteria, bits of food and other organic matter  that forms on your teeth. The bacteria in plaque make acids that cause  cavities. Plaque also leads to periodontal (gum) disease. This can become a  serious infection. It can damage bone and destroy the tissues around your  teeth.<br>
                The best defense is to  remove plaque before it has a chance to build up and cause problems.&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Brushing.cvsp">Brushing</a>&nbsp;removes plaque from the  large surfaces of the teeth and from just under the&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Glossary/Gums.cvsp">gums</a>.&nbsp;<a href="http://www.colgate.com/app/CP/US/EN/OC/Information/Articles/Oral-and-Dental-Health-Basics/Oral-Hygiene/Brushing-and-Flossing/article/How-to-Floss.cvsp">Flossing</a>&nbsp;removes plaque from  between your teeth. You also can use other tools to keep your mouth and teeth  clean.<br>
                Read more about&nbsp;<a href="http://www.simplestepsdental.com/SS/ihtSS/r.WSIHW000/st.31845/t.452802/pr.3.html"><strong>brushing,</strong></a>&nbsp;including a how-to video,  as well as how to choose the right toothbrush and toothpaste.<br>
                Read more about&nbsp;<a href="http://www.simplestepsdental.com/SS/ihtSS/r.WSIHW000/st.31845/t.452803/pr.3.html"><strong>flossing,</strong></a>&nbsp;including a how-to  animation. Learn how to choose the floss that will work best for you.<br>
                Read more about&nbsp;<a href="http://www.simplestepsdental.com/SS/ihtSS/r.WSIHW000/st.31845/t.452804/pr.3.html"><strong>other  cleaning tools,</strong></a>&nbsp;including  mouthwashes, oral irrigators and interdental cleaners.<br>
                ke dental disease and  tooth loss more likely. But most of us have a good deal of control over whether  we keep our teeth into old age.<br>
                The most important thing  you can do is to&nbsp;<a href="http://www.simplestepsdental.com/SS/ihtSS/r.WSIHW000/st.31843/t.31879/pr.3.html"><strong>brush  and floss</strong></a>&nbsp;your  teeth each day.<br>
                Most mouth woes are  caused by plaque. Plaque is a sticky layer of bacteria, bits of food and other  organic matter that forms on your teeth. The bacteria in plaque make acids that  cause cavities. Plaque also leads to periodontal (gum) disease. This can become  a serious infection. It can damage bone and destroy the tissues around your  teeth.<br>
                The best defense is to  remove plaque before it has a chance to build up and cause problems. Brushing  removes plaque from the large surfaces of the teeth and from just under the  gums. Flossing removes plaque from between your teeth. You also can use other  tools to keep your mouth and teeth clean.</p>
              <div> </div>
              <p>&nbsp;</p>
              <p>Let’s face it. Brushing your teeth can be a huge pain. It’s a pain to  have to remember to do it twice a day, and the actual activity is just not that  enjoyable. It can be very easy to skip brushing for a few days or even weeks  when the results from not brushing are not immediately evident.<br>
                  <a href="http://blog.sesamehub.com/posner-howard/files/2013/01/medium_2588641109.jpg" target="_blank"><img border="0" width="300" height="199" src="brush_clip_image006.jpg" alt="Description: http://blog.sesamehub.com/posner-howard/files/2013/01/medium_2588641109-300x199.jpg"></a>The main reason why brushing  your teeth regularly is so important is because it helps prevent tooth decay. A  commonly accepted fact is that most people don’t like going to the dentist. So  what better way to avoid going to the dentist than to brush your teeth daily? I  can’t think of one.<br>
                Another big reason why it’s important to brush your teeth is that this  daily activity helps prevent gum disease. No, you don’t have to chew tobacco to  get gum disease. Yes, you can get it if you don’t brush your teeth often  enough. Granted, it would take many consecutive days of skipping brushing your  teeth to have gum disease start developing in your mouth. But it is still a  reality. Be careful.<br>
                Another reason why it is crucial to regularly brush your teeth is  because it helps your breath not to stink. Let’s be real for a minute, who  wants to have bad breath? And secondly, who wants to be around someone who bad  breath. That’s right, no one. Not a single person. Bad breath is vile and  disgusting, but also easily fixable. Brushing your teeth at least 2 times a day  keeps those nasty-smelling bacteria out of your mouth and keeps them from being  blown into your friends’ faces every time you open your mouth.<br>
                It’s also important to brush because when you brush, you’re getting a  lot of the plaque build-up off of your teeth. Plaque build-up is harmful  because it can lead to gum disease and tooth decay. It can also severely  irritate the gums.<br>
                So, the lesson that we learned here today is to always brush your teeth.  Brush your teeth twice a day. Brush your teeth thrice a day. Do whatever you  need to do to make sure your teeth stay brushed, your gums stay healthy, and  your breath stays fresh!<br>
                Source : <a href="http://www.posnerandhenderson.com/blog/2013/01/why-is-brushing-your-teeth-so-important">http://www.posnerandhenderson.com/blog/2013/01/why-is-brushing-your-teeth-so-important</a> </p>
              <div> </div>
              <p>From the time we are children,  we are taught that it is very important to brush our teeth. However, aside from  having whiter teeth and fresher breath, many people do not realize why it is  important to brush their teeth regularly.<br>
                Brushing your teeth also has a  number of indirect and unexpected benefits that you may not have considered.  For one thing, brushing your teeth regularly saves money. When you care for  your teeth properly you are less likely to need dental work down the road such  as having a cavity filled or having treatments for periodontal disease.<br>
                Brushing your teeth can also  reduce your chances of developing infections. The bacteria in your mouth that  cause abscessed teeth can also cause infections of the heart, lungs, or even  the brain. In some cases, these infections can be fatal. These bacteria have  also been linked to other health problems such as heart attacks and strokes.  Brushing reduces the number of bacteria in your mouth and removes the sugars  that are food for the bacteria, reducing the possibility that the bacteria will  multiply to dangerous levels.<br>
                Poor gum health has also been  linked to a number of other general health problems, such as dementia,  Alzheimer’s disease, osteoporosis, and diabetes. Although researchers are not  yet sure if the bacteria cause these conditions, they are certainly related in  some way. Brushing may reduce your chances of developing these conditions.<br>
                If you  need help with your brushing technique, Dr. Alan Frame,&nbsp;<a href="http://alanframedds.com/" title="Santa Clara dentist">Santa Clara dentist</a>, will be  glad to help. Dr. Frame is a specialist for&nbsp;<a href="http://alanframedds.com/teeth-cleaning/" title="teeth cleaning in Santa Clara">teeth  cleaning in Santa Clara</a>, allowing him to clean and examine  your teeth for signs of bacterial infections and other oral health problems  that can lead to overall health problems.</p>
              <p>Source: Alan L. Frame, D. D. S. 1171 Homestead Road, Suite 214  Santa Clara, CA 95050<br>
                Phone (408) 244-3562 Fax (408) 244-0137  alanframedds@sbcglobal.net </p>
              <div> </div>
              <p>&nbsp;</p>
              <p><a name="6">Looking</a>&nbsp;after your teeth,  gums and mouth<br>
                It is important to  look after your first and your permanent teeth. Keeping your teeth, gums and  mouth clean and healthy can prevent disease and infection, and can help to  avoid pain and sickness. Also a clean healthy mouth feels nice, looks good and  keeps your breath fresh.<br>
                Your teeth need to  be cleaned really well every day. This is because germs or bacteria (say  bak-tee-ria) in your mouth grow on your teeth and around the gums every day. It  is called<strong>dental plaque</strong>&nbsp;(say pl-ark) and it makes acids or poisons  that attack the teeth and gums and cause disease. If you keep your teeth clean  and healthy every day you will avoid problems like tooth decay, toothache,  bleeding gums, yellow teeth and bad breath.<br>
                Grab your  toothbrush right away!<br>
                Tips for a healthy  mouth, teeth and gums: </p>
              <ul>
                <li>Brush&nbsp;your  teeth well&nbsp;twice a&nbsp;day (after breakfast and last thing before going  to bed).&nbsp;</li>
                <li><img width="123" height="250" src="brush_clip_image007.jpg" align="right" hspace="8" alt="Description: brushing teeth">Use a small toothbrush with&nbsp;<em>soft</em>&nbsp;bristles.  Hard and medium bristled toothbrushes can damage teeth and gums.</li>
                <li>Use  fluoride (say flu-or-ide) toothpaste.&nbsp;From 6 years of age you can use  adult toothpaste, but make sure you spit it out when you have finished cleaning  your teeth. Children under 6 need to use a special children's toothpaste.</li>
                <li>Gently  and thoroughly brush each side of every tooth and the gums. It should take  about 3 minutes to do them all.</li>
                <li>Dental  floss cleans between your teeth but should only be used if you have been shown  how to floss at the dentist.</li>
                <li>Once  a week you could check your toothbrushing skills by rinsing with a liquid  called Disclo-gel. This is a pink liquid that stains the plaque pink and makes  it easier to see. Disclo-gel can be bought from a chemist. If your teeth are  not totally clean, there will be a pink stain on a tooth. Brush that stain off and  remember how you did it, so that you can add that to how you clean your teeth.</li>
                <li>If  you live in South Australia the SA Dental Service has clinics at many schools.  School children can go to their nearest clinic for check-ups, treatment and to  learn how to look after their teeth properly. Go to&nbsp;<a href="http://www.sadental.sa.gov.au/" target="_blank">http://www.sadental.sa.gov.au/</a>&nbsp;to find out more.</li>
              </ul>
              <p><br>
                  <br>
                  <a name="7">Keeping</a>&nbsp;your toothbrush safe  from germs</p>
              <ul>
                <li>After  brushing, rinse your toothbrush under running water.</li>
                <li>Store  your toothbrush in a clean dry place.</li>
                <li>Do  not share a toothbrush as this can spread germs.</li>
                <li>Replace  your toothbrush often.</li>
                <li>Wash  your hands after going to the toilet and before using your toothbrush.</li>
              </ul>
              <p><br>
                  <br>
                  <a name="8">Tooth</a>-friendly foods</p>
              <ul>
                <li><img width="139" height="175" src="brush_clip_image008.jpg" align="right" hspace="8" alt="Description: food for healthy teeth">Choose a wide variety of healthy foods every day.</li>
                <li>Finish  a meal with a drink of water - this washes your teeth and mouth.</li>
                <li>Choose  tap water as a drink. It is tooth-friendly and your body likes it too. Don't  have lots of&nbsp;fizzy drinks especially ones that contain sugars and acids.  These can cause tooth decay. Bottled water is not so good for teeth. It does  not have fluoride in it.</li>
                <li>Where  possible choose medicines and cough lollies that are sugar free.</li>
                <li>Milk  and cheese are tooth-friendly foods. They contain minerals, which will help to  repair tooth enamel.</li>
              </ul>
              <p>If you want to know  more about healthy food look up&nbsp;<a href="http://www.cyh.com/HealthTopics/HealthTopicCategories.aspx?p=284">'Your Food'</a>&nbsp;on this site.<br>
                A variety of foods  is best for your teeth.<br>
  <img border="0" width="128" height="175" src="brush_clip_image009.jpg" alt="Description: happy teeth"> <br>
  <br>
  <br>
  <a name="9">Did</a>&nbsp;you know?</p>
              <ul>
                <li>If  you look after your teeth you can keep them forever.</li>
                <li>Teeth  are the hardest part of your body.</li>
                <li>Sharks  have three rows of teeth and they grow new ones if they lose any. People do not  grow new teeth if they loose a tooth, so take good care of the ones that you  have.</li>
                <li>Fluoride  was introduced into toothpaste in the 1970s.</li>
                <li>Fluoride  was introduced into the water supply in Adelaide in 1971. Kids in South  Australia now have much healthier teeth than their grandparents had because the  fluoride makes their teeth stronger.</li>
                <li>In  the year 1770 the first toothbrush was invented and so were the first false  teeth (made out of porcelain) by William Addis in England.</li>
                <li>In  the year 1790 John Greenwood of U.S.A invented the dental drill.&nbsp;<br>
                  It was very big and heavy and the dentist had to turn a handle [like using a  hand drill for drilling holes in wood] to drill out all the bad bits in the  tooth. It was a very slow and painful process and people only went to the  dentist when they couldn't stand the pain of toothache any longer!<br>
                  It must have been a bit terrifying to go to the dentist in the olden days.</li>
              </ul>
              <p>Nowadays it is very  different. <br>
                  <img width="135" height="160" src="brush_clip_image010.jpg" align="left" hspace="8" alt="Description: visiting the dentist">The people at the dental clinic are there to help  you.<br>
                They teach you how  to look after your teeth and avoid decay.<br>
                They can repair  teeth and it doesn't hurt.<br>
                They can help protect  your teeth from decay.<br>
  <br>
                This is what some people had to say about going to the dentist nowadays. <br>
  <strong>My  teeth</strong>&nbsp;<br>
                I went to the dentist one day,<br>
                He said that I had some decay.<br>
                My tooth was real sore,<br>
                I brushed my teeth more<br>
                And then the pain went away.<br>
                When my teeth started to go green<br>
                I realised that they weren't clean!<br>
                (by Kramer) </p>
              <table border="0" cellpadding="0" width="460">
                <tr>
                  <td valign="top"><br>
                      <strong>Mikyla</strong>&nbsp;writes,&nbsp;<br>
                      <br>
                    &quot;When I went to the dentist I wasn't scared because I was just having a    check-up. When the dentist had looked in my mouth she said that I had a    wobbly tooth and that it was okay so I got a sticker and went home. </td>
                  <td><p><img border="0" width="185" height="141" src="brush_clip_image011.jpg" alt="Description: visiting the dentist"> </p></td>
                </tr>
              </table>
              <p><strong>Ellen</strong>&nbsp;wants you to know that going to the dentist  may make you feel a bit nervous. When you get there they check your teeth. You  may have an injection to stop it hurting. They make the hole in your tooth a  bit bigger to get out any bad stuff then they fill it up with a special stuff.<br>
                  <strong>You  rinse your mouth out then you can go home.</strong> <br>
                  <strong>Your  mouth can feel a bit funny but you know that your tooth is okay.</strong> <br>
                  <a name="10">Dr</a>&nbsp;Kim says:<br>
                  <img width="107" height="180" src="brush_clip_image012.jpg" align="right" hspace="4" alt="Description: Dr Kim"><br>
  &quot;Learn to brush your teeth properly twice a day and you will be proud of  your shiny smile.&quot;<br>
  <img border="0" width="185" height="89" src="brush_clip_image013.jpg" alt="Description: smiling teeth"> </p>
              <table border="0" cellspacing="0" cellpadding="0" width="300">
                <tr>
                  <td><p>Keep your teeth clean and bright<br>
                    Brush them every day and night<br>
                    Drink lots of water every day<br>
                    Throw the fizzy drink away.<br>
                    Brush your teeth with a soft toothbrush<br>
                    Very careful, please don't rush.&nbsp;<br>
                    <br>
                    <em>Meg</em></p></td>
                </tr>
              </table>
              <p>Source : http://www.cyh.com/HealthTopics/HealthTopicDetailsKids.aspx?p=335&amp;np=152&amp;id=2903</p>
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
