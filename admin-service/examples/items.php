<?php
 
 include("../includes/db.php");



if(isset($_GET['delete_id'])){
        
  $delete_id = $_GET['delete_id'];
  
  $do_delete_id= "delete from food_item where item_id='$delete_id'";
  
  $run_delete = mysqli_query($con,$do_delete_id);
  
  if($run_delete){
      
      echo "<script>alert('Successfully Deleted!')</script>";
      
      echo "<script>window.open('items.php','_self')</script>";
      

  }

  else{
      echo "<script>alert('Delation Failed!')</script>";
      echo "<script>window.open('items.php','_self')</script>";
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
          <li class="nav-item active">
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
            <a class="navbar-brand" href="javascript:void(0)">Items</a>
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
          <a href="create.php?type=items" class="btn btn-info float-right mb-2 mr-3"><span class="material-icons mr-1" style=" font-size: 24px;">add_circle</span>Create New Items</a>
          </div>
          <div class="col-md-12">
          
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title text-center font-weight-bold">Food Items</h4>
                <p class="card-category text-center"> Here's all the list of food items.</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-light">
                      <th style="color: white;font-weight: 700;">
                        No
                      </th>
                      <th style="color: white;font-weight: 700;">
                        Title
                      </th>
                      <th style="color: white;font-weight: 700;">
                        Menu 
                      </th>
                      <th style="color: white;font-weight: 700;">
                        Category
                      </th>
                      <th style="color: white;font-weight: 700;">
                        Price
                      </th>

                      <th style="color: white;font-weight: 700;">
                        Image
                       </th>

                       <th style="color: white;font-weight: 700;">
                        Description
                       </th>
                       
                       <th style="color: white;font-weight: 700;">
                       Type
                       </th>

                       <th style="color: white;font-weight: 700;">
                        Edit
                       </th>

                       <th style="color: white;font-weight: 700;">
                        Delete
                       </th>

                       
                       
                    </thead>
                    <tbody>

                    <?php

$get_items = "select * from food_item";

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

     $item_desc= substr($item_desc,0,30).".....";

     if($row_items['item_gallary_type']!=''){
      $item_gallary_type = $row_items['item_gallary_type'];

     }else{
      $item_gallary_type='';
     }


   
     

     $i++;
     

?> 
                      <tr>
                        <td>
                        <?php echo $i; ?>
                        </td>
                        <td>
                        <?php echo $item_title; ?>
                        </td>
                        <td>
                        <?php echo $menu_name; ?>
                        </td>
                        <td>
                          <p>  <?php echo $cat_name; ?></p>
                        </td>

                        
                        <td>
                         <p><?php echo $item_price; ?>tk</p>
                        </td>

                        <td>
                        <img width="70px"  style="max-height:80px" src="../../images/item-images/<?php echo $item_img; ?>" alt="">
                        </td>


                        <td>
                          <p><?php echo $item_desc; ?></p>
                        </td>

                        <td>
                        <?php 
                        if($item_gallary_type==''){

                          ?>

<a href="modal.php?item_id=<?php echo $item_id;?>" >  <span  class="material-icons" style="cursor: pointer;">create</span></a>
                          <?php

                        }else{
                          echo $item_gallary_type;
                        }
                     
                        
                        
                        ?> 
                        </td>
                        
                        <td>
                          <a href="edit.php?type=items&&item_id=<?php echo $item_id ;?>">  <span class="material-icons text-success">border_color</span></a>
                        </td>

                        
                        <td>
                        <a href="items.php?delete_id=<?php echo $item_id ?>">  <span class="material-icons text-danger">clear</span>  </a>
                        </td>

                      </tr>


            


                     <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Select Gallary Type:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="" method="post">
    <div class="form-group">
      <label  style=" font-weight: 1000;
    color: white;" for="gallary_type">Title:</label>
       <div class="form-check" required>
      <label class="form-check-label" for="radio1">
        <input type="radio"  id="radio1" name="gallary_type"  value="1.<?php echo $item_id; ?>" >Food 
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio"  id="radio2" name="gallary_type"  value="2.<?php echo $item_id; ?>">Restaurant
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion3" value="3.<?php echo $item_id; ?>"  name="gallary_type">Buffet
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion4" value="4.<?php echo $item_id; ?>"name="gallary_type">Special
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" id="radion4"  value="5.<?php echo $item_id; ?>"name="gallary_type">None
      </label>
    </div>

    </div>
   
    <input type="submit" name="type_submit" class="btn btn-primary"/>
  </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
    <?php
    
    if(isset($_POST['type_submit'])){
      $gallary_type_array = $_POST['gallary_type'];
      explode(".",$gallary_type_array);
      $gallary_type= $gallary_type_array[0];
      $id=$gallary_type_array[2];


      switch($gallary_type){
        case '1':
          $type= "Food";
        case '2':
          $type= "Restaurant";
        case '3':
          $type = "Buffet";
        case '4':
          $type = "Special";
        default:
          $type='';

      }


      if($run_type){
     
        echo "<script>window.open('items.php?id=$item_id&&type=$type','_self')</script>";
        
    }


    
      $insert_type = "update food_item set item_gallary_type ='$type'  where item_id = '$id' ";
      $run_type =mysqli_query($con,$insert_type);
    
      if($run_type){
        echo "<script>alert('Your Gallary Type Insertion $id   !')</script>";
       
        
        echo "<script>window.open('items.php','_self')</script>";
        
    }
    else
    {
      echo "<script>alert('Your Gallary Type Insertion Failed!')</script>";
        
    }
    
    } 
     
     ?>



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
 
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-dark/examples/items.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Mar 2021 07:08:54 GMT -->
</html>
