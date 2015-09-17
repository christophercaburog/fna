
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
	
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    <style type="text/css">
<!--
.style1 {
	font-family: "Lucida Calligraphy"
}
.style4 {
	font-family: "Courier New";
	font-weight: bold;
}
.style5 {font-family: "hobo Std"}
.style6 {
	font-family: "hobo Std";
	font-weight: bold;
	font-size: 16px;
}
.style7 {
	font-size: 16;
	font-family: "Courier New";
}
.style8 {font-family: "Courier New"}
-->
    </style>
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
                  <h1 align="center" class="page-header style1">Alcohol</h1>
              </div>
              <!--End Page Header -->
            </div>

            


           

              <p align="center" class="style6">12 Health Risks of Chronic Heavy Drinking<br>
Health Risks of Alcohol: 12 Health Problems Associated with Chronic  Heavy Drinking</p>
          <p align="justify"><strong>(WebMD Archive)</strong> <br>
                <span class="style4">It's  no secret that alcohol consumption can cause major health problems, including  cirrhosis of the liver and injuries sustained in automobile accidents. But if  you think liver disease and car crashes are the&nbsp;<em>only</em>&nbsp;health risks posed by drinking, think  again: Researchers have linked alcohol consumption to more than 60  diseases.&nbsp;<br>
&quot;Alcohol  does all kinds of things in the body, and we're not fully aware of all its  effects,&quot; says James C. Garbutt, MD, professor of psychiatry at the  University of North Carolina at Chapel Hill School of Medicine and a researcher  at the university's Bowles Center for Alcohol Studies. &quot;It's a pretty  complicated little molecule.&quot;<br>
                Here  are 12 conditions linked to chronic heavy drinking.</span></p>
          <h3 class="style5">Anemia</h3>
              <ul>
                <li class="style4">
                  <div align="justify">Heavy  drinking can cause the number of oxygen-carrying red blood cells to be  abnormally low. This condition, known as anemia, can trigger a host of  symptoms, including fatigue, shortness of breath, and lightheadedness.</div>
                </li>
              </ul>
          <h3 class="style5">Cancer</h3>
          <ul>
            <li class="style4">
              <div align="justify">&quot;Habitual  drinking increases the risk of cancer,&quot; says Jurgen Rehm, PhD, chairman of  the University of Toronto's department of addiction policy and a senior  scientist at the Centre for Addiction and Mental Health, also in Toronto.  Scientists believe the increased risk comes when the body converts alcohol into  acetaldehyde, a potent carcinogen. Cancer sites linked to alcohol use include  the mouth, pharynx (throat), larynx (voice box), esophagus, liver, breast, and  colorectal region. Cancer risk rises even higher&nbsp;in heavy drinkers who  also use tobacco.</div>
            </li>
          </ul>
          <h3 class="style5">Cardiovascular disease</h3>
<ul><li class="style7">
  <div align="justify"><strong>Heavy  drinking, especially bingeing, makes platelets more likely to clump together  into blood clots, which can lead to heart attack or stroke. In a landmark study  published in 2005, Harvard researchers found that binge drinking doubled the  risk of death among people who initially survived a heart attack.Heavy  drinking can also cause cardiomyopathy, a potentially deadly condition in which  the heart muscle weakens and eventually fails, as well as heart rhythm  abnormalities such as atrial and ventricular fibrillation.&nbsp;Atrial  fibrillation, in which the heart's upper chambers (atria) twitch chaotically  rather than constrict rhythmically, can cause blood clots that can trigger a  stroke. Ventricular fibrillation causes chaotic twitching in the heart's main  pumping chambers (ventricles). It causes rapid loss of consciousness and, in  the absence of immediate treatment, sudden death.</strong></div>
