
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
                    <h1 class="page-header"><i class="fa fa-home fa-fw"></i> Balance Diet</h1>
                </div>
                <!--End Page Header -->
            </div>

            


           

              <!--start of the carousel -->
              <p>A diet based on starchy foods  such as rice and pasta with plenty of fruit and vegetables, some protein-rich  foods such as meat, fish and lentils, some milk and dairy foods, and not too  much fat, salt or sugar, will give you all the nutrients you need.<br>
                When it comes to a healthy diet,  balance is the key to getting it right. This means eating a wide variety of  foods in the right proportions, and consuming the right amount of food and  drink to achieve and maintain a healthy body weight.<br>
                Studies show that many of us are  eating more than we need, and should try to take steps to reduce our intake and  eat less. It’s not just the food that you eat; some drinks can also be very  high in kilojoules, particularly those high in sugar. Most adults need to eat  and drink fewer kilojoules in order to lose weight, even if they already eat a  balanced diet.<br>
  <strong><em>Food  groups</em></strong><br>
                All the food we eat can be  divided into five groups. Try to choose a variety of different foods from the  first four groups.<br>
                They are:</p>
              <ol start="1" type="1">
                <li>Fruit       and vegetables</li>
                <li>Starchy foods, such as rice, pasta, bread and potatoes. Choose       wholegrain varieties whenever you can</li>
                <li>Meat, fish, eggs and beans</li>
                <li>Milk and dairy foods</li>
                <li>Foods containing fats and sugar.</li>
              </ol>
              <p><em>Drinks can also be  very high in kilojoules, particularly those high in sugar.</em><br>
                  <strong><em>1. Fruit and vegetables</em></strong><br>
                Fruit  and vegetables are a vital source of vitamins and minerals. It’s advised that  we eat five portions of a variety of fruit and vegetables a day, and where  possible try to eat those that are in season and available locally.<br>
                There  is evidence that people who eat at least five portions a day are at lower risk  of heart disease, stroke and some cancers.<br>
                What’s  more, eating five portions is not as hard as it might sound. Just one apple,  banana, pear or similar-sized fruit is one portion. A slice of pineapple or  melon is one portion. Three heaped tablespoons of vegetables is another  portion.<br>
                Having  a sliced banana with your morning cereal is a quick and tasty way to start your  day with one portion. Swap your mid-morning biscuit for a tangerine, and add a  side salad to your lunch, add a portion of vegetables to dinner, and snack on  dried fruit in the evening to reach your five a day.<br>
  <strong><em>2. Starchy foods</em></strong><br>
                Starchy  foods such as bread, cereals, potatoes, pasta, rice and cornbread are an important  part of a healthy diet. They are a good source of energy and the main source of  a range of nutrients in our diet. Starchy foods are fuel for your body.<br>
                Starchy  foods should make up around one-third of everything we eat. This means we  should base our meals on these foods.<br>
                Try  and choose wholegrain or wholemeal varieties, such as brown rice, wholewheat  pasta and brown wholemeal bread. They contain more&nbsp;<a href="http://www.healthdirect.gov.au/article/fibre">fibre</a>&nbsp;(often  referred to as ‘roughage’), and usually more vitamins and minerals than white  varieties.<br>
  <a href="http://www.healthdirect.gov.au/article/fibre">Fibre</a>&nbsp;is  also found in beans, lentils and peas, and is essential in helping your body  digest food and keep you regular.<br>
  <strong><em>3. Meat, fish, eggs and beans</em></strong><br>
                These  foods are all good sources of protein, which is essential for growth and repair  of the body. They are also good sources of a range of vitamins and minerals.<br>
                Meat  is a good source of protein, vitamins and minerals such as iron, zinc and B  vitamins. It is also one of the main sources of vitamin B12. Try to eat lean  cuts of meat and skinless poultry whenever possible to cut down on fat. Always  cook meat thoroughly to avoid food poisoning, particularly with chicken.<br>
                Fish  is another important source of protein, and contains many vitamins and  minerals. Oily fish such as salmon and tuna is particularly rich in omega-3  fatty acids.<br>
                Aim  for at least two portions of fish a week, including one portion of oily fish.  You can choose from fresh, frozen or canned, but canned and smoked fish can be  high in salt.<br>
                Eggs  and pulses (including beans, nuts and seeds) are also great sources of protein.  Nuts are high in fibre and a good alternative to snacks high in saturated fat,  but they do still contain high levels of fat, so eat them in moderation.<br>
  <strong><em>4. Milk and dairy foods</em></strong><br>
                Milk  and dairy foods such as cheese and yoghurt are good sources of protein. They  also contain calcium, which helps to keep your bones healthy.<br>
                To  enjoy the health benefits of dairy without eating too much fat, use semi-skim  milk, skim milk or 1% fat milks, lower fat hard cheeses or cottage cheese, and  lower fat yoghurt.<br>
  <strong><em>5. Fats and sugar</em></strong><br>
                Fats  and sugar are both sources of energy for the body, but when we eat too much of  them we consume more energy than we burn, and this can mean that we put on  weight. This can lead to&nbsp;<a href="http://www.healthdirect.gov.au/topic/obesity">obesity</a>,  which increases our risk of type 2 diabetes, certain cancers, heart disease and  stroke.<br>
                Saturated  fat is found in foods such as cheese, sausages, butter, cakes, biscuits and  pies. It can raise your blood cholesterol level and increase your risk of heart  disease.<br>
                Unsaturated  fats, on the other hand, can help to lower cholesterol and provide us with the  essential fatty acids needed to help us stay healthy. Oily fish, nuts and  seeds, avocados, olive oils and vegetable oils are sources of unsaturated fat.<br>
                Try  to cut down on foods that are high in saturated fat and have smaller amounts of  foods that are rich in unsaturated fat instead. For a healthy choice, use just  a small amount of vegetable oil or reduced fat spread instead of butter, lard  or ghee. When having meat, choose lean cuts and cut off any visible fat.<br>
                Sugar  occurs naturally in foods such as fruit and milk, but we don’t need to cut down  on these types of sugar. Sugar is also added to lots of foods and drinks such  as sugary soft drinks, cakes, biscuits, chocolate, pastries, ice-cream and jam.  It’s also contained in some ready-made savoury foods such as pasta sauces and  baked beans.<br>
                Most  of us need to cut down on foods with added sugar. Instead of a soft drink, for  example, try sparkling water. Have a banana as a snack instead of a pie.<br>
                An  increase in your waistline can increase your risk of some cancers, type 2  diabetes and heart disease.<br>
  <strong>Sources</strong><strong>:</strong>&nbsp;<a href="http://www.nhmrc.gov.au/guidelines/publications/n55" target="_blank">Australian dietary guidelines</a>&nbsp;<em>(Australian Dietary Guidelines 2013),</em><em>&nbsp;</em><a href="http://www.eatforhealth.gov.au/" target="_blank">eatforhealth.gov.au</a>&nbsp;(<em>homepage</em>),&nbsp;<a href="http://www.nhs.uk/" target="_blank">NHS  Choices, UK</a>&nbsp;(<em>A  balanced diet</em>),&nbsp;<a href="http://swapit.gov.au/reasons-to-swap" target="_blank">swapit.gov.au, Cth</a>&nbsp;(<em>Reasons  to swap</em>)</p>
              <div> </div>
              <p>Healthy eating is not about strict dietary limitations,  staying unrealistically thin, or depriving yourself of the foods you love.  Rather, it’s about feeling great, having more energy, and stabilizing your  mood. If you feel overwhelmed by all the conflicting nutrition and diet advice  out there, you’re not alone. It seems that for every expert who tells you a  certain food is good for you, you’ll find another saying exactly the opposite.  But by using these simple tips, you can cut through the confusion and learn how  to create a tasty, varied, and healthy diet.</p>
              <div>
                <h2><a name="tip1"></a>Healthy eating tip 1: Set yourself up for success</h2>
              </div>
              <p>To set yourself up for success, think about planning a  healthy diet as a number of small, manageable steps rather than one big drastic  change. If you approach the changes gradually and with commitment, you will  have a healthy diet sooner than you think.</p>
              <ul type="disc">
                <li><strong>Simplify.</strong>&nbsp;Instead of being overly       concerned with counting calories or measuring portion sizes, think of your       diet in terms of color, variety, and freshness. This way it should be       easier to make healthy choices. Focus on finding foods you love and easy       recipes that incorporate a few fresh ingredients. Gradually, your diet       will become healthier and more delicious.</li>
                <li><strong>Start slow</strong>&nbsp;<strong>and make changes to your eating habits       over time.</strong><strong>&nbsp;</strong>Trying       to make your diet healthy overnight isn’t realistic or smart. Changing       everything at once usually leads to cheating or giving up on your new       eating plan. Make small steps, like adding a salad (full of different       color vegetables) to your diet once a day or switching from butter to       olive oil when cooking. As your small changes become habit, you can       continue to add more healthy choices to your diet.</li>
                <li><strong>Every change you make to improve your diet matters.</strong>&nbsp;You don’t have to be perfect and you don’t have to completely       eliminate foods you enjoy to have a healthy diet. The long term goal is to       feel good, have more energy, and reduce the risk of cancer and disease.       Don’t let your missteps derail you—every healthy food choice you make       counts.</li>
              </ul>
              <div>
                <h3>Think  of water and exercise as food groups in your diet.</h3>
              </div>
              <p><strong>Water.</strong>&nbsp;Water helps flush our systems  of waste products and toxins, yet many people go through life  dehydrated—causing tiredness, low energy, and headaches. It’s common to mistake  thirst for hunger, so staying well hydrated will also help you make healthier  food choices.<br>
                  <strong>Exercise.</strong><strong>&nbsp;</strong>Find something active that you like to do and add it to your  day, just like you would add healthy greens, blueberries, or salmon. The  benefits of lifelong&nbsp;<a href="http://www.helpguide.org/articles/exercise-fitness/easy-ways-to-start-exercising.htm" target="_blank">exercise</a>&nbsp;are abundant and regular  exercise may even motivate you to make healthy food choices a habit.</p>
              <div>
                <h2><a name="tip2"></a>Healthy eating tip 2: Moderation is key</h2>
              </div>
              <p><img border="0" width="300" height="234" src="diet_clip_image001.jpg" alt="Description: Harvard Healthy Eating Plate"> <br>
                People often think of healthy eating as an all or nothing proposition,  but a key foundation for any healthy diet is moderation. But what is  moderation? In essence, it means eating only as much food as your body needs.  You should feel satisfied at the end of a meal, but not stuffed. Moderation is  also about balance. Despite what certain fad diets would have you believe, we  all need a balance of carbohydrates, protein, fat, fiber, vitamins, and  minerals to sustain a healthy body.<br>
                The goal of healthy eating is to develop a diet that you  can maintain for life, not just a few weeks or months, or until you've hit your  ideal weight. For most of us, that means eating less than we do now. More  specifically, it means eating far less of the unhealthy stuff (refined sugar,  saturated fat, for example) and replacing it with the healthy (such as fresh  fruit and vegetables). But it doesn't mean eliminating the foods you love.  Eating bacon for breakfast once a week, for example, could be considered  moderation if you follow it with a healthy lunch and dinner—but not if you  follow it with a box of donuts and a sausage pizza. If you eat 100 calories of  chocolate one afternoon, balance it out by deducting 100 calories from your  evening meal. If you're still hungry, fill up with an extra serving of fresh  vegetables.</p>
              <ul type="disc">
                <li><strong>Try not to think of certain foods as “off-limits.”</strong>&nbsp;When you ban certain foods or food groups, it is natural to       want those foods more, and then feel like a failure if you give in to       temptation. If you are drawn towards sweet, salty, or unhealthy foods,       start by reducing portion sizes and not eating them as often. If the rest       of your diet is healthy, eating a burger and fries once a week probably       won’t have too much of a detrimental effect on your health. Eating junk       food just once a month will have even less of an impact. As you reduce       your intake of unhealthy foods, you may find yourself craving them less or       thinking of them as only occasional indulgences.</li>
                <li><strong>Think smaller portions.</strong><strong>&nbsp;</strong>Serving sizes have       ballooned recently, particularly in restaurants. When dining out, choose a       starter instead of an entree, split a dish with a friend, and don't order       supersized anything. At home, use smaller plates, think about serving       sizes in realistic terms, and start small. If you don't feel satisfied at       the end of a meal, try adding more leafy green vegetables or rounding off       the meal with fresh fruit. Visual cues can help with portion sizes–your       serving of meat, fish, or chicken should be the size of a deck of cards       and half a cup of mashed potato, rice, or pasta is about the size of a       traditional light bulb.</li>
              </ul>
              <div>
                <h2><a name="tip3"></a>Healthy eating tip 3: It's not just what you eat, it's how  you eat</h2>
              </div>
              <p>Healthy eating is about more than the food on your plate—it  is also about how you&nbsp;<em>think</em>about food.  Healthy eating habits can be learned and it is important to slow down and think  about food as nourishment rather than just something to gulp down in between  meetings or on the way to pick up the kids.</p>
              <ul type="disc">
                <li><strong>Eat with others whenever possible.</strong>&nbsp;Eating with other people has numerous social and emotional       benefits—particularly for children—and allows you to model healthy eating       habits. Eating in front of the TV or computer often leads to mindless       overeating.</li>
                <li><strong>Take time to chew your food and enjoy mealtimes.</strong>&nbsp;Chew your food slowly, savoring every bite. We tend to rush       though our meals, forgetting to actually taste the flavors and feel the       textures of our food. Reconnect with the joy of eating.</li>
                <li><strong>Listen to your body.</strong>&nbsp;Ask yourself if you are really hungry, or have a glass of water       to see if you are thirsty instead of hungry. During a meal, stop eating before       you feel full. It actually takes a few minutes for your brain to tell your       body that it has had enough food, so eat slowly.</li>
                <li><strong>Eat breakfast, and eat smaller meals throughout the day.</strong>&nbsp;A healthy breakfast can jumpstart your metabolism, and eating       small, healthy meals throughout the day (rather than the standard three       large meals) keeps your energy up and your metabolism going.</li>
                <li><strong>Avoid eating at night.</strong>&nbsp;Try to eat dinner earlier in the day and then fast for 14-16       hours until breakfast the next morning. Early studies suggest that this       simple dietary adjustment—eating only when you’re most active and giving       your digestive system a long break each day—may help to regulate weight.       After-dinner snacks tend to be high in fat and calories so are best       avoided, anyway.</li>
              </ul>
              <div>
                <h2><a name="tip4"></a>Healthy eating tip 4: Fill up on colorful fruits and  vegetables</h2>
              </div>
              <p>Fruits and vegetables are the foundation of a healthy diet.  They are low in calories and nutrient dense, which means they are packed with  vitamins, minerals, antioxidants, and fiber. Unfortunately, most people are  falling short of the recommended daily minimum of five servings of fruit and  vegetables. In fact, most of us need to&nbsp;<strong>double</strong>&nbsp;the amount we currently eat.<br>
                Try to eat a rainbow of fruits and vegetables every day and  with every meal—the brighter the better. Colorful, deeply colored fruits and  vegetables contain higher concentrations of vitamins, minerals, and  antioxidants—and different colors provide different benefits, so eat a variety.  Aim for a minimum of five portions each day. Try adding berries to breakfast  cereals, eating fruit as a healthy dessert, and snacking on vegetables such as  carrots, snow peas, or cherry tomatoes instead of processed snack foods.</p>
              <ul type="disc">
                <li><strong>Greens.</strong><strong>&nbsp;</strong>Branch       out beyond bright and dark green lettuce. Kale, mustard greens, broccoli,       and Chinese cabbage are just a few of the options—all packed with calcium,       magnesium, iron, potassium, zinc, and vitamins A, C, E, and K.</li>
                <li><strong>Sweet vegetables.</strong>&nbsp;Naturally sweet vegetables—such as corn, carrots, beets, sweet       potatoes, yams, onions, and squash—add healthy sweetness to your meals and       reduce your cravings for other sweets.</li>
                <li><strong>Fruit.</strong>&nbsp;Fruit is a tasty,       satisfying way to fill up on fiber, vitamins, and antioxidants. Berries       are cancer-fighting, apples provide fiber, oranges and mangos offer       vitamin C, and so on.</li>
              </ul>
              <h3>The importance of getting vitamins from food—not pills</h3>
              <p>The antioxidants and other nutrients in fruits and  vegetables help protect against certain types of cancer and other diseases. And  while advertisements abound for supplements promising to deliver the  nutritional benefits of fruits and vegetables in pill or powder form, research  suggests that it’s just not the same.<br>
                A daily regimen of nutritional supplements is not going to  have the same impact of eating right. That’s because the benefits of fruits and  vegetables don’t come from a single vitamin or an isolated antioxidant.<br>
                The health benefits of fruits and vegetables come from  numerous vitamins, minerals, and phytochemicals working together  synergistically. They can’t be broken down into the sum of their parts or  replicated in pill form.</p>
              <div>
                <h2><a name="tip5"></a>Healthy eating tip 5: Eat more healthy carbs and whole  grains</h2>
              </div>
              <p>Choose healthy carbohydrates and fiber sources, especially  whole grains, for long lasting energy. In addition to being delicious and satisfying,  whole grains are rich in phytochemicals and antioxidants, which help to protect  against coronary heart disease, certain cancers, and diabetes. Studies have  shown people who eat more whole grains tend to have a healthier heart.</p>
              <h3>A quick definition of healthy carbs and unhealthy carbs</h3>
              <p><strong>Healthy carbs</strong>&nbsp;(sometimes known as good carbs) include whole grains, beans, fruits,  and vegetables. Healthy carbs are digested slowly, helping you feel full longer  and keeping blood sugar and insulin levels stable.<br>
                  <strong>Unhealthy carbs</strong><strong>&nbsp;</strong>(or bad carbs) are foods such as white flour, refined sugar, and  white rice that have been stripped of all bran, fiber, and nutrients. Unhealthy  carbs digest quickly and cause spikes in blood sugar levels and energy.</p>
              <h3>Tips for eating more healthy carbs</h3>
              <p><img border="0" width="193" height="136" src="diet_clip_image002.jpg" alt="Description: Whole Grain Stamp"> </p>
              <ul type="disc">
                <li><strong>Include a variety of whole grains in your healthy diet,</strong>including whole wheat, brown rice, millet, quinoa, and barley.       Experiment with different grains to find your favorites.</li>
                <li><strong>Make sure you're really getting whole grains.</strong>&nbsp;Be aware that the words stone-ground, multi-grain, 100% wheat,       or bran can be deceptive. Look for the words “whole grain” or “100% whole       wheat” at the beginning of the ingredient list. In the U.S., Canada, and       some other countries, check for the Whole Grain Stamps that distinguish       between partial whole grain and 100% whole grain.</li>
                <li><strong>Try mixing grains as a first step to switching to whole       grains.</strong><strong>&nbsp;</strong>If       whole grains like brown rice and whole wheat pasta don’t sound good at       first, start by mixing what you normally use with the whole grains. You       can gradually increase the whole grain to 100%.</li>
              </ul>
              <p><strong>Avoid:</strong>&nbsp;Refined foods such as breads, pastas, and breakfast cereals that are  not whole grain.</p>
          <p>&nbsp;</p>
              <p>&nbsp;</p>
              <h2>Healthy eating tip 6: Enjoy healthy fats &amp; avoid  unhealthy fats</h2>
              <p>Good sources of healthy fat are needed to nourish your  brain, heart, and cells, as well as your hair, skin, and nails. Foods rich in  certain omega-3 fats called EPA and DHA are particularly important and can  reduce cardiovascular disease, improve your mood, and help prevent dementia.</p>
              <h3>Add to your healthy diet:</h3>
              <ul type="disc">
                <li><strong>Monounsaturated fats,</strong><strong>&nbsp;</strong>from plant oils like       canola oil, peanut oil, and olive oil, as well as avocados, nuts (like       almonds, hazelnuts, and pecans), and seeds (such as pumpkin, sesame). </li>
                <li><strong>Polyunsaturated fats, including Omega-3</strong>&nbsp;and&nbsp;<strong>Omega-6</strong><strong>&nbsp;</strong>fatty       acids, found in fatty fish such as salmon, herring, mackerel, anchovies,       sardines, and some cold water fish oil supplements. Other sources of       polyunsaturated fats are unheated sunflower, corn, soybean, flaxseed oils,       and walnuts.</li>
              </ul>
              <h3>Reduce or eliminate from your diet:</h3>
              <ul type="disc">
                <li><strong>Saturated fats,</strong><strong>&nbsp;</strong>found primarily in       animal sources including red meat and whole milk dairy products. </li>
                <li><strong>Trans fats,</strong>&nbsp;found in vegetable       shortenings, some margarines, crackers, candies, cookies, snack foods,       fried foods, baked goods, and other processed foods made with partially       hydrogenated vegetable oils.</li>
              </ul>
              <div>
                <h3>What  is a healthy daily limit for saturated fat and trans fat?</h3>
              </div>
              <p>Experts recommend you limit the amount of  saturated fats you eat to less than 7 percent of total daily  calories.&nbsp;That means, for example, if you need about 2,000 calories a day,  no more than 140 of them should come from saturated fats.&nbsp;That’s<strong>about 16 grams of saturated fat a day.</strong><br>
                No more than 20 of those  calories&nbsp;should come from&nbsp;trans&nbsp;fat.&nbsp;That’s&nbsp;<strong>less than 2 grams  of&nbsp;trans&nbsp;fat a day.</strong>&nbsp;&nbsp;Given  the amount of naturally occurring&nbsp;trans&nbsp;fat you probably eat every  day, this leaves virtually&nbsp;<strong>no room at all for industrially manufactured&nbsp;trans&nbsp;fat.</strong><br>
  <strong>Source:</strong><strong>&nbsp;</strong>American Heart Association</p>
              <div>
                <h2><a name="tip7"></a>Healthy eating tip 7: Add calcium for bone health</h2>
              </div>
              <p><a href="http://www.helpguide.org/articles/healthy-eating/calcium-and-your-bones.htm">Calcium&nbsp;</a>is one of the  key nutrients that your body needs in order to stay strong and healthy. Your  body uses it to build healthy bones and teeth, keep them strong as you age,  send messages through the nervous system, and regulate the heart’s rhythm. If  you don’t get enough calcium in your diet, your body will take calcium from  your bones to ensure normal cell function, which can lead to osteoporosis.  &nbsp;<br>
                Recommended calcium levels are 1000 mg per day, 1200 mg if  you are over 50 years old. Try to get as much of your daily calcium needs from  food as possible and use only low-dose calcium supplements to make up any  shortfall. Eat plenty of calcium-rich foods, limit foods that deplete your  body’s calcium stores (caffeine, alcohol, sugary drinks), do weight-bearing  exercise, and get a daily dose of magnesium and vitamins D and K—nutrients that  help calcium do its job.</p>
              <h3>Good sources of calcium include:</h3>
              <ul type="disc">
                <li><strong>Dairy:</strong><strong>&nbsp;</strong>Dairy       products are rich in calcium in a form that is easily digested and       absorbed by the body. Sources include milk, yogurt, and cheese. </li>
                <li><strong>Vegetables and greens:</strong><strong>&nbsp;</strong>Many vegetables,       especially leafy green ones, are rich sources of calcium. Try turnip       greens, mustard greens, collard greens, kale, romaine lettuce, celery,       broccoli, fennel, cabbage, summer squash, green beans, Brussels sprouts,       asparagus, and crimini mushrooms.</li>
                <li><strong>Beans:</strong>&nbsp;For another rich source of       calcium, try black beans, pinto beans, kidney beans, white beans, black-eyed       peas, or baked beans.</li>
              </ul>
              <p>For more on the importance of calcium, see<a href="http://www.helpguide.org/articles/healthy-eating/calcium-and-your-bones.htm">&nbsp;Calcium and Bone Health</a>.</p>
              <div>
                <h2><a name="tip8"></a>Healthy eating tip 8: Put protein in perspective</h2>
              </div>
              <p>Protein gives us the energy to get up and go—and keep  going. Protein in food is broken down into the 20 amino acids that are the  body’s basic building blocks for growth and energy, and essential for  maintaining cells, tissues, and organs. While too much protein can be harmful to  people with kidney disease, the latest research suggests that most of us need  more high-quality protein than the current dietary recommendations. It also  suggests that we need more protein as we age to maintain physical function.</p>
              <div>
                <h3>How  much protein do you need?</h3>
              </div>
              <p>Protein needs are based on weight rather  than calorie intake.&nbsp; Adults should eat at least 0.8g of lean,  high-quality protein per kilogram (2.2lb) of body weight per day. A higher  intake may help to lower your risk for obesity, osteoporosis, type 2 diabetes,  and stroke.</p>
              <ul type="disc">
                <li>Older adults should aim for 1 to 1.5 grams of lean       protein for each kilogram of weight. This translates to 68 to 102g of       protein per day for a person weighing 150 lbs.</li>
                <li>Divide your protein intake equally among meals.</li>
                <li>Nursing women need about 20 grams more       high-quality protein a day than they did before pregnancy to support milk       production.</li>
              </ul>
              <p><strong>Source:</strong><strong>&nbsp;</strong>Environmental Nutrition<br>
                The key to ensuring you eat high-quality protein is to try  different types, rather than relying on red meat and whole milk dairy products  which are high in saturated fat.&nbsp;Replacing processed carbs with  high-quality protein can improve your good cholesterol and reduce your risk for  heart disease and stroke. You’ll also feel full longer, which can help you lose  weight.</p>
              <ul type="disc">
                <li>Replace red meat with fish, chicken, or plant-based protein       such as beans, nuts, and soy.</li>
                <li>Replace&nbsp; processed carbohydrates from pastries, cakes,       pizza, cookies and chips with fish, beans, nuts, seeds, peas, tofu,       chicken, low-fat dairy, and soy products.</li>
                <li>Snack on nuts and seeds instead of chips, replace baked dessert       with Greek yogurt, or swap out slices of pizza for a grilled chicken       breast and a side of beans.</li>
              </ul>
              <p>For more, see&nbsp;<a href="http://www.helpguide.org/articles/healthy-eating/protein-to-strengthen-your-body-and-mind.htm">Good Ways to Get Quality Protein</a>.</p>
              <div>
                <h2><a name="tip9"></a>Healthy eating tip 9: Limit sugar and salt</h2>
              </div>
              <p>If you succeed in planning your diet around fiber-rich  fruits, vegetables, whole grains, lean protein, and good fats, you may find  yourself naturally cutting back on foods that can get in the way of your  healthy diet—sugar and salt.</p>
              <h3>Sugar</h3>
              <p>Sugar causes energy ups and downs and can add to health and  weight problems. Unfortunately, reducing the amount of candy, cakes, and  desserts we eat is only part of the solution. Often you may not even be aware  of the amount of sugar you’re consuming each day. Large amounts of added sugar  can be hidden in foods such as bread, canned soups and vegetables, pasta sauce,  margarine, instant mashed potatoes, frozen dinners, fast food, soy sauce, and  ketchup. Here are some tips:</p>
              <ul type="disc">
                <li><strong>Avoid sugary drinks.</strong><strong>&nbsp;</strong>One 12-oz soda has       about 10 teaspoons of sugar in it, more than the daily recommended limit!       Try sparkling water with lemon or a splash of fruit juice.</li>
                <li><strong>Sweeten foods yourself.</strong>&nbsp;Buy unsweetened iced tea, plain yogurt, or unflavored oatmeal,       for example, and add sweetener (or fruit) yourself. You’re likely to add       far less sweetener than the manufacturer would have.</li>
                <li><strong>Eat naturally sweet food</strong><strong>&nbsp;</strong>such as fruit,       peppers, or natural peanut butter to satisfy your sweet tooth. Keep these       foods handy instead of candy or cookies.</li>
              </ul>
              <div>
                <h3>How  sugar is hidden on food labels</h3>
              </div>
              <p>Check food labels carefully. Sugar is  often disguised using terms such as:</p>
              <table border="0" cellpadding="0" width="100%">
                <tr>
                  <td width="40%" valign="bottom"><ul>
                    <li>cane    sugar or maple syrup</li>
                    <li>corn    sweetener or corn syrup&nbsp;</li>
                    <li>honey or    molasses</li>
                    <li>brown    rice syrup</li>
                  </ul></td>
                  <td width="60%" valign="bottom"><ul>
                    <li>crystallized    or evaporated cane juice</li>
                    <li>fruit    juice concentrates, such as apple or pear</li>
                    <li>maltodextrin    (or dextrin)</li>
                    <li>Dextrose,    Fructose, Glucose, Maltose, or Sucrose</li>
                  </ul></td>
                </tr>
              </table>
              <h3>Salt</h3>
              <p>Most of us consume too much salt in our diets. Eating too much  salt can cause high blood pressure and lead to other health problems. Try to  limit sodium intake to 1,500 to 2,300 mg per day, the equivalent of one  teaspoon of salt.</p>
              <ul type="disc">
                <li><strong>Avoid processed or pre-packaged foods.</strong>&nbsp;Processed foods like canned soups or frozen dinners contain       hidden sodium that quickly surpasses the recommended limit.</li>
                <li><strong>Be careful when eating out.</strong><strong>&nbsp;</strong>Most restaurant and       fast food meals are loaded with sodium. Some offer lower-sodium choices or       you can ask for your meal to be made without salt. Most gravy and sauces       are loaded with salt, so ask for it to be served on the side.</li>
                <li><strong>Opt for fresh or frozen vegetables</strong><strong>&nbsp;</strong>instead of canned       vegetables.</li>
                <li><strong>Cut back on salty snacks</strong>&nbsp;such as potato chips, nuts, and pretzels.</li>
                <li><strong>Check labels and choose low-salt or reduced-sodium products,</strong>&nbsp;including breakfast cereals.</li>
                <li><strong>Slowly reduce the salt in your diet</strong>&nbsp;to give your taste buds time to adjust.</li>
              </ul>
              <div>
                <h2><a name="fiber"></a>Healthy eating tip 10: Bulk up on fiber</h2>
              </div>
              <p>Eating foods high in dietary fiber can help you stay  regular, lower your risk for heart disease, stroke, and diabetes, and help you  lose weight. Depending on your age and gender, nutrition experts recommend you  eat at least 21 to 38 grams of fiber per day for optimal health. Many of us  aren't eating half that amount.</p>
              <ul type="disc">
                <li>In general, the more natural and unprocessed the food, the       higher it is in fiber.</li>
                <li>Good sources of fiber include whole grains, wheat cereals,       barley, oatmeal, beans, nuts, vegetables such as carrots, celery, and       tomatoes, and fruits such as apples, berries, citrus fruits, and       pears—more good reasons to add more fruit and vegetables to your diet.</li>
                <li>There is no fiber in meat, dairy, or sugar. Refined or “white”       foods, such as white bread, white rice, and pastries, have had all or most       of their fiber removed.</li>
                <li>An easy way to add more fiber to your diet is to start your day       with a whole grain cereal, such as Fiber-One or All-Bran, or by adding       unprocessed wheat bran to your favorite cereal.</li>
              </ul>
              <div>
                <h3>How  fiber can help you lose weight</h3>
              </div>
              <p>Since fiber stays in the stomach longer  than other foods, the feeling of fullness will stay with you much longer,  helping you eat less. Eating plenty of fiber can also move fat through your  digestive system at a faster rate so that less of it can be absorbed. And when  you fill up on high-fiber foods, you'll also have more energy for exercising.<br>
                To learn more, read&nbsp;<a href="http://www.helpguide.org/articles/healthy-eating/high-fiber-foods.htm">High-Fiber Foods</a>.</p>
              <div>
                <h2><a name="more"></a>More help for healthy eating</h2>
              </div>
              <h3>Nutrition and diet</h3>
              <ul type="disc">
                <li><a href="http://www.helpguide.org/articles/diet-weight-loss/mediterranean-diet.htm" target="_blank">The       Mediterranean Diet:</a>&nbsp;Myths,       Facts, and Health Benefits of a Mediterranean Diet </li>
                <li><a href="http://www.helpguide.org/articles/healthy-eating/protein-to-strengthen-your-body-and-mind.htm" target="_blank">Good Ways to       Get Quality Protein:</a>&nbsp;Making       Protein Choices To Boost Energy and Improve Your Health</li>
                <li><a href="http://www.helpguide.org/articles/healthy-eating/choosing-healthy-fats.htm" target="_blank">Choosing       Healthy Fats:</a>&nbsp;Good       Fats, Bad Fats, and the Power of Omega-3s</li>
                <li><a href="http://www.helpguide.org/articles/healthy-eating/high-fiber-foods.htm" target="_blank">High-Fiber       Foods:</a>&nbsp;Benefits,       Sources, and Getting More Fiber in Your Diet</li>
                <li><a href="http://www.helpguide.org/articles/healthy-eating/calcium-and-your-bones.htm">Calcium and Bone Health:</a>&nbsp;Eating to Protect Your Bones and       Prevent Osteoporosis</li>
              </ul>
              <h3>Cooking and grocery shopping</h3>
              <ul type="disc">
                <li><a href="http://www.helpguide.org/articles/healthy-eating/cooking-for-one.htm" target="_blank">Cooking for       One:</a>&nbsp;Cooking       Quick, Healthy, and Inexpensive Meals for One Person </li>
                <li><a href="http://www.helpguide.org/articles/healthy-eating/organic-foods.htm" target="_blank">Are Organic       Foods Right for You?</a>&nbsp;Understanding       Organic Food Labels, Benefits, and Claims</li>
                <li><a href="http://www.helpguide.org/articles/healthy-eating/eating-well-on-the-cheap.htm" target="_blank">Eating Well on       the Cheap:</a>&nbsp;Saving       Money on Healthy Food</li>
              </ul>
              <div>
                <h2><a name="resources"></a>Resources and references</h2>
              </div>
              <h3><strong>Healthy  eating: carbs and protein</strong> </h3>
              <p><a href="http://www.cdc.gov/nccdphp/dnpa/nutrition/nutrition_for_everyone/basics/protein.htm" target="_blank">What is protein?</a>&nbsp;Information about what foods have  protein and what happens when we eat more protein than we need. (Center for  Disease Control)<br>
                  <a href="http://www.hsph.harvard.edu/nutritionsource/protein-full-story/" target="_blank">Protein: Moving  Closer to Center Stage</a>&nbsp;–  Article examines protein and health, and how not all protein is the same.  (Harvard School of Public Health)<br>
                  <a href="http://www.jamda.com/article/S1525-8610(13)00326-5/fulltext" target="_blank">Optimal Dietary  Protein Intake in Older People</a>&nbsp;–  New evidence that shows older adults need more dietary protein than do younger  adults. (JAMDA)<br>
                  <a href="http://www.environmentalnutrition.com/issues/37_6/pdfissue/152629-1.html" target="_blank">Environmental  Nutrition Newsletter</a>&nbsp;(subscription  required) – June 2014 issue includes information on latest guidelines for  suggested daily protein intake. (Environmental Nutrition)</p>
              <h3>Healthy eating: fat</h3>
              <p><a href="http://www.cspinet.org/nah/07_02/fats.pdf" target="_blank">Face the Fats</a>&nbsp;– (PDF) Describes the complicated  relationship between good fats, bad fats, and various diseases. (Nutrition  Action Healthletter)<br>
                  <a href="http://www.hsph.harvard.edu/nutritionsource/what-should-you-eat/omega-3-fats/index.html" target="_blank">Omega-3 Fats: An  Essential Contribution<strong>&nbsp;</strong><strong>-</strong><strong>&nbsp;</strong>What Should You Eat...</a>&nbsp;– All about health benefits of the  important omega-3 fatty acids, including the best food sources in which to find  them. (Harvard School of Public Health)<br>
                  <a href="http://www.hsph.harvard.edu/nutritionsource/2014/05/15/saturated-or-not-does-type-of-fat-matter/" target="_blank">Saturated or not:  Does type of fat matter?</a>&nbsp;Article  that outlines the health values of different fats. (Harvard School of Public  Health)</p>
              <h3>Essential food groups in a healthy diet</h3>
              <p><a href="http://www.hsph.harvard.edu/nutritionsource/what-should-you-eat/pyramid/index.html" target="_blank">Healthy Eating  Plate And Healthy Eating Pyramid</a>&nbsp;–  The U.S. government has scrapped its MyPyramid icon in favor of the  fruit-and-vegetable rich&nbsp;<a href="http://www.choosemyplate.gov/" target="_blank">MyPlate</a>—an improvement, yet one that still  doesn't go far enough to show people how to make the healthiest choices. This  is Harvard’s remedy. (Harvard School of Public Health)<br>
                  <a href="http://www.whfoods.com/foodstoc.php" target="_blank">The World’s  Healthiest Foods</a>&nbsp;–  Using the theory of nutrient density—a measure of the amount of nutrients a  food contains in comparison to the number of calories—this site lists the 129  most healthy foods. (The George Mateljan Foundation)<br>
                  <a href="http://www.mayoclinic.com/health/vegetarian-diet/HQ01596" target="_blank">Vegetarian Diet&nbsp;</a>– How to get  the best nutrition for non-meat eaters. (Mayo Clinic)<br>
                  <a href="http://www.med.umich.edu/umim/food-pyramid/fats.htm" target="_blank">Healing Foods Pyramid</a>&nbsp;– Emphasizes foods known to have  healing benefits or essential nutrients, including plant-based choices.  (University of Michigan)</p>
              <h3>Eating smart: a key step to healthy eating</h3>
              <p><a href="http://www.brighamandwomens.org/Patients_Visitors/pcs/nutrition/services/healtheweightforwomen/special_topics/intelihealth0405.aspx?subID=submenu10" target="_blank">Mastering the  mindful meal</a>&nbsp;–  Describes the importance of mindful eating, along with tips on how to eat more  mindfully. (Brigham &amp; Women’s Hospital)</p>
              <h3>The role of sugar and salt in a healthy diet</h3>
              <p><a href="http://umaine.edu/publications/4059e" target="_blank">Sodium Content of  Your Food</a>&nbsp;– How sodium  affects your body and how to cut down on dietary sodium. Included tips on  reading nutrition labels, and suggestions for cooking and shopping. (University  of Maine – PDF)<br>
                  <a href="http://www.sugarstacks.com/" target="_blank">Sugar Stacks</a>&nbsp;– Photos showing the amount of sugar  in different foods. (Sugar Stacks)<br>
                  <a href="http://www.hsph.harvard.edu/news/hphr/fall-2009/sugar-and-salt.html" target="_blank">Public Health Takes  Aim at Sugar and Salt</a>&nbsp;–  Article detailing evidence that too much of these ingredients can harm health.  (Harvard School of Public Health)</p>
              <h3>Other tips and strategies for a healthy eating plan</h3>
              <p><a href="http://www.mediterrasian.com/meda_living.htm" target="_blank">Living the  MediterrAsian Way</a>&nbsp;–  People in Mediterranean and Asian cultures have long been known for their  healthy diets and longevity. Here's how you can incorporate their dietary  principles and lifestyle practices into your own life. (Mediterrasian.com)<br>
                  <a href="http://www.choosemyplate.gov/healthy-eating-tips/ten-tips.html" target="_blank">Ten Tips Nutrition  Education Series</a>&nbsp;– A  collection of tip sheets on healthy eating subjects like cutting back on sugar  and salt, following a vegetarian diet and adding vegetables to your diet. (My  Pyramid Nutrition Education Series)<br>
                  <a href="http://nutritiondata.self.com/facts/beef-products/8004/2" target="_blank">Nutrition Data</a>&nbsp;(commercial site) – Provides  searchable database of nutrition labels for many different foods, including  restaurant items. (Self.com)</p>
              <h3>Meal planning and stocking the kitchen</h3>
              <p><a href="http://www.hsph.harvard.edu/nutritionsource/recipes/index.html" target="_blank">Stocking a Healthy  Kitchen</a>&nbsp;– The basics  on stocking a healthy kitchen and cooking easy, delicious and nutritious meals.  (Harvard School of Public Health Nutrition Source)<br>
                  <a href="http://www.localharvest.org/" target="_blank">Local Harvest</a>&nbsp;– Information about finding local  growers, farmer’s markets and Community Supported Agriculture (CSA) groups in  your area.<br>
                  <a href="http://www.fruitsandveggiesmorematters.org/?page_id=2666" target="_blank">The Well-Stocked Pantry</a>&nbsp;– List of basics for a well-stocked  kitchen and&nbsp;<a href="http://www.fruitsandveggiesmorematters.org/?page_id=2677" target="_blank">sample meal plans</a>focused on  adding more vegetables and fruits to your diet. (Fruits and Veggies More  Matters)<br>
                Source : <a href="http://www.helpguide.org/articles/healthy-eating/healthy-eating.htm">http://www.helpguide.org/articles/healthy-eating/healthy-eating.htm</a> </p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p><strong>Fruit and vegetables:</strong>&nbsp;Despite  this being one of the most important food groups, and having many health  benefits, studies have shown that the majority of the population aren't eating  enough of them. This is surprising considering the goodness it provides and  huge variety available in shops nowadays. So, let's take a more detailed look  at what this group is. </p>
              <ul>
                <li><strong>Why it's important:</strong>Fruits and vegetables provide  your body with lots of vitamins and minerals which are hard to come by in other  areas of your diet. They also have a high water and low fat content so are a  good choice for snacks. Research has shown that a diet which lacks in this  group of food can lead to diseases such as heart disease and even some cancers!  A lack of it can also lead to high blood pressure and various vitamin  deficiencies which result in a lowered immune system, and sometimes long-term  illness. So as you can see, it's pretty important.</li>
                <li><strong>How much do you need:</strong>As you probably know, the general  guideline is to eat&nbsp;<strong>at least five portions</strong>&nbsp;per day. These  portions must be of five&nbsp;<strong>different</strong>&nbsp;fruits and vegetables to  make sure that you get a variety of vitamins and minerals. To get the best  variety, choose ones which are different colours, as generally, different  colours give you different things. But how much is in a portion? A quick way to  decide is to count one generous handful as a portion, but it does vary between  different foods.</li>
                <li><strong>What foods is it in:</strong>Well obviously it's just fruits  and vegetables, but there are many different ways to consume them. For example,  vegetable soups, tinned fruits, smoothies, fruit juice, salad, dried fruit, and  obviously, fresh food. In order to get the most goodness out of them, they are  best eaten raw, or vegetables should be cooked by steaming them rather than  boiling.</li>
                <li><strong>How to bring it into your diet:</strong>The easiest  way to raise the amount of fruit and veg that you eat is to snack on them  rather than chocolate and crisps. But as well as that, here are some simple  ways to include fruits and vegetables in your diet;</li>
                <ul>
                  <li>Glass of fresh fruit juice with your breakfast.</li>
                  <li>Berries or other fruit sprinkled over your  breakfast cereal.</li>
                  <li>Portion of dried fruit as a mid-morning snack</li>
                  <li>A salad with your lunch</li>
                  <li>A portion of steamed vegetables with your evening  meal</li>
                  <li>Sweet fruit such as strawberries as a desert.</li>
                </ul>
              </ul>
              <p><strong>Protein:</strong>&nbsp;This refers to protein rich foods which  mainly includes animal produce. For this reason vegetarians and vegans often  don't consume enough protein, although this can be avoided since there are  vegetarian foods containing lots of protein. However, most people do not  struggle to consume enough of this food group.It is an important part of your  diet as it's vital for many functions inside the body. </p>
              <ul>
                <li><strong>Why it's important:</strong>It's main function is for growth  and repair, so it's needed for hair and nail growth, repair of nerve cells,  muscle growth and repair, and healing injuries. A diet which lacks protein can  cause muscle deterioration, arthritis, heart problems and organ failure, so it  really is important to consume enough. If you want to know whether you are  deficient in protein, you should visit a doctor, but some of the symptoms  include hair loss, muscle soreness and cramps, slow healing of wounds and loss  of sleep.</li>
                <li><strong>How much do you need:</strong>The recommended daily amount for  an adult women is 45g, and the recommended daily amount for an adult man is  about 55.5g per day. However, opinions vary on this as research is still being  done to determine how much is required. This number also changes depending upon  your lifestyle and natural build and weight. If you regularly exercise or are  trying to build more muscle, then more protein will be required in your diet.  If you rarely do exercise and you have a small build, then you won't need as  much. To make it easier to decide whether or not you are consuming enough  protein, it's suggested that you eat 2-3 portions a day. Some examples of what  is considered a portion are: 100g meat, poultry or fish, 2 eggs, 3tbsp nuts,  seeds or beans.</li>
                <li><strong>What foods is it in:</strong>Some of the main  protein-containing foods are; meat, poultry, eggs, seafood, nuts, seeds, pulses  and soya products. For people who don't eat meat, meat supplements are  available which usually contain plenty of protein. Protein from animal products  is best as they contain the full range of important amino acids, but be aware  that red meat contains high levels of saturated fat which can lead to heart  problems, as well as this, a diet that is too high is red meat or too high in  processed meat increases the chance of developing certain cancers. Oily fish is  a good source of protein, and also provides good fatty acids such as Omega 3  which reduce the likelihood of developing a cardiovascular disease.</li>
                <li><strong>How to bring it into your diet:</strong>&nbsp;Here  are some ways of increasing your protein intake;</li>
                <ul>
                  <li>Spread peanut or almond butter over your toast at  breakfast</li>
                  <li>Try sprinkling seeds or nuts over a salad for lunch</li>
                  <li>As a snack, dip foods such as sliced carrot and  celery into a hummus dip.</li>
                  <li>Have a tuna sandwich with seeded bread at lunch</li>
                  <li>Try soy-based yogurts in place of what you usually  buy</li>
                  <li>Always include a portion of meat/poultry/fish in  your main meal.</li>
                </ul>
              </ul>
              <p>&nbsp;</p>
              <p><strong>Dairy:</strong>&nbsp;dairy is known as being a good source of  calcium, and dairy products are fairly easy to include in your diet. However  for people with a lactose intolerance or an allergy to milk, getting enough  dairy in there diet can be more difficult, although there are many substitutes  for the real thing. So lets read on to find out why it's so important to get  enough dairy... </p>
              <ul>
                <li><strong>Why it's important:</strong>Dairy is a very good source of  calcium. Calcium is important as it helps to promote strong bones and teeth. As  well as this, it also regulates muscle contraction, which includes the  heartbeat, so it's pretty important. Inadequate calcium intake up to the age of  25 can cause bone problems such as brittle bone disease and osteoporosis. This  is most common in women as they generally have a lower bone mass than men. In  order to absorb calcium effectively, research suggests that Vitamin D is  helpful. This is easy to get as your body generates it as long as you get a  good amount of sunlight.</li>
                <li><strong>How much do you need:</strong>It's recommended for adults to  aim for three portions of dairy per day. If you are worried about your  fat-intake then opt for low-fat versions. Here are some ideas of what counts as  a portion; 200ml milk, 250ml soya-milk with calcium, 30g cheese, 1 pot of  yoghurt. Children and teenagers also need plenty of dairy in their diet since  their bones are still developing.</li>
                <li><strong>What foods is it in:</strong>&nbsp;here are some foods which  are either dairy foods or foods which are useful to those who can't eat dairy.  Dairy foods, although this may be pointing out the obvious, include, milk,  cheese, yoghurt, fromage frais, but don't include butter or cream in the dairy  category. For those who are vegan or lactose intolerant, you can find your  calcium elsewhere, such as in calcium-fortified soya milk and yogurts, dark  green leafy veg such as broccoli and spinach, almonds and some types of fish.</li>
                <li><strong>How to bring it into your diet:</strong>If you want  to increase the amount of calcium that you consume, then here are some ways of  adding it to your diet;</li>
                <ul>
                  <li>Obvious, but pouring milk over your cereal</li>
                  <li>Some dried fruit contains small amounts of calcium  so try sprinkling some over your cereal or eat a handful as a snack.</li>
                  <li>Eat a spinach-based salad with toasted almonds or  sesame seeds sprinkled over it.</li>
                  <li>Have a cheese sandwich for a lunch on the go.</li>
                  <li>Have a mug of warm milk, or hot chocolate made with  milk before bed.</li>
                </ul>
              </ul>
              <p><strong>Carbohydrates:</strong>&nbsp;This food group should be  your bodies main source of energy rather than sugars and fats. They should  generally be a part of every meal, and most people have no trouble in including  this in their day to day diet. Certain types of carbohydrates are especially  good for you and can prevent diseases so it's best to choose your carbohydrates  wisely to get the most out of them. </p>
              <ul>
                <li><strong>Why it's important:</strong>Most carbohydrates provide a long  lasting, slow release of energy which prevents an energy crash throughout the  day. They are generally low in fat yet are still filling, which means you are  less likely to snack on less healthy things in between meals. The best type of  carbohydrates is whole-grain products. Whole grain is widely available in many  types of carbohydrates, and their importance is becoming more widely known.  Whole grain provides many useful nutrients which are stripped away in refined  grains. They contain fibre which promotes a healthy digestive system, protein  (which you already know the importance of), vitamins and minerals, and  carbohydrate (mainly in the form of starch). They are also rich in  anti-oxidants which prevent cancer, heart disease and diabetes.</li>
                <li><strong>How much do you need:</strong>It's recommended that about a  third of each meal you eat should be carbohydrates of some sort. You should  also be aware of which carbs you are choosing in order to get the most out of  your portions. Eating too much will lead to weight gain, but gram for gram  carbohydrates contain less calories than fat and protein.</li>
                <li><strong>What foods is it in:</strong>Complex (the good ones)  carbohydrates are found in foods such as; oats, potatoes, root vegetables,  wholemeal bread, wholemeal cereal, wholemeal pasta, nuts, brown rice, beans and  lentils. Complex carbohydrates are also found in a less healthy form in white  bread, white flour and white rice. Simple (the bad kind) carbohydrates (also  known as sugars) which you should avoid are in pizzas, white sugar, snack bars,  chocolate, cakes, pastries and ready-meals and sauces.</li>
                <li><strong>How to bring it into your diet:</strong>each meal  should be based on a complex carbohydrate, along with vegetables and protein.  Here are some ideas on how to bring whole-grain into your daily diet;</li>
                <ul>
                  <li>Look for whole-grain cereals such as porridge oats,  or wholegrain bread to toast for your breakfast.</li>
                  <li>At lunch opt for more protein than carbs as a large  carbohydrate meal can leave you feeling sleepy.</li>
                  <li>There are many ways of cooking potatoes to go with  your evening meal, such as making wedges, mashing potato, boiling, roasting and  even shallow frying.</li>
                  <li>Switch from what you normally buy to whole grain  pasta and rice instead of white.</li>
                </ul>
              </ul>
              <p>&nbsp;</p>
              <p><strong>Fatty and sugary foods:</strong>&nbsp;While many people assume  that fat and sugar should be cut out if you want to be healthy, this is wrong.  It's important to include a little bit in your diet, it's just all about  finding the correct balance. Besides, if you never treat yourself then one day  you're going to binge on lots of unhealthy food, and that's really not good for  you. </p>
              <ul>
                <li><strong>Why it's important:</strong>&nbsp;Fat is good for you in  small amounts as it transports fat-soluble vitamins (A,D,E &amp; K) around the  body, and it also supplies essential fatty acids. These essential fatty acids  have to be supplies through diet, and research suggests that they improve your  immune system as well as heart health. Fat is stored under the skin as a fuel  reserve, so it's good to have a bit there, especially as it also cushions your  organs. You do need to be aware though, that too much fat will cause  obesity-related diseases, so just consume it in&nbsp;<strong>moderation</strong>. And the  best thing about fat? It makes the food taste better! As for sugary foods,  unless it's sugar found naturally in fruit, they provide no nutrient, only a  burst of energy, so you should really cut down on them.</li>
                <li><strong>How much do you need:</strong>One gram of fat contains 9  calories, this means that it's really easy to over eat and gain weight when  eating fatty foods, so you really should keep an eye on it. Government  guidelines suggest that fats should make up, at the most, 35% of the energy in  your diet, and that saturated fats should cover less than 11% of your total  energy intake, (this works out at 70-95g of fat per day at most). Most adults  in the UK don't consume too much fat, but consume too much saturated fat which  can lead to bad health. As for sugar, sugary food should only be eaten at  mealtimes to prevent tooth decay, and other than naturally occurring sugars,  you should attempt to reduce your intake as much as possible. Over-eating of  sugary foods can lead to diabetes and obesity.</li>
                <li><strong>What foods it's in:</strong>Bad types of sugar are found in  soft drinks, sweets, chocolate bars, desserts and sugary breakfast cereals,  while good types are found in fruits. Saturated fats are found in foods such  as, meat, butter, cheese, eggs, full fat milk and full fat yoghurt, so these  foods such be eaten in moderation. Unsaturated fats (which are better for you  and contain essential fatty acids) are found in oily fish (eg. salmon, tuna and  mackerel), avocados, nuts, seeds, virgin olive oil and sunflower oil.</li>
                <li><strong>How to bring it into your diet:</strong>&nbsp;rather  than listing ways to get a fatty diet, which I think we all know too well, I'm  going to tell you ways of reducing your fat/sugar intake, and ways of replacing  your bad fats/sugars with better versions.</li>
                <ul>
                  <li>Cook food with vegetable oil instead of butter or  lard.</li>
                  <li>Warm olive oil can be used on bread as a  replacement for butter or margarine.</li>
                  <li>Make a salad dressing out of virgin olive oil  rather than using salad cream or mayonnaise.</li>
                  <li>Find alternatives for your unhealthy snacks, you  could snack on seeds, nuts, raw vegetables or fruit rather than chocolate or  crisps.</li>
                  <li>Grill meat and fish rather than frying it to reduce  the fat content. When grilling meat you should make sure that there is drainage  for the fat so that it doesn't stay in the meat.</li>
                  <li>Look for lean meat in the supermarket and always  cut off fatty excess on meat before cooking.</li>
                  <li>Choose reduced-fat dairy produce.</li>
                </ul>
              </ul>
              <p>&nbsp;</p>
              <p>Source : <a href="http://www.wikihow.com/Maintain-a-Balanced-Diet">http://www.wikihow.com/Maintain-a-Balanced-Diet</a> </p>
              <p>&nbsp;</p>
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
