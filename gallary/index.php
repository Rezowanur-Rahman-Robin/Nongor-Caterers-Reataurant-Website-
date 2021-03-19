<?php 
    session_start();
    include("../admin-service/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bonjourbd.com/gallary/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 05:38:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallary</title>

<link rel="icon" href="../images/other-images/logo2.png" sizes="36x36" />

<!-- Library CSS -->
<link href="../wp-content/themes/Bonjour/css/lecker_library.css" rel="stylesheet">
<!-- Icons CSS -->
<link href="../wp-content/themes/Bonjour/css/font-awesome.min.css" rel="stylesheet">
<link href="../wp-content/themes/Bonjour/fonts/themify-icons.css" rel="stylesheet">
<link href="../wp-content/themes/Bonjour/fonts/selima/stylesheet.css" rel="stylesheet">
<!-- Theme CSS -->
<link href="../wp-content/themes/Bonjour/css/lecker_style.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lato" rel="stylesheet">
<link href="../wp-content/themes/Bonjour/style.css" rel="stylesheet">
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Feed" href="../feed/index.php" />
<link rel="alternate" type="application/rss+xml" title="My Blog &raquo; Comments Feed" href="../comments/feed/index.php" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">	

<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/bonjourbd.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.6"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}


.heading-item{
    font-family: 'Courgette', cursive;
    font-weight: 1000;
    color:white;
    
}
.heading-item-slider{
    font-family: 'Courgette', cursive;
    font-weight: 1000;
    color: #ffd400 !important;
    font-size:60px;
    margin-bottom: 25px;
    }
.heading-item2{
    font-family: 'Ultra', serif;
    color: #020202;
    text-shadow: 3px 1px grey;
    border: 1px solid black;
    padding:10px;
    font-weight: 1000;
}

@media screen and (max-width: 700px) {
    .heading-item-slider{
        font-size:30px;
        margin-bottom:10px
}

.heading-item{
    font-size:30px;
    margin-bottom:10px;
}
    
}
.lec_main_menu_content_menu ul> .food-menu:hover .sub-menu{
  display: block;
}

.service_card{
    transition: transform .5s; /* Animation */
}

.service_card:hover{
    transform:scale(1.15);
}

</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='../wp-includes/css/dist/block-library/style.min48f5.css?ver=5.3.6' type='text/css' media='all' />
<link rel='https://api.w.org/' href='../wp-json/index.php' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.3.6" />
<link rel="canonical" href="index.php" />
<link rel='shortlink' href='../index3965.php?p=21' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embedc671.json?url=https%3A%2F%2Fbonjourbd.com%2Fgallary%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed8cab?url=https%3A%2F%2Fbonjourbd.com%2Fgallary%2F&amp;format=xml" />
</head>
<body class="lec_france">
<!-- Page -->
<div class="lec_page" id="lec_page">
    <!-- To Top -->
    <a href="#lec_page" class="lec_top lec_go"><b class="ti ti-angle-up"></b></a>
    <!-- Header -->
    <header>    
        <div class="container">     
            <!-- Logo -->
            <a href="../index.php" class="lec_logo"><img  style="max-height: 100px;"  src="../images/other-images/logo.png" alt="">
             <i class="hidden-xs">
             <span style="color:white;">
            NONGOR CATERES CHATTOGRAM
            </span>
            <span  style="color:white;">
            BEST FOOD</span>
            </i></a>
            <!-- Menu -->
            <div class="lec_main_menu">
                <div class="lec_main_menu_icon">
                <i style="background-color:white"></i><i style="background-color:white"></i><i style="background-color:white"></i><i  style="background-color:white"></i>
                <b class="heading-item">Menu</b>
                    <b class="lec_main_menu_icon_b">Back</b>
                </div>
            </div>
            <!-- Menu Content -->
            <div class="lec_main_menu_content lec_image_bck" data-color="rgba(0,0,0,0.9)" data-image="../wp-content/themes/Bonjour/img/logo.png">
                <!-- Over -->
                <div class="lec_over" data-color="#000" data-opacity="0.8"></div>
            </div>
            <div class="lec_main_menu_content_menu lec_wht_txt text-right">
                <div class="container">
<div class="menu-primary-menu-container"><ul id="menu-primary-menu" class="nav-menu"><li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-23"><a href="../index.php">Home</a></li>
<li id="menu-item-89" class="menu-item food-menu menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-89"><a href="../category/food-menu/index.php">Food Menu</a>
<ul class="sub-menu">

<?php

$get_menus = "select * from food_menu";

$run_menus = mysqli_query($con,$get_menus);

$i=0;

while($row_menus = mysqli_fetch_array($run_menus)){

     $menu_id = $row_menus['food_menu_id'];

     $menu_title = $row_menus['food_menu_title'];

   
     $get_count_item = "select * from food_item where item_menu=$menu_id";
     
     $run_count_item = mysqli_query($con,$get_count_item);

     $count_item= mysqli_num_rows($run_count_item);

     $i++;
     
?>

<li id="menu-item-90" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-90"><a href="../category/food-menu/index2.php?menu=<?php echo $menu_id; ?>"><?php echo $menu_title; ?></a></li>
<?php   } ?>

</ul>
</li>
<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="../about/index.php">About</a></li>
<li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-21 current_page_item menu-item-26"><a href="index.php" aria-current="page">Gallary</a></li>
<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="../contact-us/index.php">Contact Us</a></li>
</ul></div>                    <div class="lec_main_menu_content_menu_copy">
                     <p>© Nongor Caterers 2021</p>
                        <!-- Social Buttons -->
                        <!-- Social Buttons -->
                    <div class="lec_footer_social">
                        <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
                            <a href="https://www.facebook.com"><i class="fa fa-facebook-square"></i></a>
                            <a href="https://instagram.com/"> <i class="fa fa-instagram"></i></a>
                
                            <a href="https://twitter.com/"><i class="fa fa-twitter-square"></i></a>
                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-square"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- container end -->
            </div>
            <!-- menu content end -->
        
        </div>
    </header>
    <!-- Header End -->
    
    <!-- Slider -->
    <div class="lec_main_slider">


    <?php

$get_sliders = "select * from slider";

$run_sliders = mysqli_query($con,$get_sliders);

$i=0;

while($row_sliders = mysqli_fetch_array($run_sliders)){

     $slider_id = $row_sliders['slider_id'];

     $slider_title = $row_sliders['slider_title'];

     $slider_text = $row_sliders['slider_text'];

     $slider_img = $row_sliders['slider_img'];

   

     $i++;
     

?>

         <div class="lec_slider lec_image_bck lec_wht_txt" data-image="../images/slider-images/<?php echo $slider_img; ?>">
            <div class="lec_over" data-color="#000" data-opacity="0.3"></div>
            
            <div class="container">
                
                <div class="lec_slide_txt lec_slide_center_middle text-center">
                    <br>
                    <div class="heading-item-slider"><?php echo $slider_title; ?></div>
                    <div class="lec_slide_subtitle"><?php echo $slider_text; ?> </div>
                </div>
                
            </div>
           
            <a class="lec_scroll_down lec_go" href="#lec_content">
                <b></b>
                <i class="ti ti-angle-double-down"></i>
            </a>
        </div>

        <?php } ?>
           <!-- Slider End -->
    </div>
    <!-- Content -->
    <section id="lec_content" class="lec_content">
        <!-- section -->
        <section class="lec_section">
            <div class="container text-center">
                <h2 class="heading-item2 lec_title_counter">Food Gallary</h2>
                <!-- boxes -->
                <div class="lec_icon_boxes lec_team_slider">  


                <?php

$get_items = "select * from food_item where item_gallary_type='Food'";

$run_items = mysqli_query($con,$get_items);

$i=0;

while($row_items = mysqli_fetch_array($run_items)){

     $item_id = $row_items['item_id'];

     $item_title = $row_items['item_title'];

     $item_menu = $row_items['item_menu'];



     $select_menu = "select * from food_menu where food_menu_id=$item_menu";

     $run_select_menu = mysqli_query($con,$select_menu);

     if($row_select_menu= mysqli_fetch_array($run_select_menu)){
       $menu_name= $row_select_menu['food_menu_title'];
     }



     $item_cat = $row_items['item_cat'];
     $select_cat = "select * from food_category where food_cat_id=$item_cat";

     $run_select_cat = mysqli_query($con,$select_cat);

     if($row_select_cat= mysqli_fetch_array($run_select_cat)){
       $cat_name= $row_select_cat['food_cat_title'];
     }

     $item_price = $row_items['item_price'];

     $item_img = $row_items['item_img'];

     $item_desc = $row_items['item_desc'];

     $item_desc= substr($item_desc,0,100).".....";

     if($row_items['item_gallary_type']!=''){
      $item_gallary_type = $row_items['item_gallary_type'];

     }else{
      $item_gallary_type='';
     }


     $i++;
     

?> 

                     <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><img class="lec_news_img lec_image_bck" src="../images/item-images/<?php echo $item_img; ?>"></img></span>
                        <span class="lec_gold lec_title_animation">Every day</span>
                        <span class="lec_news_title lec_gold_subtitle"><?php  echo $item_title; ?></span>
                        <p><?php echo  $item_desc; ?></p>  
                    </div>

<?php  } ?>
                    
                      </div>
                <!-- boxes end -->
            </div>
            <!-- container end -->  
        </section>
        <!-- section end -->
        <section class="lec_section">
            <div class="container text-center">
                <h2 class="heading-item2  lec_title_counter">Restaurants Gallary</h2>
                <!-- boxes -->
                <div class="lec_icon_boxes lec_team_slider">    
                <?php

$get_restaurant_items = "select * from food_item where item_gallary_type='Restaurant'";

$run_restaurant_items = mysqli_query($con,$get_restaurant_items);

$i=0;

while($row_restaurant_items = mysqli_fetch_array($run_restaurant_items)){

     $restaurant_item_id = $row_restaurant_items['item_id'];

     $restaurant_item_title = $row_restaurant_items['item_title'];

     $restaurant_item_menu = $row_restaurant_items['item_menu'];



     $restaurant_select_menu = "select * from food_menu where food_menu_id=$restaurant_item_menu";

     $restaurant_run_select_menu = mysqli_query($con,$restaurant_select_menu);

     if($restaurant_row_select_menu= mysqli_fetch_array($restaurant_run_select_menu)){
       $restaurant_menu_name= $restaurant_row_select_menu['food_menu_title'];
     }



     $restaurant_item_cat = $row_restaurant_items['item_cat'];
     $restaurant_select_cat = "select * from food_category where food_cat_id=$restaurant_item_cat";

     $restaurant_run_select_cat = mysqli_query($con,$restaurant_select_cat);

     if($restaurant_row_select_cat= mysqli_fetch_array($restaurant_run_select_cat)){
       $restaurant_cat_name= $restaurant_row_select_cat['food_cat_title'];
     }

     $restaurant_item_price = $row_restaurant_items['item_price'];

     $restaurant_item_img = $row_restaurant_items['item_img'];

     $restaurant_item_desc = $row_restaurant_items['item_desc'];

     $restaurant_item_desc= substr($restaurant_item_desc,0,100).".....";

     if($row_items['item_gallary_type']!=''){
      $restaurant_item_gallary_type = $row_restaurant_items['item_gallary_type'];

     }else{
      $restaurant_item_gallary_type='';
     }

     $i++;
     

?>   
                      <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><img class="lec_news_img lec_image_bck" src="../images/item-images/<?php echo $restaurant_item_img; ?>"></img></span>
                        <span class="lec_gold lec_title_animation">Every day</span>
                        <span class="lec_news_title lec_gold_subtitle"><?php  echo $restaurant_item_title; ?></span>
                        <p><?php echo  $restaurant_item_desc; ?></p>  
                    </div>

                    <?php } ?>

                    
                           </div>
                <!-- boxes end -->
            </div>
            <!-- container end -->
            <!-- section end -->
        <section class="lec_section">
            <div class="container text-center">
                <h2 class="heading-item2  lec_title_counter">Buffet Gallary</h2>
                <!-- boxes -->
                <div class="lec_icon_boxes lec_team_slider">  
                <?php

$get_buffet_items = "select * from food_item where item_gallary_type='Buffet'";

$run_buffet_items = mysqli_query($con,$get_buffet_items);

$i=0;

while($row_buffet_items = mysqli_fetch_array($run_buffet_items)){

     $buffet_item_id = $row_buffet_items['item_id'];

     $buffet_item_title = $row_buffet_items['item_title'];

     $buffet_item_menu = $row_buffet_items['item_menu'];



     $buffet_select_menu = "select * from food_menu where food_menu_id=$buffet_item_menu";

     $buffet_run_select_menu = mysqli_query($con,$buffet_select_menu);

     if($buffet_row_select_menu= mysqli_fetch_array($buffet_run_select_menu)){
       $buffet_menu_name= $buffet_row_select_menu['food_menu_title'];
     }



     $buffet_item_cat = $row_buffet_items['item_cat'];
     $buffet_select_cat = "select * from food_category where food_cat_id=$buffet_item_cat";

     $buffet_run_select_cat = mysqli_query($con,$buffet_select_cat);

     if($buffet_row_select_cat= mysqli_fetch_array($buffet_run_select_cat)){
       $buffet_cat_name= $buffet_row_select_cat['food_cat_title'];
     }

     $buffet_item_price = $row_buffet_items['item_price'];

     $buffet_item_img = $row_buffet_items['item_img'];

     $buffet_item_desc = $row_buffet_items['item_desc'];

     $buffet_item_desc= substr($buffet_item_desc,0,100).".....";

     if($row_buffet_items['item_gallary_type']!=''){
      $buffet_item_gallary_type = $row_buffet_items['item_gallary_type'];

     }else{
      $buffet_item_gallary_type='';
     }


   
     

     $i++;
     

?> 
         

                   <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><img class="lec_news_img lec_image_bck" src="../images/item-images/<?php echo $buffet_item_img; ?>"></img></span>
                        <span class="lec_gold lec_title_animation">Every day</span>
                        <span class="lec_news_title lec_gold_subtitle"><?php  echo $buffet_item_title; ?></span>
                        <p><?php echo  $buffet_item_desc; ?></p>  
                    </div>

                    <?php } ?>    
                    
                     </div>
                <!-- boxes end -->
            </div>
            <!-- container end -->
            <!-- section end -->
        <section class="lec_section">
            <div class="container text-center">
                <h2 class="heading-item2 lec_title_counter">Special Gallary</h2>
                <!-- boxes -->
                <div class="lec_icon_boxes lec_team_slider">   
<?php

$get_special_items = "select * from food_item where item_gallary_type='Special'";

$run_special_items = mysqli_query($con,$get_special_items);

$i=0;

while($row_special_items = mysqli_fetch_array($run_special_items)){

     $special_item_id = $row_special_items['item_id'];

     $special_item_title = $row_special_items['item_title'];

     $special_item_menu = $row_special_items['item_menu'];



     $special_select_menu = "select * from food_menu where food_menu_id=$special_item_menu";

     $special_run_select_menu = mysqli_query($con,$special_select_menu);

     if($special_row_select_menu= mysqli_fetch_array($special_run_select_menu)){
       $special_menu_name= $special_row_select_menu['food_menu_title'];
     }



     $special_item_cat = $row_special_items['item_cat'];
     $special_select_cat = "select * from food_category where food_cat_id=$special_item_cat";

     $special_run_select_cat = mysqli_query($con,$special_select_cat);

     if($special_row_select_cat= mysqli_fetch_array($special_run_select_cat)){
       $special_cat_name= $special_row_select_cat['food_cat_title'];
     }

     $special_item_price = $row_special_items['item_price'];

     $special_item_img = $row_special_items['item_img'];

     $special_item_desc = $row_special_items['item_desc'];

     $special_item_desc= substr($special_item_desc,0,100).".....";

     if($row_special_items['item_gallary_type']!=''){
      $special_item_gallary_type = $row_special_items['item_gallary_type'];

     }else{
      $special_item_gallary_type='';
     }


   
     

     $i++;
     

?> 

                   <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><img class="lec_news_img lec_image_bck" src="../images/item-images/<?php echo $special_item_img; ?>"></img></span>
                        <span class="lec_gold lec_title_animation">Every day</span>
                        <span class="lec_news_title lec_gold_subtitle"><?php  echo $special_item_title; ?></span>
                        <p><?php echo  $special_item_desc; ?></p>  
                    </div> 

                    <?php } ?>    

                    
                  </div>
                <!-- boxes end -->
            </div>
            <!-- container end -->
        </section>
        <!-- section end -->
    </section>
    <!-- Content End -->
    <footer class="lec_image_bck text-center lec_wht_txt" data-image="../wp-content/themes/Bonjour/images/main_back_bl.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="    border-right: 1px solid #383535;">
                    <!-- Copyrights -->
                    <p><a href="../../index.php"> <img src="../images/other-images/logo.png" alt="" height="100"></a></p>
                    

                </div>


                <div class="col-md-4" style="    border-right: 1px solid #383535;">
                  <!-- Copyrights -->
                  <p>CJKS stadium shooping complex,4 th floor shop no 5009 <br> Nur ahmed chowdhury road kazir Dewory Kotowali,Chattogram. <br>
                    Mobile 01844668812-14
                  </p>

                
              </div>

              <div class="col-md-4">
               
                <!-- Social Buttons -->
                <h4>Contact Us Within:</h4>
                <div class="lec_footer_social">
                    <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="https://instagram.com/" target="_blank"> <i class="fa fa-instagram"></i></a>
            
                        <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a>
                        <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-square"></i></a>
                    </div>
                </div>


            </div>


            </div>
            <h4><p>© Nongor Caterers 2021 | Web Design & Development By: <a href="#" target="_blank">RobTechBD Limited</a> </p>
            </h4>
        </div>
    </footer>
    <!-- Footer End -->

</div>
<!-- Page End -->

<script type='text/javascript' src='../wp-includes/js/wp-embed.min48f5.js?ver=5.3.6'></script>
<!-- JQuery -->
<script src="../wp-content/themes/Bonjour/js/jquery-1.12.4.min.js"></script> 
<!-- Library JS -->
<script src="../wp-content/themes/Bonjour/js/lecker_library.js"></script> 

<!-- Theme JS -->
<script src="../wp-content/themes/Bonjour/js/lecker_script.js"></script>


</body>

<!-- Mirrored from bonjourbd.com/gallary/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 05:39:00 GMT -->
</html>