

<?php
 
 include("../includes/db.php");
 


if(isset($_GET['delete_id'])){
        
  $delete_id = $_GET['delete_id'];
  
  $do_delete_id= "delete from slider where slider_id='$delete_id'";
  
  $run_delete = mysqli_query($con,$do_delete_id);
  
  if($run_delete){
      
      echo "<script>alert('Successfully Deleted!')</script>";
      
      echo "<script>window.open('slider.php','_self')</script>";
      

  }

  else{
      echo "<script>alert('Delation Failed!')</script>";
      echo "<script>window.open('slider.php','_self')</script>";

  }
  
}


?>

<script>
if(!localStorage.getItem('phone')){
  window.open('../index.php','_self');
}

</script>

<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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

          <li class="nav-item ">
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
          <li class="nav-item active">
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
            <a class="navbar-brand" href="javascript:void(0)">Slider List</a>
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
      <div class="col-md-12">
            <a href="create.php?type=slider" class="btn btn-info float-right mb-2 mr-3 " > <span class="material-icons mr-1" style=" font-size: 24px;">add_circle</span>Create New Slider</a>
        </div>

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


   <div class="col-md-6">
        <div class="card">
    <div class="card-body">
    <img  class="card-img-top img-fluid" src="../../images/slider-images/<?php echo $slider_img; ?>" alt="Card image" style="width:100%;" >
      <h4 class="card-title"><?php echo $slider_title; ?></h4>

      <p><?php echo $slider_text; ?></p>
      
      <a href="slider.php?delete_id=<?php echo $slider_id; ?>" class="btn btn-danger btn-block">Delete</a>
    </div>
     </div>
    </div>

    <?php } ?>

    
   
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
      demo.initGoogleMaps();
    });
  </script>
</body>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark/examples/slider.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 07:08:54 GMT -->
</html>
