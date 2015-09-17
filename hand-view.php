
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
                    <h1 class="page-header"><i class="fa fa-home fa-fw"></i> Home</h1>
                </div>
                <!--End Page Header -->
            </div>

            


           

              <!--start of the carousel -->
              <p><strong>HAND WASHING  ARTICLE</strong><br>
                Washing your hands  correctly (or using an alcohol-based hand rub) is the most effective thing you  can do to protect yourself against a number of infectious diseases, such as  influenza (the &quot;flu&quot;) and the common cold. Not only will it help keep  you healthy, it will help prevent the spread of infectious diseases to others.<br>
  <strong>BACKGROUND</strong><br>
                Even if your hands appear to be clean, they may carry germs.  Hands pick up micro-organisms (germs) in a number of ways.<br>
                When people who are sick sneeze or cough, the germs that are  making them sick are expelled into the air in tiny droplets. If these droplets  get onto your hands, and then you touch your mouth, eyes or nose without  washing away the germs, you carry the infection. You can also get sick if you don't  wash your hands before and after preparing food, after handling raw meat, and  after using the toilet.<br>
                Washing your hands not only prevents you from getting sick,  but it also reduces the risk of infecting others. If you don't wash your hands  properly before coming into contact with others, you can infect them with the  germs on your hands. Other people can also get sick from the germs unwashed  hands leave on shared objects like doorknobs, keyboards, and other equipment in  the home or workplace.<br>
  <strong>How Hand Washing  Reduces Health Risks</strong><br>
                Hand-to-hand contact can spread mild conditions, such as the  common cold, but also more severe or life-threatening diseases. Infectious  diseases are a particular risk to the very young, the elderly, those with a  pre-existing disease, and people with a compromised immune system, such as  those with HIV or AIDS.</p>
              <h2>Proper  Methods of Hand Washing</h2>
              <p>Although hand washing might seem like a simple task, you  should follow these steps to thoroughly rid your hands of germs.<br>
                  <em>Using Soap</em> </p>
              <ul type="disc">
                <li>Wash your hands       frequently with soap and water for at least 20 seconds. Alcohol-based hand       cleansers are useful when soap and water are not available. In most cases       antibacterial soap is not necessary for safe, effective hand hygiene.</li>
                <li>Remove any hand or       arm jewellery you may be wearing and wet your hands with warm water. Add       regular soap and rub your hands together, ensuring you have lathered all       surfaces for at least 15 seconds. How long is 15 seconds? The length of       time it takes to sing&nbsp;<em>Happy Birthday</em>.</li>
                <li>Wash the front and       back of your hands, as well as between your fingers and under your nails.</li>
                <li>Rinse your hands well       under warm running water, using a rubbing motion.</li>
                <li>Wipe and dry your       hands gently with a paper towel or a clean towel. Drying them vigorously       can damage the skin.</li>
                <li>Turn off the tap       using the paper towel so that you do not re-contaminate your hands. When       using a public bathroom, use the same paper towel to open the door when       you leave.</li>
                <li>If skin dryness is a       problem, use a moisturizing lotion.</li>
              </ul>
              <p>If you have sensitive skin or are in a position where you  must wash your hands constantly (as a healthcare worker must), you might want  to use an alcohol-based hand rub instead.<br>
                  <em>Using Alcohol-based Hand Rubs</em> </p>
              <ul type="disc">
                <li>An alcohol-based hand       rub can be used if soap and water are not available.</li>
                <li>If your hands are       visibly soiled, it is best to use soap and water. If it's not possible to       wash with soap and water, use towelettes to remove the soil, then use an       alcohol-based hand rub.</li>
                <li>Use hand rubs       according to the manufacturer's instructions. Make sure your hands are       dry, as wet hands will dilute the product.</li>
                <li>Use enough products       to cover all the surfaces of your hands and fingers.</li>
                <li>Rub your hands       together until the product has evaporated. If dry skin is a problem, use a       moisturizing lotion.</li>
              </ul>
              <h2>Minimizing  Your Risks</h2>
              <p>Here are further steps you can take to protect yourself and  your family.</p>
              <ul type="disc">
                <li>Wash your hands       often, especially after coughing, sneezing or using tissues, before and       after eating, before preparing food, after handling raw meat, after petting       an animal, and after using the bathroom.</li>
                <li>When you cough or       sneeze, use a tissue or raise your arm up to your face and aim for your       sleeve. Do not sneeze into your hand. Throw away tissues as soon as you       use them</li>
                <li>Keep the surface       areas in your home and office free of germs by cleaning them. Doorknobs,       light switches, telephones, and keyboards are especially important to keep       clean.</li>
                <li>If you have children,       teach them good hygiene and how to wash their hands properly. Young       children should be supervised while washing their hands.</li>
                <li>If you use bar soap,       keep it in a self-draining holder that can be cleaned thoroughly before a       new bar is added.</li>
                <li>Don't use a single       damp cloth to wash a group of children's hands.</li>
                <li>Don't use a standing       basin of water to rinse your hands.</li>
                <li>Don't use a common       hand towel.</li>
                <li>Don't use sponges or       non-disposable cleaning cloths unless you change them daily and launder       them using detergent. Germs thrive on moist surfaces.</li>
              </ul>
              <p><strong>SOURCE:</strong><br>
                  <strong>Health  Canada</strong><br>
                www.hc-sc.gc.ca<br>
                -------------------------------------------------------------------------------------------------------------------------------</p>
              <h2>Hand-washing:  Do's and don'ts</h2>
              <p><em>Hand-washing is an easy way to prevent infection. Understand when to  wash your hands, how to properly use hand sanitizer and how to get your  children into the habit.</em><em><strong> </strong></em><br>
                  <a href="http://www.mayoclinic.org/about-this-site/welcome">By Mayo Clinic Staff</a> <br>
                Frequent hand-washing is one of the  best ways to avoid getting sick and spreading illness. Hand-washing requires  only soap and water or an alcohol-based hand sanitizer — a cleanser that  doesn't require water.<br>
                Find out when and how to wash your  hands properly.</p>
              <h3>When  to wash your hands</h3>
              <p>As you touch people, surfaces and  objects throughout the day, you accumulate germs on your hands. In turn, you  can infect yourself with these germs by touching your eyes, nose or mouth.  Although it's impossible to keep your hands germ-free, washing your hands  frequently can help limit the transfer of bacteria, viruses and other microbes.<br>
                Always wash your hands before:</p>
              <ul>
                <li>Preparing food or eating</li>
                <li>Treating wounds, giving medicine, or caring for  a sick or injured person</li>
                <li>Inserting or removing contact lenses</li>
              </ul>
              <p>Always wash your hands after:</p>
              <ul>
                <li>Preparing food, especially raw meat or poultry</li>
                <li>Using the toilet or changing a diaper</li>
                <li>Touching an animal or animal toys, leashes or  waste</li>
                <li>Blowing your nose, coughing or sneezing into  your hands</li>
                <li>Treating wounds or caring for a sick or injured  person</li>
                <li>Handling garbage, household or garden chemicals,  or anything that could be contaminated — such as a cleaning cloth or soiled  shoes</li>
                <li>Shaking hands with others</li>
              </ul>
              <p>In addition, wash your hands  whenever they look dirty.</p>
              <h3>How  to wash your hands</h3>
              <p>It's generally best to wash your  hands with soap and water. Follow these simple steps:</p>
              <ul>
                <li>Wet your hands with running water — either warm  or cold.</li>
                <li>Apply liquid, bar or powder soap.</li>
                <li>Lather well.</li>
                <li>Rub your hands vigorously for at least 20  seconds. Remember to scrub all surfaces, including the backs of your hands,  wrists, between your fingers and under your fingernails.</li>
                <li>Rinse well.</li>
                <li>Dry your hands with a clean or disposable towel  or air dryer.</li>
                <li>If possible, use a towel or your elbow to turn  off the faucet.</li>
              </ul>
              <p>Keep in mind that antibacterial  soap is no more effective at killing germs than is regular soap. Using  antibacterial soap might even lead to the development of bacteria that are  resistant to the product's antimicrobial agents — making it harder to kill  these germs in the future.</p>
              <h3>How  to use an alcohol-based hand sanitizer</h3>
              <p>Alcohol-based hand sanitizers,  which don't require water, are an acceptable alternative when soap and water  aren't available. If you use a hand sanitizer, make sure the product contains  at least 60 percent alcohol. Then follow these simple steps:</p>
              <ul>
                <li>Apply enough of the product to the palm of your  hand to wet your hands completely.</li>
                <li>Rub your hands together, covering all surfaces,  until your hands are dry.</li>
              </ul>
              <p>Antimicrobial wipes or towelettes  are another effective option. Again, look for a product that contains a high  percentage of alcohol. If your hands are visibly dirty, however, wash with soap  and water.</p>
              <h3>Kids  need clean hands, too</h3>
              <p>Help children stay healthy by  encouraging them to wash their hands properly and frequently. Wash your hands  with your child to show him or her how it's done. To prevent rushing, suggest  washing hands for as long as it takes to sing the &quot;Happy Birthday&quot;  song twice. If your child can't reach the sink on his or her own, keep a step  stool handy.<br>
                Alcohol-based hand sanitizers are  OK for children and adolescents, especially when soap and water aren't  available. However, be sure to supervise young children using alcohol-based  hand sanitizers. Remind your child to make sure the sanitizer completely dries  before he or she touches anything. Store the container safely away after use.<br>
                Hand hygiene is especially  important for children in child care settings. Young children cared for in  groups outside the home are at greater risk of respiratory and gastrointestinal  diseases, which can easily spread to family members and other contacts.<br>
                Be sure your child care provider  promotes frequent hand-washing or use of alcohol-based hand sanitizers. Ask  whether the children are required to wash their hands several times a day — not  just before meals. Note, too, whether diapering areas are cleaned after each  use and whether eating and diapering areas are well-separated.</p>
              <h3>A  simple way to stay healthy</h3>
              <p>Hand-washing doesn't take much time  or effort, but it offers great rewards in terms of preventing illness. Adopting  this simple habit can play a major role in protecting your health.</p>
              <h3>How  to use an alcohol-based hand sanitizer</h3>
              <p>Alcohol-based hand sanitizers,  which don't require water, are an acceptable alternative when soap and water  aren't available. If you use a hand sanitizer, make sure the product contains  at least 60 percent alcohol. Then follow these simple steps:</p>
              <ul>
                <li>Apply enough of the product to the palm of your  hand to wet your hands completely.</li>
                <li>Rub your hands together, covering all surfaces,  until your hands are dry.</li>
              </ul>
              <p>Antimicrobial wipes or towelettes  are another effective option. Again, look for a product that contains a high  percentage of alcohol. If your hands are visibly dirty, however, wash with soap  and water.</p>
              <h3>Kids  need clean hands, too</h3>
              <p>Help children stay healthy by  encouraging them to wash their hands properly and frequently. Wash your hands  with your child to show him or her how it's done. To prevent rushing, suggest  washing hands for as long as it takes to sing the &quot;Happy Birthday&quot;  song twice. If your child can't reach the sink on his or her own, keep a step  stool handy.<br>
                Alcohol-based hand sanitizers are  OK for children and adolescents, especially when soap and water aren't  available. However, be sure to supervise young children using alcohol-based  hand sanitizers. Remind your child to make sure the sanitizer completely dries  before he or she touches anything. Store the container safely away after use.<br>
                Hand hygiene is especially  important for children in child care settings. Young children cared for in  groups outside the home are at greater risk of respiratory and gastrointestinal  diseases, which can easily spread to family members and other contacts.<br>
                Be sure your child care provider  promotes frequent hand-washing or use of alcohol-based hand sanitizers. Ask  whether the children are required to wash their hands several times a day — not  just before meals. Note, too, whether diapering areas are cleaned after each  use and whether eating and diapering areas are well-separated.</p>
              <h3>A  simple way to stay healthy</h3>
              <p>Hand-washing doesn't take much time  or effort, but it offers great rewards in terms of preventing illness. Adopting  this simple habit can play a major role in protecting your health. </p>
              <h1>-------------------------------------------------------------------------------------------------------------------------------</h1>
              <h1>The art of hand washing has yet to be mastered</h1>
              <p><a href="http://www.usatoday.com/staff/3905/lindsay-friedman"><strong>Lindsay Friedman,  USA TODAY</strong></a> </p>
              <h2><em>Hand washing shouldn't be that tough, but one study found  only 5% of people do it well enough to kill off the germs.</em></h2>
              <p>Hand washing isn't  exactly an arduous chore, especially since it's done in the name of squashing  germs, says Carl Borchgrevink, an associate professor at Michigan State  University's School of Hospitality and Business.<strong></strong><br>
                Regrettably, it's  a chore that often goes neglected.<br>
                According to a  study led by Borchgrevink, only 5% of people washed their hands enough to kill  infection and illness causing germs after using the bathroom. To make matters  worse, 33% of hand washers didn't use soap, and 10% skipped the hygienic step  altogether.<br>
  &quot;It's  horrifying,&quot; Borchgrevink says. &quot;A majority didn't even make an  effort.&quot;<br>
                Borchgrevink, with  the help of 12 research assistants, visited a number of restrooms in the  college town of East Lansing. Observing the tendencies of more than 3,700  bathroom-goers in a non-intrusive manner, they determined age with an educated  guess, labeling subjects as either &quot;college-age&quot; or  &quot;non-college-age.&quot;<br>
                Among their  observations: Members of older generations washed their hands more often and  for longer periods of time compared with youngsters. People were more likely to  wash their hands earlier in the day rather than in the late afternoon.  Additionally, men were found to be less-spirited hand cleansers and were &quot;particularly  worse at washing their hands correctly.&quot;<br>
  &quot;Men might  just be more stubborn. They don't like to be told what to do,&quot;  Borchgrevink says. &quot;I've heard some men say they don't think they need to  wash their hands because they don't always have to use stalls, which is  absolutely wrong.&quot;<br>
                According to the  CDC, people need to vigorously wash their hands for about 15 to 20 seconds to  kill any type of dangerous bacteria. Most people wash their hands for about six  seconds. Without executing the correct hand sanitizing techniques, grime, dirt  and bacteria that would typically be sent down the drain stays on the hands and  increases the host's likelihood of becoming seriously ill.<br>
  &quot;Education is  there, but … it's easily overlooked,&quot; says Karen Francois, a physician at  New York Presbyterian Hospital-Weill Cornell. &quot;We're more aware of  sanitation and hygiene, but people still aren't doing it. Even though we know  it's the right thing to do, we aren't doing it consistently.&quot;<br>
                Why are people  willing to skip such an easy germ-fighting step? Borchgrevink wants to know.<br>
  &quot;Being  sanitary is really important,&quot; he says. &quot;It's possible that they may  not have paid attention (to the CDC or other hand washing advocates), thinking  it doesn't apply to them. I don't think they're maliciously not washing their  hands. I just think they're just not realizing the impact.&quot;<br>
                Borchgrevink says  clean facilities and signage maximizes the chances someone would choose to send  germy villains down the pipes. The former restaurateur says social pressures  should do the trick, too.<br>
  &quot;It's so  important to make (hand washing) convenient,&quot; Francois says. &quot;If it's  easy, it would really encourage people to have proper hand hygiene.&quot;<br>
  <strong>Hand washing tips</strong> <br>
                •Always use soap:  A quick rinse with just water won't get rid of all the harmful germs that could  make you sick. Bathrooms, especially door handles, are crawling with germs.<br>
                •Know where your  hands have been: Germs are impossible to avoid, even in some of the cleanest  places. Know what you have touched, and be aware of where your hands are about  to go. For instance, if you're at the supermarket and touching a germy cart,  don't grab a grape for a taste because you will transfer the germs from that  cart to your mouth.<br>
                •Make it a routine  to stay clean: Just as you brush your teeth before bed, get in the habit of  washing your hands at certain times — before eating, after using the bathroom  and when getting home from work or school.<br>
                •Start young: The  importance of good hygiene is best taught when people are young. That way,  keeping hands clean will become a habit as they get older. Make it a point to  implement hand washing, and keep a chart or awards system if necessary.<br>
                •Disinfect your  technology: A couple of times a week take a disinfectant cloth and wipe down  your phones, computer, mouse and even the remote to your TV.<br>
                •Keep hygiene fun  for children: Like anything else, hand washing has to be fun if you want your  kids to pay attention. A fun trick to measure how long your kids should be  scrubbing is singing the Happy Birthday song twice.<br>
                •Know how to wash  your hands: It's surprising, but a lot of people don't know the proper method  to wash hands. Here's how to wash your hands according to the CDC: Wet your  hands with clean, running water (warm or cold) and apply soap. Rub your hands  together to make lather and scrub them well; be sure to scrub the backs of your  hands, between your fingers and under your nails. Continue scrubbing your hands  for at least 20 seconds and rinse your hands well under running water. Finish  up by drying your hands with a clean towel or by air-drying them.<br>
  <strong>Source:  Karen Francois, a physician at New York Presbyterian Hospital-Weill Cornell</strong><br>
  <strong>-------------------------------------------------------------------------------------------------------------------</strong></p>
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