</li>
          </ul>
          <h3 class="style5">Cirrhosis</h3>
          <ul>
            <li>
              <div align="justify" class="style4">Alcohol  is toxic to liver cells, and many heavy drinkers develop cirrhosis, a  sometimes-lethal condition in which the liver is so heavily scarred that it is  unable to function. But it's hard to predict which drinkers will develop  cirrhosis. &quot;Some people who drink huge amounts never get cirrhosis, and  some who don't drink very much do get it,&quot; Saitz says. For some unknown  reason, women seem to be especially vulnerable.</div>
            </li>
          </ul>
          <h3 class="style5">Dementia</h3>
          <ul>
            <li>
              <div align="justify" class="style4">As  people age, their brains shrink, on average, at a rate of about 1.9% per  decade. That's considered normal. But heavy drinking speeds the shrinkage of  certain key regions in the brain, resulting in memory loss and other symptoms  of dementia.&nbsp;<br>
  Heavy  drinking can also lead to subtle but potentially debilitating deficits in the  ability to plan, make judgments, solve problems, and perform other aspects of  &quot;executive function,&quot; which are &quot;the higher-order abilities that  allow us to maximize our function as human beings,&quot; Garbutt says.<br>
  In  addition to the &quot;nonspecific&quot; dementia that stems from brain atrophy,  heavy drinking can cause nutritional deficiencies so severe that they trigger  other forms of dementia.</div>
            </li>
          </ul>
          <h3 class="style5">Depression</h3>
          <ul>
            <li class="style8">
              <div align="justify"><strong>It's  long been known that heavy drinking often goes hand in hand with depression,  but there has been debate about which came first -- the drinking or the  depression. One theory is that depressed people turned to alcohol in an attempt  to &quot;self-medicate&quot; to ease their emotional pain. But a large study  from New Zealand showed that it was probably the other way around -- that is,  heavy drinking led to depression.<br>
              Research  has also shown that depression improves when heavy drinkers go on the wagon,  Saitz says.</strong></div>
            </li>
          </ul>
          <h3 class="style5">Seizures</h3>
          <ul>
            <li>
              <div align="justify" class="style4">Heavy  drinking can cause epilepsy and can trigger seizures even in people who don't  have epilepsy. It can also interfere with the action of the medications used to  treat convulsions.</div>
            </li>
          </ul>
          <h3 class="style5">Gout</h3>
          <ul>
            <li>
              <div align="justify" class="style4">A  painful condition, gout is caused by the formation of uric acid crystals in the  joints. Although some cases are largely hereditary, alcohol and other dietary  factors seem to play a role. Alcohol also seems to aggravate existing cases of  gout.</div>
            </li>
          </ul>
          <h3 class="style5">High blood pressure</h3>
          <ul>
            <li>
              <div align="justify">Alcohol  can disrupt the sympathetic nervous system, which, among other things, controls  the constriction and dilation of blood vessels in response to stress,  temperature, exertion, etc. Heavy drinking -- and bingeing, in particular --  can cause blood pressure to rise. Over time, this effect can become chronic.  High blood pressure can lead to many other health problems, including kidney  disease, heart disease, and stroke.</div>
            </li>
          </ul>
          <h3>Infectious disease</h3>
              <p>Heavy  drinking suppresses the immune system, providing a toehold for infections,  including tuberculosis, pneumonia, HIV/AIDS, and other sexually transmitted  diseases (including some that cause infertility). People who drink heavily also  are more likely to engage in risky sex. &quot;Heavy drinking is associated with  a three-fold increase in the risk of contracting a sexually transmitted  disease,&quot; Rehmn says.</p>
              <h3>Nerve damage</h3>
              <p>Heavy  drinking can cause a form of nerve damage known as alcoholic neuropathy, which  can produce a painful pins-and-needles feeling or numbness in the extremities  as well as muscle weakness, incontinence, constipation, erectile dysfunction,  and other problems. Alcoholic neuropathy may arise because alcohol is toxic to  nerve cells, or because nutritional deficiencies attributable to heavy drinking  compromise nerve function.</p>
              <h3>Pancreatitis</h3>
              <p>In  addition to causing stomach irritation (gastritis), drinking can inflame the  pancreas. Chronic pancreatitis interferes with the digestive process, causing  severe abdominal pain and persistent diarrhea --and &quot;it's not  fixable,&quot; Saitz says. Some cases of chronic pancreatitis are triggered by  gallstones, but up to 60% stem from alcohol consumption.</p>
              <p>Source : http://www.webmd.com/mental-health/addiction/features/12-health-risks-of-chronic-heavy-drinking?page=3</p>
              <p>&nbsp;</p>
              <h3>Alcohol  use disorder&nbsp;facts </h3>
              <ul>
                <li>Alcohol abuse and dependence,  now both included under the diagnosis of alcohol use disorder, is a disease  that is characterized by the sufferer having a pattern of drinking excessively  despite the negative effects of alcohol on the individual's work, medical,  legal, educational, and/or social life. It may involve a destructive pattern of  alcohol use that includes a number of symptoms, including tolerance to or  withdrawal from the substance, using more alcohol and/or for a longer time than  planned, and trouble reducing its use.</li>
                <li>Alcohol abuse, on the less  severe end of the alcohol use disorder spectrum, affects about 10% of women and  20% of men in the United States, most beginning by their mid&nbsp;<a href="http://www.medicinenet.com/teenagers/article.htm">teens</a>.</li>
                <li>Signs of alcohol intoxication  include the smell of alcohol on the breath or skin, glazed or bloodshot eyes,  the person being unusually passive or argumentative, and/or a deterioration in  the person's appearance or hygiene.</li>
                <li>Almost 2,000 people under 21  years of age die each year in car crashes in which underage drinking is  involved. Alcohol is involved in nearly half of all violent deaths involving  teens.</li>
                <li>Alcohol, especially when  consumed in excess, can affect teens, women, men, and the elderly quite  differently.</li>
                <li>Risk factors for developing a  drinking problem include low self-esteem,<a href="http://www.medicinenet.com/depression/article.htm">depression</a>,&nbsp;<a href="http://www.medicinenet.com/anxiety/article.htm">anxiety</a>&nbsp;or  another mood problem, as well as having parents with alcoholism.</li>
                <li>Alcohol use disorder has no one  single cause and is not directly passed from one generation to another  genetically. Rather, it is the result of a complex group of genetic,  psychological, and environmental factors.</li>
                <li>There is no one test that  definitively indicates that someone has an alcohol-use disorder. Therefore,  health-care professionals diagnose these disorders by gathering comprehensive  medical, family, and mental-health information.</li>
                <li>There are thought to be five  stages of alcoholism, the more severe end of the alcohol use disorder spectrum.</li>
                <li>There are numerous individual  treatments for alcoholism, including medical stabilization (detox), individual  and group counseling, support groups, residential treatment, medications, drug  testing, and/or relapse-prevention programs.</li>
                <li>Some signs of a drinking  problem include drinking alone, to escape problems, or for the sole purpose of  getting drunk; hiding alcohol in odd places; getting irritated and/or craving  alcohol when you are unable to obtain alcohol to drink; and having problems  because of your drinking.</li>
                <li>While some people with more  severe alcohol use disorder (formerly alcoholism or alcohol dependence) can cut  back or stop drinking without help, most are only able to do so temporarily  unless they get treatment.</li>
                <li>There is no amount of alcohol  intake that has been proven to be generally safe during&nbsp;<a href="http://www.medicinenet.com/pregnancy/article.htm">pregnancy</a>.</li>
                <li>The long-term effects of  alcohol abuse and alcoholism can be devastating and even life-threatening,  negatively affecting virtually every organ system.</li>
                <li>Codependence is the tendency to  interact with another person in an excessively passive or caretaking manner  that negatively affects the quality of the codependent individual's life.</li>
                <li>Adequate supervision and clear  communication by parents about the negative effects of alcohol and about  parental expectations regarding alcohol and other drug use can significantly  decrease alcohol use in teens.</li>
                <li>With treatment, about 70% of  people with alcoholism are able to decrease the number of days they consume  alcohol and improve their overall health status within six months.</li>
              </ul>
              <p>Source :  <a href="http://www.medicinenet.com/alcohol_abuse_and_alcoholism/article.htm">http://www.medicinenet.com/alcohol_abuse_and_alcoholism/article.htm</a> <br>
                ©1996-2014  MedicineNet, Inc.</p>
              <div> </div>
              <p>&nbsp;</p>
              <h3>ALCOHOL’S DAMAGING EFFECTS ON THE BRAIN </h3>
              <p>Difficulty  walking, blurred vision, slurred speech, slowed reaction times, impaired  memory: Clearly, alcohol affects the brain. Some of these impairments are  detectable after only one or two drinks and quickly resolve when drinking  stops. On the other hand, a person who drinks heavily over a long period of  time may have brain deficits that persist well after he or she achieves  sobriety. Exactly how alcohol affects the brain and the likelihood of reversing  the impact of heavy drinking on the brain remain hot topics in alcohol research  today. <br>
                We do  know that heavy drinking may have extensive and far–reaching effects on the  brain, ranging from simple “slips” in memory to permanent and debilitating  conditions that require lifetime custodial care. And even moderate drinking  leads to short–term impairment, as shown by extensive research on the impact of  drinking on driving. <br>
                A number  of factors influence how and to what extent alcohol affects the brain (1),  including </p>
              <ul>
                <li>how much and how often a person  drinks;</li>
                <li>the age at which he or she first  began drinking, and how long he or she has been drinking;</li>
                <li>the person’s age, level of  education, gender, genetic background, and family history of alcoholism;</li>
                <li>whether he or she is at risk as a  result of prenatal alcohol exposure; and</li>
                <li>his or her general health status.</li>
              </ul>
              <p>This&nbsp;<em>Alcohol  Alert</em>&nbsp;reviews some  common disorders associated with alcohol–related brain damage and the people at  greatest risk for impairment. It looks at traditional as well as emerging  therapies for the treatment and prevention of alcohol–related disorders and  includes a brief look at the high–tech tools that are helping scientists to  better understand the effects of alcohol on the brain. </p>
              <h3>BLACKOUTS AND MEMORY LAPSES </h3>
              <p>Alcohol  can produce detectable impairments in memory after only a few drinks and, as  the amount of alcohol increases, so does the degree of impairment. Large  quantities of alcohol, especially when consumed quickly and on an empty  stomach, can produce a blackout, or an interval of time for which the intoxicated  person cannot recall key details of events, or even entire events. <br>
                Blackouts  are much more common among social drinkers than previously assumed and should  be viewed as a potential consequence of acute intoxication regardless of age or  whether the drinker is clinically dependent on alcohol (2). White and  colleagues (3) surveyed 772 college undergraduates about their experiences with  blackouts and asked, “Have you ever awoken after a night of drinking not able  to remember things that you did or places that you went?” Of the students who  had ever consumed alcohol, 51 percent reported blacking out at some point in  their lives, and 40 percent reported experiencing a blackout in the year before  the survey. Of those who reported drinking in the 2 weeks before the survey,  9.4 percent said they blacked out during that time. The students reported  learning later that they had participated in a wide range of potentially  dangerous events they could not remember, including vandalism, unprotected sex,  and driving. </p>
              <p>Equal  numbers of men and women reported experiencing blackouts, despite the fact that  the men drank significantly more often and more heavily than the women. This  outcome suggests that regardless of the amount of alcohol consumption,  females—a group infrequently studied in the literature on blackouts—are at  greater risk than males for experiencing blackouts. A woman’s tendency to black  out more easily probably results from differences in how men and women  metabolize alcohol. Females also may be more susceptible than males to milder  forms of alcohol–induced memory impairments, even when men and women consume  comparable amounts of alcohol (4). </p>
              <h3>ARE WOMEN MORE VULNERABLE TO ALCOHOL’S EFFECTS ON THE BRAIN? </h3>
              <p>Women are  more vulnerable than men to many of the medical consequences of alcohol use.  For example, alcoholic women develop cirrhosis (5), alcohol–induced damage of  the heart muscle (i.e., cardiomyopathy) (6), and nerve damage (i.e., peripheral  neuropathy) (7) after fewer years of heavy drinking than do alcoholic men.  Studies comparing men and women’s sensitivity to alcohol–induced brain damage,  however, have not been as conclusive. <br>
                Using  imaging with computerized tomography, two studies (8,9) compared brain  shrinkage, a common indicator of brain damage, in alcoholic men and women and  reported that male and female alcoholics both showed significantly greater  brain shrinkage than control subjects. Studies also showed that both men and  women have similar learning and memory problems as a result of heavy drinking (10).  The difference is that alcoholic women reported that they had been drinking  excessively for only about half as long as the alcoholic men in these studies.  This indicates that women’s brains, like their other organs, are more  vulnerable to alcohol–induced damage than men’s (11). <br>
                Yet other  studies have not shown such definitive findings. In fact, two reports appearing  side by side in the&nbsp;<em>American Journal of Psychiatry</em>contradicted  each other on the question of gender–related vulnerability to brain shrinkage  in alcoholism (12,13). Clearly, more research is needed on this topic,  especially because alcoholic women have received less research attention than  alcoholic men despite good evidence that women may be particularly vulnerable  to alcohol’s effects on many key organ systems. </p>
              <h3>BRAIN DAMAGE FROM OTHER CAUSES </h3>
              <p>People  who have been drinking large amounts of alcohol for long periods of time run  the risk of developing serious and persistent changes in the brain. Damage may  be a result of the direct effects of alcohol on the brain or may result  indirectly, from a poor general health status or from severe liver disease. <br>
                For  example, thiamine deficiency is a common occurrence in people with alcoholism  and results from poor overall nutrition. Thiamine, also known as vitamin B1, is  an essential nutrient required by all tissues, including the brain. Thiamine is  found in foods such as meat and poultry; whole grain cereals; nuts; and dried  beans, peas, and soybeans. Many foods in the United States commonly are  fortified with thiamine, including breads and cereals. As a result, most people  consume sufficient amounts of thiamine in their diets. The typical intake for  most Americans is 2 mg/day; the Recommended Daily Allowance is 1.2 mg/day for  men and 1.1 mg/day for women (14). </p>
              <h3>Wernicke–Korsakoff Syndrome </h3>
              <p>Up to 80  percent of alcoholics, however, have a deficiency in thiamine (15), and some of  these people will go on to develop serious brain disorders such as  Wernicke–Korsakoff syndrome (WKS) (16). WKS is a disease that consists of two  separate syndromes, a short–lived and severe condition called Wernicke’s  encephalopathy and a long–lasting and debilitating condition known as  Korsakoff’s psychosis. <br>
                The  symptoms of Wernicke’s encephalopathy include mental confusion, paralysis of the  nerves that move the eyes (i.e., oculomotor disturbances), and difficulty with  muscle coordination. For example, patients with Wernicke’s encephalopathy may  be too confused to find their way out of a room or may not even be able to  walk. Many Wernicke’s encephalopathy patients, however, do not exhibit all  three of these signs and symptoms, and clinicians working with alcoholics must  be aware that this disorder may be present even if the patient shows only one  or two of them. In fact, studies performed after death indicate that many cases  of thiamine deficiency–related encephalopathy may not be diagnosed in life  because not all the “classic” signs and symptoms were present or recognized. </p>
              <p>Approximately  80 to 90 percent of alcoholics with Wernicke’s encephalopathy also develop  Korsakoff’s psychosis, a chronic and debilitating syndrome characterized by  persistent learning and memory problems. Patients with Korsakoff’s psychosis  are forgetful and quickly frustrated and have difficulty with walking and  coordination (17). Although these patients have problems remembering old  information (i.e., retrograde amnesia), it is their difficulty in “laying down”  new information (i.e., anterograde amnesia) that is the most striking. For  example, these patients can discuss in detail an event in their lives, but an  hour later might not remember ever having the conversation. <br>
                  <strong>Treatment</strong><br>
                  <br>
                The cerebellum, an area of the brain responsible for coordinating movement and  perhaps even some forms of learning, appears to be particularly sensitive to  the effects of thiamine deficiency and is the region most frequently damaged in  association with chronic alcohol consumption. Administering thiamine helps to  improve brain function, especially in patients in the early stages of WKS. When  damage to the brain is more severe, the course of care shifts from treatment to  providing support to the patient and his or her family (18). Custodial care may  be necessary for the 25 percent of patients who have permanent brain damage and  significant loss of cognitive skills (19). <br>
                Scientists  believe that a genetic variation could be one explanation for why only some  alcoholics with thiamine deficiency go on to develop severe conditions such as  WKS, but additional studies are necessary to clarify how genetic variants might  cause some people to be more vulnerable to WKS than others. </p>
              <h3>LIVER DISEASE </h3>
              <p>Most  people realize that heavy, long–term drinking can damage the liver, the organ  chiefly responsible for breaking down alcohol into harmless byproducts and  clearing it from the body. But people may not be aware that prolonged liver  dysfunction, such as liver cirrhosis resulting from excessive alcohol  consumption, can harm the brain, leading to a serious and potentially fatal  brain disorder known as hepatic encephalopathy (20). <br>
                Hepatic  encephalopathy can cause changes in sleep patterns, mood, and personality;  psychiatric conditions such as anxiety and depression; severe cognitive effects  such as shortened attention span; and problems with coordination such as a  flapping or shaking of the hands (called asterixis). In the most serious cases,  patients may slip into a coma (i.e., hepatic coma), which can be fatal. <br>
                New  imaging techniques have enabled researchers to study specific brain regions in  patients with alcoholic liver disease, giving them a better understanding of  how hepatic encephalopathy develops. These studies have confirmed that at least  two toxic substances, ammonia and manganese, have a role in the development of  hepatic encephalopathy. Alcohol–damaged liver cells allow excess amounts of  these harmful byproducts to enter the brain, thus harming brain cells. <br>
  <strong>Treatment</strong><br>
  <br>
                Physicians typically use the following strategies to prevent or  treat the development of hepatic encephalopathy. </p>
              <ul>
                <li>Treatment that lowers blood  ammonia concentrations, such as administering L–ornithine L–aspartate. </li>
                <li>Techniques such as liver–assist  devices, or “artificial livers,” that clear the patients’ blood of harmful  toxins. In initial studies, patients using these devices showed lower amounts  of ammonia circulating in their blood, and their encephalopathy became less  severe (21). </li>
                <li>Liver transplantation, an  approach that is widely used in alcoholic cirrhotic patients with severe (i.e.,  end–stage) chronic liver failure. In general, implantation of a new liver  results in significant improvements in cognitive function in these patients  (22) and lowers their levels of ammonia and manganese (23). </li>
              </ul>
              <h3>ALCOHOL AND THE DEVELOPING BRAIN </h3>
              <p>Drinking  during pregnancy can lead to a range of physical, learning, and behavioral  effects in the developing brain, the most serious of which is a collection of  symptoms known as fetal alcohol syndrome (FAS). Children with FAS may have  distinct facial features (see illustration). FAS infants also are markedly  smaller than average. Their brains may have less volume (i.e., microencephaly).  And they may have fewer numbers of brain cells (i.e., neurons) or fewer neurons  that are able to function correctly, leading to long–term problems in learning  and behavior. </p>
              <p><strong>Treatment</strong><br>
                  <br>
                Scientists are investigating the use of complex motor training and medications  to prevent or reverse the alcohol–related brain damage found in people  prenatally exposed to alcohol (24). In a study using rats, Klintsova and  colleagues (25) used an obstacle course to teach complex motor skills, and this  skills training led to a re–organization in the adult rats’ brains (i.e.,  cerebellum), enabling them to overcome the effects of the prenatal alcohol  exposure. These findings have important therapeutic implications, suggesting  that complex rehabilitative motor training can improve motor performance of  children, or even adults, with FAS. <br>
                Scientists  also are looking at the possibility of developing medications that can help  alleviate or prevent brain damage, such as that associated with FAS. Studies  using animals have yielded encouraging results for treatments using antioxidant  therapy and vitamin E. Other preventive therapies showing promise in animal  studies include 1–octanol, which ironically is an alcohol itself. Treatment with  l–octanol significantly reduced the severity of alcohol’s effects on developing  mouse embryos (26). Two molecules associated with normal development (i.e., NAP  and SAL) have been found to protect nerve cells against a variety of toxins in  much the same way that octanol does (27). And a compound (MK–801) that blocks a  key brain chemical associated with alcohol withdrawal (i.e., glutamate) also is  being studied. MK–801 reversed a specific learning impairment that resulted  from early postnatal alcohol exposure (28). <br>
                Though  these compounds were effective in animals, the positive results cited here may  or may not translate to humans. Not drinking during pregnancy is the best form  of prevention; FAS remains the leading&nbsp;<em>preventable</em>&nbsp;birth defect in the United States  today. </p>
              <h3>GROWING NEW BRAIN CELLS </h3>
              <p>For  decades scientists believed that the number of nerve cells in the adult brain  was fixed early in life. If brain damage occurred, then, the best way to treat  it was by strengthening the existing neurons, as new ones could not be added.  In the 1960s, however, researchers found that new neurons are indeed generated  in adulthood—a process called neurogenesis (29). These new cells originate from  stem cells, which are cells that can divide indefinitely, renew themselves, and  give rise to a variety of cell types. The discovery of brain stem cells and  adult neurogenesis provides a new way of approaching the problem of  alcohol–related changes in the brain and may lead to a clearer understanding of  how best to treat and cure alcoholism (30). <br>
                For  example, studies with animals show that high doses of alcohol lead to a  disruption in the growth of new brain cells; scientists believe it may be this  lack of new growth that results in the long–term deficits found in key areas of  the brain (such as hippocampal structure and function) (31,32). Understanding  how alcohol interacts with brain stem cells and what happens to these cells in  alcoholics is the first step in establishing whether the use of stem cell  therapies is an option for treatment (33). </p>
              <h3>SUMMARY </h3>
              <p>Alcoholics  are not all alike. They experience different degrees of impairment, and the  disease has different origins for different people. Consequently, researchers  have not found conclusive evidence that any one variable is solely responsible  for the brain deficits found in alcoholics. Characterizing what makes some  alcoholics vulnerable to brain damage whereas others are not remains the  subject of active research (34). <br>
                The good  news is that most alcoholics with cognitive impairment show at least some  improvement in brain structure and functioning within a year of abstinence,  though some people take much longer (35–37). Clinicians must consider a variety  of treatment methods to help people stop drinking and to recover from  alcohol–related brain impairments, and tailor these treatments to the  individual patient. <br>
                Advanced  technology will have an important role in developing these therapies.  Clinicians can use brain–imaging techniques to monitor the course and success  of treatment, because imaging can reveal structural, functional, and  biochemical changes in living patients over time. Promising new medications  also are in the early stages of development, as researchers strive to design  therapies that can help prevent alcohol’s harmful effects and promote the  growth of new brain cells to take the place of those that have been damaged by  alcohol. </p>
              <p>Source : <a href="http://pubs.niaaa.nih.gov/publications/aa63/aa63.htm">http://pubs.niaaa.nih.gov/publications/aa63/aa63.htm</a> </p>
              <p>&nbsp;</p>
              <h2>How Alcohol Affects the Body</h2>
              <p>Drinking alcohol affects  the body in many ways. These effects can lead to physical and mental changes  that can put alcohol users and others at risk of injury or death. Possible  dangers include falls, household accidents, and car crashes.</p>
              <h3>How  Alcohol Moves Through the Body</h3>
              <p>When a person drinks  beer, wine, or another alcoholic drink, the alcohol is quickly absorbed in the  blood and then carried throughout the body. A drink of alcohol stays in the  body for about 2 hours after being consumed. This period of time can vary  depending on the person's weight, gender, and other factors. When a person  drinks, the concentration of alcohol in the blood builds to a peak, then goes  down. At first, alcohol often makes people feel relaxed and happy. Later, it  can make them feel sleepy or confused.<br>
                The small intestine and  the stomach absorb most of the alcohol after drinking. A small amount leaves  the body through breath and urine. Eating food, especially fatty food, slows  the absorption of alcohol. If people drink more alcohol than their bodies can  absorb, they become drunk.<br>
  <a href="http://nihseniorhealth.gov/alcoholuse/howalcoholaffectsthebody/liverdisease_popup.html"><strong><img border="0" width="69" height="160" src="alcohol_clip_image001.gif" alt="Description: Alcoholic Liver Disease - Click to enlarge in new window."></strong><strong><br>
