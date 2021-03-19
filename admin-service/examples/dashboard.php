<?php

session_start();
 
 include("../includes/db.php");
 



?>

<script>
if(!localStorage.getItem('phone')){
  window.open('../index.php','_self');
}

</script>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 07:08:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Admin Panel</title>

<link rel="icon" href="../../images/other-images/logo2.png" sizes="36x36" />

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-dark" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
  <meta name="description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Dashboard Dark Edition by Creative Tim">
  <meta itemprop="description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard Dark Edition by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard Dark Edition by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="dashboard.php" />
  <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/95/opt_mdb_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard Dark Edition is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.minf066.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
 
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="dark-edition">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo img-fluid">
      <div class="container">
      <a href="dashboard.php">
      <img src="../../images/other-images/logo.png" alt="" height="60"></div>
      </a>
      </div>
      
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item  ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>

          <li class="nav-item "><!-- li begin -->
           
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#products"><!-- a href begin -->
                    
              <i class="material-icons">
                table_view
              </i>
              <p>Gallary <span class="material-icons">
                arrow_drop_down
                </span>
              </p>
              
                    <i class="fa fa-fw fa-caret-down"></i>
                    
            </a><!-- a href finish -->
            
            <ul id="products" class="collapse"><!-- collapse begin -->
                <li><!-- li begin -->
                    <a href="foodGallary.php" class="nav-link"> Food Gallary </a>
                </li><!-- li finish -->
                <li><!-- li begin -->
                    <a href="restaurantGallary.php" class="nav-link"> Restaurant Gallary </a>
                </li><!-- li finish -->
                <li><!-- li begin -->
                  <a href="buffetGallary.php" class="nav-link"> Buffet Gallary </a>
              </li><!-- li finish -->
              <li><!-- li begin -->
                <a href="specialGallary.php" class="nav-link"> Special Gallary </a>
            </li><!-- li finish -->
            </ul><!-- collapse finish -->
            
        </li><!-- li finish -->

         

          <li class="nav-item ">
            <a class="nav-link" href="menus.php">
              <i class="material-icons">content_paste</i>
              <p>Menus</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="categories.php">
              <i class="material-icons">library_books</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="items.php">
              <i class="material-icons">bubble_chart</i>
              <p>Items</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="slider.php">
              <i class="material-icons">
                settings_ethernet
                </i>
              <p>Slider</p>
            </a>
          </li>
         

          <li class="nav-item ">
            <a class="nav-link" href="services.php">
              <i class="material-icons">
                rule
                </i>
              <p>Services</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="admins.php">
            <i class="material-icons">account_circle</i>
              <p>Admins</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
            <i class="material-icons">exit_to_app</i>
              <p>Logout</p>
            </a>
          </li>


        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         
          <div class="row">
          <?php
          $get_count_menus = "select * from food_menu";
     
          $run_count_menus = mysqli_query($con,$get_count_menus);
     
          $count_item_menus= mysqli_num_rows($run_count_menus);



          $get_count_categories = "select * from food_category";
     
          $run_count_categories = mysqli_query($con,$get_count_categories);
     
          $count_item_categories= mysqli_num_rows($run_count_categories);



          
     $get_count_item = "select * from food_item";
     
     $run_count_item = mysqli_query($con,$get_count_item);

     $count_item_item= mysqli_num_rows($run_count_item);



     $get_count_slider = "select * from slider";
     
     $run_count_slider = mysqli_query($con,$get_count_slider);

     $count_item_slider= mysqli_num_rows($run_count_slider);

          
          ?>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <span class="material-icons" style="font-size: 45px;">
                      assignment
                      </span>
                  </div>

                  <p class="card-category">Total Food Menus</p>
                  <h3 class="card-title text-light"> 
                  <?php echo $count_item_menus; ?>

                  </h3>
                </div>
                <div class="card-footer">
                 
              
                    <a href="menus.php"  class="btn btn-warning  btn-block ">View Details</a>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <span class="material-icons"  style="font-size: 45px;">
                      chrome_reader_mode
                      </span>
                  </div>
                  <p class="card-category">Food Categories</p>
                  <h3 class="card-title text-light">
                  <?php echo $count_item_categories; ?>

                </div>
                <div class="card-footer">
                  <a href="categories.php"  class="btn btn-success  btn-block ">View Details</a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <span class="material-icons"  style="font-size: 45px;">
                      vertical_split
                      </span>
                  </div>
                  <p class="card-category">Total Food Items</p>
                  <h3 class="card-title text-light">
                  
                  <?php echo $count_item_item; ?>

                  </h3>
                </div>
                <div class="card-footer">
                 
              
                    <a  href="items.php" class="btn btn-danger  btn-block ">View Details</a>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <span class="material-icons"   style="font-size: 45px;">
                      input
                      </span>
                  </div>
                  <p class="card-category">Slider Images</p>
                  <h3 class="card-title text-light">

                  
                  <?php echo $count_item_slider; ?>

                  </h3>
                </div>
                <div class="card-footer">
                    <a href="slider.php" class="btn btn-info  btn-block ">View Details</a>                
                </div>
              </div>
            </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Special Items</h4>
                  <p class="card-category">Latest 5 Special Items </p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      
                      <th>Title</th>
                      <th>Description</th>
                      <th>  Image
                      </th>
                    </thead>
                    <tbody>
                      <tr>

                      <?php