</strong><strong>Click for more information</strong></a> </p>
              <h3>How  Alcohol Affects the Liver, Brain, and Heart</h3>
              <p>Drinking too much  alcohol affects many parts of the body. It can be especially harmful to the  liver, the organ that metabolizes (breaks down) alcohol and other harmful  substances. People who drink heavily for a long time can develop diseases such  as liver inflammation (alcoholic hepatitis) or severe liver scarring  (cirrhosis). Alcohol-related liver disease can cause death.<br>
                  <a href="http://nihseniorhealth.gov/alcoholuse/howalcoholaffectsthebody/braineffectsofalcohol_popup.html"><strong><img border="0" width="140" height="119" src="alcohol_clip_image002.gif" alt="Description: Brain Effects of Alcohol - Click to enlarge in new window."></strong><strong><br>
                  </strong><strong>Click for more information</strong></a> <br>
                Alcohol not broken down  by the liver goes to the rest of the body, including the brain. Alcohol can  affect parts of the brain that control movement, speech, judgment, and memory.  These effects lead to the familiar signs of drunkenness: difficulty walking,  slurred speech, memory lapses, and impulsive behavior. Long-term heavy drinking  can shrink the frontal lobes of the brain, which impairs thinking skills.<br>
                Drinking alcohol can  affect the heart in good and bad ways. On one hand, studies have shown that  moderate drinking -- up to two drinks a day for men and one drink for women --  can lower the chances of developing heart disease. On the other hand, heavy  drinking -- either all at once or over time -- can damage the heart. Long-term  alcohol use can also result in high blood pressure, which increases a person's  risk of heart disease. However, blood pressure can go back to normal within a  few months after drinking stops if there is not a lot of damage to the heart.</p>
              <h3>Male  and Female Drinkers Compared</h3>
              <p>Alcohol affects men and  women differently. In general, older men are more likely to drink alcohol  compared with older women. But women of all ages are often more sensitive than  men to the effects of alcohol. Women's bodies tend to break alcohol down more  slowly. Also, women have less water in their bodies than men, so alcohol  becomes more concentrated. As a result, women may become more impaired than men  after drinking the same amount. That is why the recommended drinking limit for  women is lower than for men.<br>
                  <a href="http://nihseniorhealth.gov/alcoholuse/howalcoholaffectsthebody/motherdaughter_popup.html"><strong><img border="0" width="106" height="159" src="alcohol_clip_image003.jpg" alt="Description: Mother and Daughter - Click to enlarge in new window."></strong><strong><br>
                </strong><strong>Click for more information</strong></a> </p>
              <div><br>
                Drinking for  a long time is more likely to damage a woman's health than a man's health.  Research suggests that as little as one drink per day can slightly raise the  risk of breast cancers in some women, especially those who have been through  menopause or have a family history of cancer. But it is not possible to predict  how alcohol will affect the risk for cancer in any one woman.<br>
                Source : <a href="http://nihseniorhealth.gov/alcoholuse/howalcoholaffectsthebody/01.html">http://nihseniorhealth.gov/alcoholuse/howalcoholaffectsthebody/01.html</a> </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <h1>Alcohol  Addiction Signs, Symptoms and Effects</h1>
              <h2>What Are the Signs and  Symptoms of Alcohol Abuse and Addiction?</h2>
              <p>Alcoholism is a serious medical  disease with signs and symptoms that vary depending on the amount and frequency  of consumption. Progressing&nbsp;<a href="http://www.timberlineknolls.com/alcohol-addiction">alcoholism</a>&nbsp;will  significantly disrupt the lives of users and their families.<br>
                Physical signs of alcohol  overconsumption and intoxication are recognizable by most adults:</p>
              <ul>
                <li>Slurred or incoherent speech</li>
                <li>Poor balance and clumsiness</li>
                <li>Delayed reflexes</li>
                <li>Stomach pains, vomiting or  nausea</li>
                <li>Loss of consciousness or  blacking-out</li>
                <li>Redness of the face during or  after periods of consumption</li>
              </ul>
              <p>It is possible for a person to  reach a level of intoxication that becomes life-threatening (alcohol  poisoning). The respiratory system becomes depressed, and the person will stop  breathing.</p>
              <h2>Signs of Alcohol Abuse</h2>
              <p>Progressive increases in the  frequency and quantity of alcohol consumption can begin to produce more serious  medical symptoms of alcoholism. Someone abusing alcohol makes drinking a  central activity of her life, displacing healthy activity and relationships,  and resulting in negative consequences. Alcohol abusers often maintain some  capacity to recognize situations that lead to over-consumption, and to regulate  their alcohol intake. Signs of alcohol abuse include:</p>
              <ul>
                <li>Loss of control over amount  consumed once they begin drinking</li>
                <li>Regular inattention to family  and professional obligations</li>
                <li>Dangerous behaviors that carry  risk of legal, financial and/or health consequences for themselves and others</li>
                <li>Increase in expressions of  anger or other emotions, especially in inappropriate settings</li>
                <li>Insomnia, which may be followed  by oversleeping</li>
              </ul>
              <h2>Signs of Alcohol  Dependence (Alcoholism)</h2>
              <p>Untreated alcohol abuse can  progress to an addiction to alcohol characterized by physical dependency and/or  inability to stop despite serious consequences. Once they begin drinking,  alcoholics have little to no control over the amount they consume. Alcohol  dependence indicates that the user has made obtaining and consuming alcohol a  predominant focus of her life. Signs and symptoms of alcohol dependence  represent a serious medical illness:</p>
              <ul>
                <li>Significant hangovers, and  increase in time needed to recover from after-effects of alcohol use</li>
                <li>Increased amount of alcohol  consumed because of increased tolerance; or, decrease in the effects of alcohol  use without substantial increases in the amount consumed</li>
                <li>Reduced attention to personal  and professional responsibilities</li>
                <li>Acknowledgement of side effects  of medical complications from alcoholism</li>
                <li>Repeated unsuccessful efforts  to reduce alcohol consumption</li>
                <li>Withdrawal symptoms when unable  to consume alcohol</li>
              </ul>
              <h2>Withdrawal Symptoms of  Alcoholism</h2>
              <p>Long-term alcohol abuse and  addiction put the user at risk for serious medical consequences if they attempt  to stop alcohol consumption without proper medical advice and supervision.  Alcoholism withdrawal symptoms indicate advanced addictive disease, and should  not be dismissed:</p>
              <ul>
                <li>Tremors, convulsions, or  uncontrolled shaking of the hands (or even the entire body)</li>
                <li>Profuse sweating, even in cold conditions</li>
                <li>Extreme agitation or anxiety</li>
                <li>Persistent insomnia</li>
                <li>Nausea or vomiting</li>
                <li>Seizures</li>
                <li>Hallucinations</li>
              </ul>
              <p>Alcohol detoxification is poses  greater health risks than other drugs. A sudden discontinuation of alcohol  consumption can often induce a condition known as delirium tremens. A person  can die as a direct result of alcohol withdrawal. Generally, medical  detoxification is needed to safely discontinue heavy drinking.</p>
              <p><strong>What Are the Effects of Alcohol Abuse and Alcohol  Addiction?</strong><br>
                Long-term alcohol abuse poses great dangers to an alcoholic's physical,  mental, emotional, social and spiritual health. In addition to serious  ramifications for the user's career, family and friends, alcoholism can cause  irreversible damage to critical organs and body systems:</p>
              <ul>
                <li>Liver</li>
                <li>Nervous system</li>
                <li>Heart</li>
                <li>Stomach (intestines)</li>
                <li>Brain</li>
              </ul>
              <p>Alcohol abuse and addiction also produce other medical side effects.  Alcoholics frequently attribute these complications to other health conditions,  as they attempt to avoid ownership of the consequences of their drinking.  Common medical side effects include:</p>
              <ul>
                <li>High blood pressure</li>
                <li>Sexual problems</li>
                <li>Cancer</li>
                <li>Stomach problems</li>
                <li>Osteoporosis, especially in women</li>
              </ul>
              <p>Alcoholism often causes severe social consequences on a person's life as  well. Being drunk or hung over at work frequently results in termination from a  job, leaving a person and her dependents in severe financial trouble. Domestic  violence, marital conflict, legal problems and isolation from friends and  family are also common results of alcohol abuse, which may be worsened by the  presence of cooccurring anorexia or bulimia.<br>
                  <strong>How Does Alcohol Affect the Body?</strong><br>
                Alcohol acts as a depressant on the central nervous system. It has a  complex mode of action and affects multiple systems in the brain. Most notably  alcohol works by binding to GABA receptors in the brain and i activating the  release of the chief inhibitory neurotransmitter in the central nervous system.  This aspect of alcohol's physiological effects is one reason alcohol  detoxification can be dangerous (see below). Alcohol is metabolized by the  liver. Long term consumption of alcohol in excessive amounts can cause  irreversible damage to the liver.<br>
                Alcohol addiction, or alcoholism, is medically diagnosed as a disease  which manifests itself in the frequent use of alcohol, despite the negative  consequences it has on a person's life. Alcohol abuse causes over 100,000  deaths every year in the United States and Canada. It is the leading cause of  death in teenagers due to alcohol related motor vehicle accidents.<br>
                It is often apparent that a person suffers from alcoholism when both  their mental and physical health suffers as a direct result of their drinking.  Drinking patterns are not the same for every alcoholic. While some people get  drunk every day, others binge drink at specific times depending on their  emotional state.<br>
  <strong>What Causes Alcoholism?</strong><br>
                Although scientists cannot pinpoint specific reasons why alcoholism  develops, they have identified several contributing factors. Genetic  predisposition, environment, and mental health are the leading risk factors for  developing this disease. These factors explain why members of a family with  similar life experiences may respond to alcohol consumption in different ways.  Even in families where alcohol abuse and addiction are prevalent, different  members may respond very differently to treatment and face unique challenges in  recovery.<br>
  <strong><em>Alcohol abuse and  addiction are serious medical conditions that require treatment by chemical  dependency specialists. Abruptly stopping alcohol consumption after extended  use can result in serious medical complications, including death.  Detoxification from alcohol dependence should not be attempted at home or  without direction and supervision from a medical doctor. If you or your loved  one are concerned you may be experiencing symptoms of alcohol withdrawal and  are not under a physician's care, call 911 for emergency assistance.</em></strong> </p>
              <div>
                <p>Source  : <a href="http://www.timberlineknolls.com/alcohol-addiction/signs-effects">http://www.timberlineknolls.com/alcohol-addiction/signs-effects</a> </p>
              </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <h1>The Truth about what Alcohol Does to your  Body</h1>
              <h2>Immediate Effects of Alcohol</h2>
              <p><img width="204" height="300" src="alcohol_clip_image001.jpg" alt="Description: bottle of alcohol">Â&nbsp;  When alcohol is consumed approximately twenty percent of it is rapidly absorbed  into the bloodstream and the rest is absorbed while it gets processed through  the gastrointestinal tract. Once alcohol enters the bloodstream it can diffuse  into almost every biological tissue into the body because cell membranes are  highly permeable to alcohol.<br>
                Check out our list of&nbsp;<a href="http://www.quitalcohol.com/guides/top-10-alcohol-treatment-centers.html" title="A complete list of the top rehab centers in the US, and our reviews about their service, program, and reviews">Top 10 Alcohol Treatment Centers</a> <br>
                When a  person consumes more alcohol than their body can efficiently metabolize than  the amount of alcohol in their bloodstream becomes elevated. The amount of  alcohol in a personâ€™s blood stream is referred to as their blood alcohol  level. The higher a personâ€™s blood alcohol level is the more extreme the  effects of alcohol are on a person. How fast a personâ€™s blood alcohol level  raises and the effects it has on them varies greatly depending on a number of  things, including weight, age, gender, body composition, general health, and  the presence of other drugs or medications.</p>
              <h2>Short term effects</h2>
              <p>When  people begin consuming alcohol they initially may feel increased relaxation,  self-confidence, happiness and sociability, but this generally progresses into  more negative behaviors. Alcohol consumption leads to slowed reflexes, reduced  coordination, impaired thinking, poor judgement, depression, impaired memory,  and a decreased ability to control motor functions.<br>
                Alcohol  use has been linked to violent behavior and an increase in unprotected sex  among young adults. Alcohol also increases the risk of becoming a victim of  sexual assault. Alcohol increases the risk of motor vehicle accidents, suicide,  injury, domestic violence and drowning.</p>
              <h2>Long term effects</h2>
              <h2><a href="http://www.quitalcohol.com/the-truth-about-what-alcohol-does-to-your-body.html/attachment/hungover"><img border="0" width="287" height="300" src="alcohol_clip_image002.jpg" alt="Description: hungover"></a> </h2>
              <p>When alcohol  is continuously consumed over a period of time it begins to affect the body in  many ways. Alcohol consumption increases the risk of many cancers including  liver, breast, esophagus, pancreas, mouth, larynx and pharynx. Alcohol use over  time can also cause alcohol dependency, better known as alcoholism.<br>
                Alcohol  dependency is an addictive disorder that is characterized by the inability to  control the use or quantity of alcohol consumed, the need to consume  increasingly larger amounts of alcohol to achieve the same level of  intoxication, and the constant and continuous impulse to consume alcohol.  Continued alcohol consumption can affect nearly every part of the body.</p>
              <h3>Liver </h3>
              <p>Excess  drinking causes the liver to accumulate fat, known as fatty liver. Fatty liver  can lead to inflammation of the liver which is known as hepatitis. A liver that  has become clogged with fat can not perform at an efficient level which affects  the rest of the bodyâ€™s nutritional health. Excessive drinking can also lead  to cirrhosis. Cirrhosis of the liver happens when liver cells become so damaged  that they cannot regenerate. Once cirrhosis has occurred if a person does not  stop drinking they will experience liver failure which is potentially fatal.</p>
              <h3>Breasts </h3>
              <p>Alcohol  consumption raises the risk for breast cancer. Research suggests that even so  much as one drink a day may increase of personâ€™s risk for breast cancer.  Estrogen levels are raised when alcohol is consumed and increased estrogen  level is a known risk factor for developing breast cancer.</p>
              <h3>Stomach </h3>
              <p>Alcohol  creates irritation and inflammation in the stomach lining which can lead to  ulcers and bleeding of the stomach lining. When the stomach lining is severely  torn it can lead to anemia.</p>
              <h3>Pancreas </h3>
              <p>Excessive  alcohol use is a common cause of pancreatitis. Pancreatitis is the inflammation  of the pancreas and it is major risk factor for pancreatic cancer. Heavy  drinking also impairs the pancreases ability to produce insulin which can lead  to diabetes.</p>
              <h3>Heart </h3>
              <p>Heavy  drinking can be very hard on the heart. It causes cardiomyopathy which is the  stretching and drooping of heart muscle, myocarditis which is inflammation of  the heart muscle andÂ&nbsp;arrythmia which is irregular heartbeat. When alcohol  is consumed it raises blood pressure and blood lipids. This increases the risk  of heart attack, hypertension, raised cholesterol and stroke.</p>
              <h3>Bones </h3>
              <p>Excessive  drinking can accelerate the rate of bone deterioration and increase the risk  for bone fracture and osteoporosis. Calcium is necessary from strong, dense  bones and when alcohol is consumed it acts as a diuretic and flushes calcium  from the bones making them weaker and more susceptible to fracture.</p>
              <h3>Central Nervous System </h3>
              <p>Alcohol  depresses the central nervous system causing many short term effects like slurred  speech, blurred vision, weakened muscles, decreased reaction time and impaired  memory. When alcohol is consumed excessively it can cause cell damage in the  central nervous system creating a condition known as neuropathy. Neuropathy  causes alternating feelings of weakness, burning, pain and numbness in the feet  and hands.</p>
              <p>Source  : http://www.webmd.com/cancer/features/faq-alcohol-and-your-health  http://en.wikipedia.org/wiki/Long-term_effects_of_alcohol  http://www.niaaa.nih.gov/alcohol-health http://www.drugabuse.gov/drugs-abuse/alcohol  http://alcoholism.about.com/od/health/Effects_of_Alcohol_Health_Effects_of_Alcohol.htm  http://www2.potsdam.edu/hansondj/AlcoholAndHealth.html - See more at:  http://www.quitalcohol.com/the-truth-about-what-alcohol-does-to-your-body.html#sthash.0fcxWHoB.dpuf</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <h3>What kind of substance is  alcohol?<a name="1"></a></h3>
              <p>Alcohol is classified as  a depressant because it slows down the central nervous system, causing a  decrease in motor coordination, reaction time and intellectual performance. At  high doses, the respiratory system slows down drastically and can cause a coma  or death.<br>
                It is particularly  dangerous to mix alcohol with other depressants, such as GHB, Rohypnol,  Ketamine, tranquilizers or sleeping pills. Combining depressants multiplies the  effects of both drugs and can lead to memory loss, coma or death.</p>
              <h3>How does alcohol move  through the body?</h3>
              <p>Once swallowed, a drink  enters the stomach and small intestine, where small blood vessels carry it to  the bloodstream. Approximately 20% of alcohol is absorbed through the stomach  and most of the remaining 80% is absorbed through the small intestine.<br>
                Alcohol is metabolized  by the liver, where enzymes break down the alcohol. Understanding the rate of  metabolism is critical to understanding the effects of alcohol. In general, the  liver can process one ounce of liquor (or one standard drink) in one hour. If  you consume more than this, your system becomes saturated, and the additional  alcohol will accumulate in the blood and body tissues until it can be  metabolized. This is why having a lot of shots or playing drinking games can  result in high blood alcohol concentrations that last for several hours.<br>
                back to top<br>
                For an interactive look  at alcohol moving through the human body, you can go to&nbsp;<a href="http://www.collegedrinkingprevention.gov/students/anatomy/InteractiveBody_flash.aspx" target="_blank">College Drinking Prevention</a><a href="http://www.collegedrinkingprevention.gov/students/anatomy/InteractiveBody_flash.aspx">.</a> <br>
  <a href="http://www.brown.edu/Student_Services/Health_Services/Health_Education/alcohol,_tobacco,_&_other_drugs/alcohol/alcohol_&_your_body.php#77">back to  top</a> </p>
              <h3>What is &quot;one  drink&quot;?</h3>
              <p><img border="0" width="468" height="306" src="alcohol_clip_image001_0000.jpg" alt="Description: http://www.brown.edu/Student_Services/Health_Services/Health_Education/img/atod/standard%20drink%20for%20web.jpg"> <br>
                Knowing how to count a  standard drink is necessary for calculating blood alcohol concentrations. Too  often, people underestimate how much they have had to drink because they aren't  using standard measurements.<br>
  <br>
                Beer<br>
                One drink = one 12-ounce beer. This is normal-strength beer (5% alcohol).&nbsp;<br>
  <br>
                Malt liquor ranges from 6-9% alcohol, so 12 ounces of malt liquor is  approximately 1.5 drinks; 40 ounces of malt liquor is 4.5 drinks.<br>
  <br>
                Liquor<br>
                One drink = 1.5 ounces of liquor (40% alcohol or 80 proof). This is how much  whiskey, vodka, gin, tequila, brandy, cognac, etc. is in a measured mixed drink  or in a standard-size shot glass. Remember that mixed drinks may not be  measured and often contain far more than 1.5 ounces of alcohol.&nbsp;<br>
  <br>
                Grain alcohol (Everclear) is 95% alcohol or 190 proof and some rums like  Bacardi 151 are 151 proof or 75% alcohol.&nbsp; These liquors are banned in  many states because of their high alcohol content.<br>
  <br>
                Wine<br>
                One drink = 5 ounces of standard wine (12% alcohol).&nbsp; This is most table  wines: white, red, rosé, champagne.<br>
  <br>
                One drink = 3-4 ounces of fortified wine (17% alcohol).&nbsp; This is wine with  13% or more alcohol content, such as sherry or port.<br>
  <a href="http://united4health.org/drink_equiv.html" target="_blank">Click  here for a drink chart with other drinks and drink sizes.</a> </p>
              <h3>Knowing your Blood Alcohol  Content (BAC)</h3>
              <p>Understanding BAC is key  to understanding how alcohol affects your body and the danger zones of alcohol  poisoning. BAC measures the ratio of alcohol in the blood. So, a BAC of .10  means one part alcohol for every 1000 parts of blood.<br>
                To calculate your BAC,  select the appropriate chart--and then find the row with your approximate  weight. Then select the number of drinks consumed. This BAC figure would result  if the total number of drinks were consumed in one hour. The Time Factor table  can be used to calculate BAC over more than one hour.<br>
  <strong>For  Males</strong> </p>
              <table border="1" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="54" valign="top"><br>
                      <br>
                    Body weight<br>
                    (lbs) </td>
                  <td width="54" valign="top"><p align="center">1<br>
                    drink</p></td>
                  <td width="54" valign="top"><p align="center">2 drinks</p></td>
                  <td width="54" valign="top"><p align="center">3 drinks</p></td>
                  <td width="54" valign="top"><p align="center">4 drinks</p></td>
                  <td width="54" valign="top"><p align="center">5 drinks</p></td>
                  <td width="54" valign="top"><p align="center">6 drinks</p></td>
                  <td width="54" valign="top"><p align="center">7 drinks</p></td>
                  <td width="54" valign="top"><p align="center">8 drinks</p></td>
                  <td width="54" valign="top"><p align="center">9 drinks</p></td>
                  <td width="54" valign="top"><p align="center">10 drinks</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>100</p></td>
                  <td width="54" valign="top"><p>.043</p></td>
                  <td width="54" valign="top"><p>.087</p></td>
                  <td width="54" valign="top"><p>.130</p></td>
                  <td width="54" valign="top"><p>.174</p></td>
                  <td width="54" valign="top"><p>.217</p></td>
                  <td width="54" valign="top"><p>.261</p></td>
                  <td width="54" valign="top"><p>.304</p></td>
                  <td width="54" valign="top"><p>.348</p></td>
                  <td width="54" valign="top"><p>.391</p></td>
                  <td width="54" valign="top"><p>.435</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>125</p></td>
                  <td width="54" valign="top"><p>.034</p></td>
                  <td width="54" valign="top"><p>.069</p></td>
                  <td width="54" valign="top"><p>.103</p></td>
                  <td width="54" valign="top"><p>.139</p></td>
                  <td width="54" valign="top"><p>.173</p></td>
                  <td width="54" valign="top"><p>.209</p></td>
                  <td width="54" valign="top"><p>.242</p></td>
                  <td width="54" valign="top"><p>.278</p></td>
                  <td width="54" valign="top"><p>.312</p></td>
                  <td width="54" valign="top"><p>.346</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>150</p></td>
                  <td width="54" valign="top"><p>.029</p></td>
                  <td width="54" valign="top"><p>.058</p></td>
                  <td width="54" valign="top"><p>.087</p></td>
                  <td width="54" valign="top"><p>.116</p></td>
                  <td width="54" valign="top"><p>.145</p></td>
                  <td width="54" valign="top"><p>.174</p></td>
                  <td width="54" valign="top"><p>.203</p></td>
                  <td width="54" valign="top"><p>.232</p></td>
                  <td width="54" valign="top"><p>.261</p></td>
                  <td width="54" valign="top"><p>.290</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>175</p></td>
                  <td width="54" valign="top"><p>.025</p></td>
                  <td width="54" valign="top"><p>.050</p></td>
                  <td width="54" valign="top"><p>.075</p></td>
                  <td width="54" valign="top"><p>.100</p></td>
                  <td width="54" valign="top"><p>.125</p></td>
                  <td width="54" valign="top"><p>.150</p></td>
                  <td width="54" valign="top"><p>.175</p></td>
                  <td width="54" valign="top"><p>.200</p></td>
                  <td width="54" valign="top"><p>.225</p></td>
                  <td width="54" valign="top"><p>.250</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>200</p></td>
                  <td width="54" valign="top"><p>.022</p></td>
                  <td width="54" valign="top"><p>.043</p></td>
                  <td width="54" valign="top"><p>.065</p></td>
                  <td width="54" valign="top"><p>.087</p></td>
                  <td width="54" valign="top"><p>.108</p></td>
                  <td width="54" valign="top"><p>.130</p></td>
                  <td width="54" valign="top"><p>.152</p></td>
                  <td width="54" valign="top"><p>.174</p></td>
                  <td width="54" valign="top"><p>.195</p></td>
                  <td width="54" valign="top"><p>.217</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>225</p></td>
                  <td width="54" valign="top"><p>.019</p></td>
                  <td width="54" valign="top"><p>.039</p></td>
                  <td width="54" valign="top"><p>.058</p></td>
                  <td width="54" valign="top"><p>.078</p></td>
                  <td width="54" valign="top"><p>.097</p></td>
                  <td width="54" valign="top"><p>.117</p></td>
                  <td width="54" valign="top"><p>.136</p></td>
                  <td width="54" valign="top"><p>.156</p></td>
                  <td width="54" valign="top"><p>.175</p></td>
                  <td width="54" valign="top"><p>.198</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>250</p></td>
                  <td width="54" valign="top"><p>.017</p></td>
                  <td width="54" valign="top"><p>.035</p></td>
                  <td width="54" valign="top"><p>.052</p></td>
                  <td width="54" valign="top"><p>.070</p></td>
                  <td width="54" valign="top"><p>.087</p></td>
                  <td width="54" valign="top"><p>.105</p></td>
                  <td width="54" valign="top"><p>.122</p></td>
                  <td width="54" valign="top"><p>.139</p></td>
                  <td width="54" valign="top"><p>.156</p></td>
                  <td width="54" valign="top"><p>.173</p></td>
                </tr>
              </table>
              <p><strong>For  Females</strong> </p>
              <table border="1" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="54" valign="top"><br>
                      <br>
                    Body weight<br>
                    (lbs) </td>
                  <td width="54" valign="top"><p align="center">1<br>
                    drink</p></td>
                  <td width="54" valign="top"><p align="center">2 drinks</p></td>
                  <td width="54" valign="top"><p align="center">3 drinks</p></td>
                  <td width="54" valign="top"><p align="center">4 drinks</p></td>
                  <td width="54" valign="top"><p align="center">5 drinks</p></td>
                  <td width="54" valign="top"><p align="center">6 drinks</p></td>
                  <td width="54" valign="top"><p align="center">7 drinks</p></td>
                  <td width="54" valign="top"><p align="center">8 drinks</p></td>
                  <td width="54" valign="top"><p align="center">9 drinks</p></td>
                  <td width="54" valign="top"><p align="center">10 drinks</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>100</p></td>
                  <td width="54" valign="top"><p>.050</p></td>
                  <td width="54" valign="top"><p>.101</p></td>
                  <td width="54" valign="top"><p>.152</p></td>
                  <td width="54" valign="top"><p>.203</p></td>
                  <td width="54" valign="top"><p>.253</p></td>
                  <td width="54" valign="top"><p>.304</p></td>
                  <td width="54" valign="top"><p>.355</p></td>
                  <td width="54" valign="top"><p>.406</p></td>
                  <td width="54" valign="top"><p>.456</p></td>
                  <td width="54" valign="top"><p>.507</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>125</p></td>
                  <td width="54" valign="top"><p>.040</p></td>
                  <td width="54" valign="top"><p>.080</p></td>
                  <td width="54" valign="top"><p>.120</p></td>
                  <td width="54" valign="top"><p>.162</p></td>
                  <td width="54" valign="top"><p>.202</p></td>
                  <td width="54" valign="top"><p>.244</p></td>
                  <td width="54" valign="top"><p>.282</p></td>
                  <td width="54" valign="top"><p>.324</p></td>
                  <td width="54" valign="top"><p>.364</p></td>
                  <td width="54" valign="top"><p>.404</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>150</p></td>
                  <td width="54" valign="top"><p>.034</p></td>
                  <td width="54" valign="top"><p>.068</p></td>
                  <td width="54" valign="top"><p>.101</p></td>
                  <td width="54" valign="top"><p>.135</p></td>
                  <td width="54" valign="top"><p>.169</p></td>
                  <td width="54" valign="top"><p>.203</p></td>
                  <td width="54" valign="top"><p>.237</p></td>
                  <td width="54" valign="top"><p>.271</p></td>
                  <td width="54" valign="top"><p>.304</p></td>
                  <td width="54" valign="top"><p>.338</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>175</p></td>
                  <td width="54" valign="top"><p>0.29</p></td>
                  <td width="54" valign="top"><p>.058</p></td>
                  <td width="54" valign="top"><p>.087</p></td>
                  <td width="54" valign="top"><p>.117</p></td>
                  <td width="54" valign="top"><p>.146</p></td>
                  <td width="54" valign="top"><p>.175</p></td>
                  <td width="54" valign="top"><p>.204</p></td>
                  <td width="54" valign="top"><p>.233</p></td>
                  <td width="54" valign="top"><p>.262</p></td>
                  <td width="54" valign="top"><p>.292</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>200</p></td>
                  <td width="54" valign="top"><p>.026</p></td>
                  <td width="54" valign="top"><p>.050</p></td>
                  <td width="54" valign="top"><p>.076</p></td>
                  <td width="54" valign="top"><p>.101</p></td>
                  <td width="54" valign="top"><p>.126</p></td>
                  <td width="54" valign="top"><p>.152</p></td>
                  <td width="54" valign="top"><p>.177</p></td>
                  <td width="54" valign="top"><p>.203</p></td>
                  <td width="54" valign="top"><p>.227</p></td>
                  <td width="54" valign="top"><p>.253</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>225</p></td>
                  <td width="54" valign="top"><p>.022</p></td>
                  <td width="54" valign="top"><p>.045</p></td>
                  <td width="54" valign="top"><p>.068</p></td>
                  <td width="54" valign="top"><p>.091</p></td>
                  <td width="54" valign="top"><p>.113</p></td>
                  <td width="54" valign="top"><p>.136</p></td>
                  <td width="54" valign="top"><p>.159</p></td>
                  <td width="54" valign="top"><p>.182</p></td>
                  <td width="54" valign="top"><p>.204</p></td>
                  <td width="54" valign="top"><p>.227</p></td>
                </tr>
                <tr>
                  <td width="54" valign="top"><p>250</p></td>
                  <td width="54" valign="top"><p>.020</p></td>
                  <td width="54" valign="top"><p>.041</p></td>
                  <td width="54" valign="top"><p>.061</p></td>
                  <td width="54" valign="top"><p>.082</p></td>
                  <td width="54" valign="top"><p>.101</p></td>
                  <td width="54" valign="top"><p>.122</p></td>
                  <td width="54" valign="top"><p>.142</p></td>
                  <td width="54" valign="top"><p>.162</p></td>
                  <td width="54" valign="top"><p>.182</p></td>
                  <td width="54" valign="top"><p>.202</p></td>
                </tr>
              </table>
              <p><strong>The  Time Factor</strong> </p>
              <div align="center">
                <table border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="127" valign="top"><br>
                      Hours    since first drink </td>
                    <td width="156" valign="top"><p align="center">Subtract this from BAC</p></td>
                  </tr>
                  <tr>
                    <td width="127" valign="top"><p align="center">1</p></td>
                    <td width="156" valign="top"><p align="center">.015</p></td>
                  </tr>
                  <tr>
                    <td width="127" valign="top"><p align="center">2</p></td>
                    <td width="156" valign="top"><p align="center">.030</p></td>
                  </tr>
                  <tr>
                    <td width="127" valign="top"><p align="center">3</p></td>
                    <td width="156" valign="top"><p align="center">.045</p></td>
                  </tr>
                  <tr>
                    <td width="127" valign="top"><p align="center">4</p></td>
                    <td width="156" valign="top"><p align="center">.060</p></td>
                  </tr>
                  <tr>
                    <td width="127" valign="top"><p align="center">5</p></td>
                    <td width="156" valign="top"><p align="center">.075</p></td>
                  </tr>
                  <tr>
                    <td width="127" valign="top"><p align="center">6</p></td>
                    <td width="156" valign="top"><p align="center">.090</p></td>
                  </tr>
                </table>
              </div>
              <p>Source: Evans, Glen and  Robert O'Brien (1991) The Encyclopedia of Alcoholism.<br>
                Note: these charts give  you good general guidelines, but there are many factors involved in a person's  reaction to alcohol, including body composition, use of medication or other  drugs, mood changes and metabolism.<br>
                This&nbsp;<a href="http://adcaps.wsu.edu/alcohol101/blood-alcohol-chart/" target="_blank">link</a>&nbsp;can  give you more specific BAC information based on your weight and gender.<br>
  <a href="http://www.brown.edu/Student_Services/Health_Services/Health_Education/alcohol,_tobacco,_&_other_drugs/alcohol/alcohol_&_your_body.php#77">back to  top</a> </p>
              <h3>Effects of blood alcohol  content on thinking, feeling and behavior:</h3>
              <p>Now that you know how to  calculate BAC, see how alcohol affects your body at different levels.<br>
                  <em>0.02 - 0.03</em>&nbsp;Legal  definition of intoxication in R.I. for people under 21 years of age. Few obvious  effects; slight intensification of mood.<br>
                  <em>0.05 - 0.06</em><em>&nbsp;</em>Feeling  of warmth, relaxation, mild sedation; exaggeration of emotion and behavior;  slight decrease in reaction time and in fine-muscle coordination; impaired  judgment about continued drinking.<br>
                  <em>0.07 - 0.09</em>&nbsp;More  noticeable speech impairment and disturbance of balance; impaired motor  coordination, hearing and vision; feeling of elation or depression; increased  confidence; may not recognize impairment.<br>
                  <em>0.08</em>&nbsp;Legal  definition of intoxication in R.I. for people 21 years and older.<br>
                  <em>0.11 - 0.12</em>&nbsp;Coordination  and balance becoming difficult; distinct impairment of mental faculties and  judgment.<br>
                  <em>0.14 - 0.15</em>&nbsp;Major  impairment of mental and physical control; slurred speech, blurred vision and  lack of motor skills; needs medical evaluation.<br>
                  <em>0.20</em><em>&nbsp;</em>Loss  of motor control; must have assistance standing or walking; mental confusion;  needs medical assistance.<br>
                  <em>0.30 and higher</em>&nbsp;Severe  intoxication; potential loss of consciousness; needs hospitalization.</p>
              <h3>Why are men and women  different?<a name="6"></a></h3>
              <p>Because of several  physiological reasons, a woman will feel the effects of alcohol more than a  man, even if they are the same size. There is also increasing evidence that  women are more susceptible to alcohol's damaging effects than are men. Below  are explanations of why men and women process alcohol differently.<br>
                  <em>Ability to dilute  alcohol</em><br>
                Women have less body water (52% for the average woman v. 61% for the average  man). This means that a man's body will automatically dilute the alcohol more  than a woman's body, even if the two people weigh the same amount.<br>
  <em>Ability to metabolize  alcohol</em><br>
                Women have less dehydrogenase, a liver enzyme that breaks down alcohol. So a  woman's body will break down alcohol more slowly than a man's.<br>
  <em>Hormonal factors</em><em>&nbsp;</em><br>
                Premenstrual hormonal changes cause intoxication to set in faster during the  days right before a woman gets her period. Birth control pills or other  medication with estrogen will slow down the rate at which alcohol is eliminated  from the body.<br>
  <em>Women are more susceptible  to long-term alcohol-induced damage.</em><br>
                Women who are heavy drinkers are at greater risk of liver disease, damage to  the pancreas and high blood pressure than male heavy drinkers. Proportionately  more alcoholic women die from cirrhosis than do alcoholic men.<br>
  <a href="http://www.brown.edu/Student_Services/Health_Services/Health_Education/alcohol,_tobacco,_&_other_drugs/alcohol/alcohol_&_your_body.php#77">back to  top</a> </p>
              <h3><strong>What  other factors affect your response to alcohol?</strong><a name="7"></a> </h3>
              <p><em>Food</em><br>
                Having food in your stomach can have a big influence on the absorption of  alcohol. The food will dilute the alcohol and slow the emptying of the stomach  into the small intestine, where alcohol is very rapidly absorbed. Peak BAC  could be as much as 3 times higher in someone with an empty stomach than in  someone who has eaten a meal before drinking. Eating regular meals and having  snacks while drinking will keep you from getting too drunk too quickly.<br>
  <em>Asian descent</em><br>
                Some people of Asian descent have more difficulty metabolizing alcohol. They  may experience facial flushing, nausea, headache, dizziness and rapid  heartbeat. It appears that one of the liver enzymes that is needed to process  alcohol is not active in these individuals. It is estimated that up to 50% of Asians  are susceptible to these reactions to alcohol.<br>
  <em>Family History</em><br>
                Research studies have found that children of alcoholics are four times more  likely than the general population to develop alcohol problems.&nbsp; However,  many people with a family history of alcoholism do not become alcoholics.&nbsp;  Additional factors that increase the risk of developing alcoholism include  having an alcoholic parent who is depressed or has other psychological  problems, growing up in a family where both parents abuse alcohol or other drugs,  having a parent with severe alcohol abuse problems and living in a family where  conflicts lead to aggression and violence.&nbsp;</p>
              <h3>What is the difference  between a blackout and passing out?<a name="8"></a></h3>
              <p>&quot;Blackouts&quot;  (sometimes referred to as alcohol-related memory loss or &quot;alcoholic  amnesia&quot;) occur when people have no memory of what happened while  intoxicated. During a blackout, someone may appear fine to others; however, the  next day s/he cannot remember parts of the night and what s/he did. The cause  of blackouts is not well understood but may involve the interference of  short-term memory storage, deep seizures, or in some cases, psychological  depression.<br>
                Blackouts shouldn't be  confused with &quot;passing out,&quot; which happens when people lose  consciousness from drinking excessive amounts of alcohol. Losing consciousness  means that the person has reached a very dangerous level of intoxication; they  could aspirate on their vomit or slip into a coma. If someone has passed out,  call EMS immediately (401.863-4111). S/he needs immediate medical attention.<br>
  <a href="http://www.brown.edu/Student_Services/Health_Services/Health_Education/alcohol,_tobacco,_&_other_drugs/alcohol/alcohol_&_your_body.php#77">back to  top</a> </p>
              <h3>What is a hangover and can I  prevent it?<a name="9"></a></h3>
              <p>Hangovers are the body's  reaction to poisoning and withdrawal from alcohol. Hangovers begin 8 to 12  hours after the last drink and symptoms include fatigue, depression, headache,  thirst, nausea, and vomiting. The severity of symptoms varies according to the  individual and the quantity of alcohol consumed.<br>
                People have tried many  different things to relieve the effects of &quot;the morning after,&quot; and  there are a lot of myths about what to do to prevent or alleviate a hangover.  The only way to prevent a hangover is to drink in moderation:</p>
              <ul>
                <li>Eat a good dinner and continue  to snack throughout the night.</li>
                <li>Start out slowly to see how the  alcohol is affecting you.</li>
                <li>Avoid drinking games or shots.  Drinking a large amount of alcohol in a short amount of time is the most likely  way to become dangerously intoxicated.</li>
              </ul>
              <p><em>Here are some of the  things that WON'T help a hangover:</em> </p>
              <ul>
                <li>Drinking a little more alcohol  the next day. This simply puts more alcohol in your body and prolongs the  effects of the alcohol intoxication.</li>
                <li>Having caffeine while drinking  will not counteract the intoxication of alcohol; you simply get a more alert  drunk person. Excessive caffeine will continue to lower your blood sugar and  dehydrate you even more than alcohol alone.</li>
                <li>Giving water to someone who is  throwing up. Once the stomach is irritated enough to cause vomiting, it doesn't  matter what you put into it -- it's going to come back up. Any liquid will  cause a spasm reaction and more vomiting.</li>
                <li>It's best not to take a pain  reliever before going to bed. Give your body a chance to process the alcohol  before taking any medication.</li>
              </ul>
              <p><em>Here are some things  that MIGHT help a hangover:</em> </p>
              <ul>
                <li>When you wake up, it's  important to eat a healthy meal. Processing alcohol causes a drop in blood  sugar and can contribute to headaches.</li>
                <li>Drink plenty of water and juice  to get rehydrated.</li>
                <li>Take a pain reliever like  Tylenol (acetaminophen) when you wake up. Do not take a pain reliever before  going to bed because it will tax your liver. Let your body process the alcohol  while you are sleeping. We do not recommend aspirin because of Reyes syndrome,  a rare but serious illness in teenagers and children.</li>
                <li>Avoid excessive caffeine as it  may contribute to dehydration. However, if you drink coffee every morning, have  your first cup not more than a couple of hours after your regular time. Don't  force your body to go through caffeine withdrawal while you are recovering from  a hangover.</li>
                <li>An over-the-counter antacid  (Tums, Pepto Bismol or Maalox) may relieve some of the symptoms of an upset  stomach.</li>
                <li>Do not go too many hours without  food as this will increase the effect of the low blood sugar caused by alcohol.</li>
                <li>Eat complex carbohydrates like  crackers, bagels, bread, cereal or pasta.</li>
              </ul>
              <h3><br>
  Source :http://www.brown.edu/Student_Services/Health_Services/Health_Education/alcohol,_tobacco,_&amp;_other_drugs/alcohol/alcohol_&amp;_your_body.php</h3>
          <p>&nbsp;</p>
              <p>&nbsp;</p>
              <h1>Interactive  Body Content</h1>
              <h3>Brain </h3>
              <p>Alcohol can cause your neurotransmitters to relay information too  slowly, so you feel extremely drowsy. Alcohol-related disruptions to the  neurotransmitter balance also can trigger mood and behavioral changes,  including depression, agitation, memory loss, and even seizures. Long-term,  heavy drinking causes alterations in the neurons, such as reductions in the  size of brain cells. As a result of these and other changes, brain mass shrinks  and the brain’s inner cavity grows bigger. These changes may affect a wide  range of abilities, such as motor coordination, temperature regulation, sleep,  mood, and various cognitive functions, including learning and memory.<br>
                One neurotransmitter particularly susceptible to even small  amounts of alcohol is called glutamate. Among other things, glutamate affects  memory. Researchers believe that alcohol interferes with glutamate action, and  this may be what causes some people to temporarily black out, or forget much of  what happened during a night of heavy drinking.<br>
                Alcoholic liver disease can also damage the brain. The liver breaks  down alcohol—and the toxins it releases. During this process, alcohol’s  byproducts damage liver cells. These damaged liver cells no longer function as  well as they should and allow too much of these toxic substances, ammonia and  manganese in particular, to travel to the brain. These substances proceed to  damage brain cells, causing a serious and potentially fatal brain disorder  known as&nbsp;<em>hepatic encephalopathy</em>.  Hepatic encephalopathy causes a range of problems, from less severe to fatal.  These problems can include:</p>
              <ul type="disc">
                <li>Sleep       disturbances</li>
                <li>Mood       and personality changes</li>
                <li>Anxiety</li>
                <li>Depression</li>
                <li>Shortened       attention span</li>
                <li>Coordination       problems, including asterixis, which results in hand shaking or flapping</li>
                <li>Coma</li>
                <li>Death.</li>
              </ul>
              <p>Alcohol can affect the brain at any stage of development—even  before birth. Fetal alcohol spectrum disorders encompass the full range of  physical, learning, and behavioral problems, and other birth defects that  result from prenatal alcohol exposure.<strong><br clear="all">
              </strong></p>
              <h3>Heart </h3>
              <p>Long-term heavy drinking weakens the heart muscle, causing a  condition called alcoholic cardiomyopathy. A weakened heart droops and  stretches and cannot contract effectively. As a result, it cannot pump enough  blood to sufficiently nourish the organs. In some cases, this blood flow  shortage causes severe damage to organs and tissues. Symptoms of cardiomyopathy  include shortness of breath and other breathing difficulties, fatigue, swollen  legs and feet, and irregular heartbeat. It can even lead to heart failure.<br>
                Both binge drinking and long-term drinking can affect how quickly  a heart beats. The heart depends on an internal pacemaker system to keep it  pumping consistently and at the right speed. Alcohol disturbs this pacemaker  system and causes the heart to beat too rapidly, or irregularly. These heart  rate abnormalities are called arrhythmias. Drinking to excess on a particular  occasion, especially when you generally don’t drink, can trigger either of  these irregularities. Over the long-term, chronic drinking changes the course  of electrical impulses that drive the heart’s beating, which creates  arrhythmia.<br>
                Both binge drinking and long-term heavy drinking can lead to  strokes, even in people without coronary heart disease. Recent studies show  that people who binge drink are about 56 percent more likely than people who  never binge drink to suffer an ischemic stroke over 10 years. Binge drinkers  also are about 39 percent more likely to suffer any type of stroke than people  who never binge drink. In addition, alcohol exacerbates the problems that often  lead to strokes, including hypertension, arrhythmias, and cardiomyopathy.<br>
                Chronic alcohol use, as well as binge drinking, can cause high  blood pressure, or hypertension. Your blood pressure is a measurement of the pressure  your heart creates as it beats, and the pressure inside your veins and  arteries. Heavy alcohol consumption triggers the release of certain stress  hormones that in turn constrict blood vessels. This elevates blood pressure. In  addition, alcohol may affect the function of the muscles within the blood  vessels, causing them to constrict and elevate blood pressure.</p>
              <h3>Liver </h3>
              <p>There probably isn’t a more vital—yet underappreciated—organ in  the human body than the liver. While we may recognize, in the most general  terms, the role that the liver plays, many of us don’t fully understand its  many functions or vulnerabilities, particularly with regard to alcohol. And yet  the alcohol-liver connection is critical, as more than 2 million Americans  suffer from liver disease caused by alcohol.<br>
                By performing more than 500 different functions, the liver is  essential to our health. Its primary role is to filter all the blood in our  bodies by breaking down and eliminating toxins and storing excess blood sugar.  It also produces enzymes that break down fats, manufactures proteins that  regulate blood clotting, and stores a number of essential vitamins and  minerals. All told, the liver keeps us alive by enabling us to digest food,  absorb nutrients, control infections, and get rid of toxic substances in our  bodies.<br>
                While liver problems can be inherited, or developed in response to  certain viruses or chemicals, excessive alcohol use plays a major role. To the  human body, alcohol is a toxin that is broken down by the liver as the body begins  the process of getting rid of these foreign components. However, chronic heavy  drinking causes the liver to become fatty. This condition makes the liver more  vulnerable to dangerous inflammation, such as alcoholic hepatitis, and its  associated complications. With continued drinking, persistent inflammation  causes fibrous tissue to increase in the liver, which prevents the necessary  blood supply from reaching the liver cells. Without the oxygen and other  nutrients supplied by this blood, the liver cells eventually die and are  replaced with scar tissue, creating a condition known as cirrhosis. In mild  cases, the liver can actually make repairs and continue to function. However,  advanced cirrhosis causes continued deterioration and liver failure.<br>
                In some cases, lifestyle changes can help treat alcohol-liver  problems. Abstinence from alcohol, along with better nutrition and quitting  smoking, can help prevent further injury and keep liver diseases in check. In  extreme cases, however, a liver transplant may be the primary treatment option.</p>
              <h3>Pancreas </h3>
              <p>A pancreas unaffected by alcohol sends enzymes out to the small  intestine to metabolize food. Alcohol jumbles this process. It causes the  pancreas to secrete its digestive juices internally, rather than sending the  enzymes to the small intestine.<br>
                These enzymes, as well as acetaldehyde— a substance produced from  metabolizing, or breaking down the alcohol—are harmful to the pancreas. If you  consume alcohol excessively over a long time, this continued process can cause  inflammation, as well as swelling of tissues and blood vessels.<br>
                This inflammation is called pancreatitis, and it prevents the  pancreas from working properly. Pancreatitis occurs as a sudden attack, called  acute pancreatitis. As excessive drinking continues, the inflammation can  become constant. This condition is known as chronic pancreatitis. Pancreatitis  is also a risk factor for the development of pancreatic cancer. A heavy drinker  may not be able to detect the buildup of pancreatic damage until the problems  set off an attack. An acute pancreatic attack causes symptoms including:</p>
              <ul type="disc">
                <li>Abdominal       pain, which may radiate up the back</li>
                <li>Nausea       and vomiting</li>
                <li>Fever</li>
                <li>Rapid       heart rate</li>
                <li>Diarrhea</li>
                <li>Sweating.</li>
              </ul>
              <p>Chronic pancreatitis causes these symptoms as well as severe  abdominal pain, significant reduction in pancreatic function and digestion, and  blood sugar problems. Chronic pancreatitis can slowly destroy the pancreas and  lead to diabetes or even death.<strong><br clear="all">
              </strong></p>
              <h3>Stomach </h3>
              <p>The stomach is designed to process and transport food. Ingesting healthy  foods makes this organ run smoothly.<br>
                After ingestion, alcohol travels down the esophagus into the  stomach, where some of it is absorbed into your bloodstream. The unabsorbed  alcohol continues to move through the gastrointestinal tract. The majority of  it will enter the small intestine and get absorbed into the bloodstream through  the walls of the small intestine, or it can stay in the stomach and cause  irritation.<br>
                While in the stomach, alcohol acts as an irritant and increases  digestive juices (hydrochloric acid) that are secreted from the stomach lining.  Intoxicating amounts of alcohol can halt the digestive process, robbing the  body of vital vitamins and minerals. Chronic irritation may lead to damage to  the lining of the stomach.<br>
                Drinking alcohol and taking medication that causes stomach  irritation, such as aspirin, can cause gastritis (inflammation of the stomach  lining), ulcers, and severe bleeding.<strong><br clear="all">