$get_items = "select * from food_item where item_gallary_type='Food' order by item_id desc LIMIT 5 ";

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
                       
                        <td>
                        <?php echo $item_title; ?>
                       </td>
                        <td>
                        
                        <?php echo $item_desc; ?>
                        </td>
                        <td>

                          <img width="90" style="max-height:100px;" src="../../images/item-images/<?php echo $item_img; ?>" alt="">
                        
                        </td>
                      </tr>
                      <?php } ?>

                        
                      
                    </tbody>
                  </table>
                  <a href="specialGallary.php" type="button" class="btn btn-block btn-primary">View More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-warning">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">List:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            Food Menus
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            Food Categories
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            Food Items
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          
                          <th>No</th>
                          <th>Title</th>
                          <th>Total Items</th>
                        </thead>
                        <tbody>

                        <?php

$get_menus = "select * from food_menu order by food_menu_id limit 5";

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
                          <tr>
                           
                            <td>
                            <?php echo $i; ?>
                            </td>
                            <td>
                            <?php echo $menu_title; ?>

                             </td>
                            <td>                        
                              <?php echo $count_item; ?>
                           </td>
                          </tr>
                        
  <?php } ?>

                        </tbody>
                      </table>
                      <a href="menus.php" type="button" class="btn btn-block btn-warning">View More</a>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          
                          <th>No</th>
                          <th>Title</th>
                          <th>Total Items</th>
                        </thead>
                        <tbody>

                                           
                      <?php

$get_categories = "select * from food_category limit 5";

$run_categories = mysqli_query($con,$get_categories);

$i=0;

while($row_categories = mysqli_fetch_array($run_categories)){

     $cat_id = $row_categories['food_cat_id'];

     $cat_title = $row_categories['food_cat_title'];

   
     $get_count_item = "select * from food_item where item_cat=$cat_id";
     
     $run_count_item = mysqli_query($con,$get_count_item);

     $count_item= mysqli_num_rows($run_count_item);

     $i++;
     

?>
                          <tr>
                           
                            <td>
                            <?php echo $i; ?>
                            </td>
                            <td>    
                             <?php echo $cat_title; ?>
                           </td>
                            <td>
                            <?php echo $count_item; ?>
                            </td>
                          </tr>

                          <?php } ?>

                         
                         
                        </tbody>
                      </table>
                      <button href="categories.php" type="button" class="btn btn-block btn-warning">View More</button>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table table-hover">
                        <thead class="text-warning">
                          
                          <th>Title</th>
                          <th>Category</th>
                          <th>Price</th>
                        </thead>
                        <tbody>

                        <?php

$get_items = "select * from food_item limit 5";

$run_items = mysqli_query($con,$get_items);

$i=0;

while($row_items = mysqli_fetch_array($run_items)){

     $item_id = $row_items['item_id'];

     $item_title = $row_items['item_title'];

     $item_cat = $row_items['item_cat'];
     $select_cat = "select * from food_category where food_cat_id=$item_cat";

     $run_select_cat = mysqli_query($con,$select_cat);

     if($row_select_cat= mysqli_fetch_array($run_select_cat)){
       $cat_name= $row_select_cat['food_cat_title'];
     }
     else{
      $cat_name='';
     }
    
     $item_price = $row_items['item_price'];

   
     

     $i++;
     

?> 
                          <tr>
                           
                            <td><?php echo $item_title;?></td>
                            <td><?php echo $cat_name;?> </td>
                            <td><?php echo $item_price;?>Tk</td>
                          </tr>

                          <?php } ?>

                          
                        </tbody>

                      
                       
                      </table>

                      <a href="items.php" type="button" class="btn btn-block btn-warning">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">RobTechBD Limited</a> for a better web.
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin" style="top: 53px;right: 8px;">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
      <span class="material-icons" style="    font-size: 34px;">
view_module
</span>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        
      
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.minf066.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <!-- Sharrre libray -->
  <script src="../assets/demo/jquery.sharrre.js"></script>
  <script>
    $(document).ready(function() {

      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php'
      });

      $('#google').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php'
      });



      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark/examples/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 07:08:53 GMT -->
</html>