</strong></p>
              <h3>Kidneys </h3>
              <p>Binge drinking or chronic alcohol consumption can interfere with  kidney function directly, or indirectly as a consequence of liver disease.<br>
                Normally the rate of blood flow through the kidneys is tightly  controlled, so that plasma can be filtered and substances the body needs, such  as electrolytes (electrically charged particles, or ions), can be reabsorbed  under optimal circumstances. Established liver disease impairs this important  balancing act, however, by either greatly augmenting or reducing the rates of  plasma flow and filtration through a mass of capillaries called the glomerul.<br>
                One of the main functions of the kidneys is to regulate both the  volume and the composition of body fluid, including electrolytes, such as  sodium, potassium, and chloride ions. However, alcohol can have the diuretic  effect of increasing urine volume. This in turn can change the body’s fluid  level and disturb the electrolyte balance.<br>
                Alcohol can augment urine flow within 20 minutes of consumption.  As a result of urinary fluid losses, the concentration of electrolytes in blood  serum increases. These changes can be profound in chronic alcoholic patients,  who may demonstrate clinical evidence of dehydration.<strong><br clear="all">
</strong></p>
              <h3>Lungs </h3>
              <p>It only recently has been recognized that alcohol abuse also  increases the risk of acute lung injury following major trauma, such as a  serious motor vehicle accident, gunshot, or other event requiring  hospitalization, or the spread of bacteria attributed to infection (i.e.,  sepsis).<br>
                The well-known acute intoxicating effects of alcohol and the  concomitant risk of aspiration of secretions or foreign material into the  trachea and lungs are components in the development of alcohol-associated lung  (i.e., pulmonary) disease. In the past decade, clinical and experimental  evidence has emerged that implicates a chronic imbalance in the cell (i.e.,  oxidative stress) and consequent cellular dysfunction within the layer of  tissue lining the airway (i.e., airway epithelium) as well as  pathogen-ingesting white blood cells (i.e., macrophages) in the airway.  Moreover, now it is recognized that these disruptions in lung function can  occur even in young and otherwise healthy individuals long before they develop  clinically apparent signs of alcohol-induced organ damage such as liver disease  and/or other end-stage manifestations of longstanding alcohol abuse. Based on  these recent studies, the concept of the alcoholic lung is emerging, which is  characterized by severe oxidative stress that alone may not cause detectable  lung impairment but may predispose those who are dependent on or abuse alcohol  to severe lung injury if they are unfortunate enough to suffer serious trauma  or other acute illnesses, and makes them more prone to lung infections.</p>
              <p>&nbsp;Source : <a href="http://www.collegedrinkingprevention.gov/collegestudents/anatomy/body_nonflash.aspx">http://www.collegedrinkingprevention.gov/collegestudents/anatomy/body_nonflash.aspx</a> </p>
              <p>&nbsp;</p>
              <p>&nbsp; </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>
                <!--end of the carousel -->
                
                
                <!-- end page-wrapper -->
                
                
                        </p>
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
