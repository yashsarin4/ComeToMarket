<?php 
require_once "../../../description/pdo.php";
$_check=0;
session_start() ;
if(isset($_SESSION['email']))
{
//echo $_SESSION['email'];
 $_check=1;
 $user_id = $_SESSION['user_id'];

}
$temp=1;

// *****************************get details of product uding id*****************
$stmt = $pdo->prepare("SELECT * FROM product where product_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['product_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$a = htmlentities($row['product_name']);
$b = htmlentities($row['price']);
$c = htmlentities($row['purchase_year']);
$d = htmlentities($row['brand']);
$e = htmlentities($row['description']);
$f = htmlentities($row['image1']);
$g = htmlentities($row['image2']);
$h = htmlentities($row['image3']);
$seller_id = $row['user_id'];

$product_id = $row['product_id'];

$select_stmt = $pdo->prepare("SELECT * FROM user where user_id = :id");
$select_stmt->execute(array(":id" => $seller_id));
$row1 = $select_stmt->fetch(PDO::FETCH_ASSOC);
if ( $row1 === false ) {
    $_SESSION['error'] = 'No value for phone_no.';
    header( 'Location: app.php' ) ;
    return;
}
$i = htmlentities($row1['ph_no']);
$user_id = $row1['user_id'];

$s = $pdo->prepare("SELECT * FROM user where user_id = :u_id");
$s->execute(array(":u_id" => $user_id));
$row2 = $s->fetch(PDO::FETCH_ASSOC);
if ( $row2 === false ) {
    $_SESSION['error'] = 'No value for phone_no.';
    header( 'Location: app.php' ) ;
    return;
}
$j = htmlentities($row2['first_name']);
$k = htmlentities($row2['last_name']);

// *******************************************************************************

// *******************************cookie*******************************


$stmt = $pdo->prepare("SELECT * FROM product where product_id = :xyz");

     $stmt->execute(array(":xyz" => $_GET['product_id']));
     $row3 = $stmt->fetch(PDO::FETCH_ASSOC);
     if($row3)
     {
         $img1 = $row3['image1'];
         $img2 = $row3['image2'];
         $img3 = $row3['image3'];
         $nm = $row3['product_name'];
        $price = $row3['price'];
         $qty = 2;
        $total = $price*$qty;
      $id= $row3['product_id'];
      $brand=$row3['brand'];
      $seller=$row3['user_id'];
     // echo $id;
    }
    $stmt = $pdo->prepare("SELECT * FROM user where user_id = :xyz");

     $stmt->execute(array(":xyz" => $seller));
     $row3 = $stmt->fetch(PDO::FETCH_ASSOC);
     if($row3)
     {
         $seller_fname= $row3['first_name'];
         $seller_lname= $row3['last_name'];
         $seller_ph= $row3['ph_no'];
         $seller_add= $row3['address'];
     // echo $id;
    }




if(isset($_POST['addcart']))
{
   // echo "hello";
    $d = 0;
    if(isset($_COOKIE['item']) && is_array($_COOKIE['item']))
    {
       // echo"done";
      //if(){
        foreach($_COOKIE['item'] as  $name=> $value)
        {
            $d = $d+1;
        }
        $d = $d+1;
        //echo $d;
    //}
    }
    else
    {
      //  echo"NO";
        $d = $d+1;
    }

   // echo $_GET['product_id'];
     
    
    //setcookie("item[$d]",$id."__".$img1."__".$nm."__".$price."__".$brand."__".$total,time()+1800);//new
  
   // if(is_array($_COOKIE['item']) && $_COOKIE['item'])
   if(isset($_COOKIE['item']) && is_array($_COOKIE['item']))

{   
    //echo "ramlal";
    foreach($_COOKIE['item'] as $name=>$value)//looping for per cookies if 
    {
        //echo "mahesh";
        $values11 = explode("_",$value);
        $found = 0;
        if($id==$values11[0])//this is for check same cookie availabele or not if available then increase
        {
            //checkj here for quantity add in the carty for more than availab;e quantity
            $found=$found+1;
            
        }
        
    }
    if($found ==0)
    {
        setcookie("item[$d]",$id."__".$img1."__".$nm."__".$price."__".$brand."__".$total,time()+1800);//new

    }
    else{
        ?>
        <script>
            alert("can't add more than one product")
        </script>
        <?php
    }
}
else
{
    setcookie("item[$d]",$id."__".$img1."__".$nm."__".$price."__".$brand."__".$total,time()+1800);//new

}
}

// ***********************************************************************************

if(isset($_POST['postadd']))
{
    if(isset($_SESSION['user_id'])){
        header( "Location: ../../add_product/controller.php" ) ; 

    }else{
        header( "Location: ../../login/login_page.php" ) ; 

    }
}





 ?>




<!-- ********************************************************************************** -->

<link href="http://cdn.shopify.com/s/files/1/0067/5617/1846/t/2/assets/timber.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>





<!-- ******************************************CSS*********************************************** -->



<style>
/* ************************************************************** */


        /* ******************************************************** */
        
.breadcrumb-list > li {
  font-size: 14px;
  list-style: none;
  display: inline;
}
.breadcrumb-list > li a:after {
  content: "/";
  vertical-align: middle;
  margin: 0 5px;
  color: #7a7a7a;
}
.action-wishlist:hover,
.action-wishlist:focus{
  color:#fff;
}
.add-to-cart.action-wishlist {
  width: 50px;
  text-align: center;
  padding: 0;
}
.add-to-cart.action-wishlist i {
  margin-right: 0px;
}
.product-add-to-cart .cart-title,
.product-add-to-cart .cart-title:hover,
.product-list-action .cart-title,
.product-list-action .cart-title:hover {
  background-color: transparent;
  border-bottom: none;
  color: inherit;
}
.product-add-to-cart .pro-add-btn i,
.product-list-action .pro-add-btn i {
  margin-right: 10px;
  font-size: 18px;
}
.add-to-cart {
  display: inline-block;
}
.action-wishlist:hover,
.action-wishlist:focus{
  color:#fff;
}
.add-to-cart.action-wishlist i {
  margin-right: 0px;
}
.product-add-to-cart {
  float: none;
}
.single-product-wishlist{
  display: inline-block;
  position: relative;
  margin-left: 20px;
}
.product-thumbnail .owl-nav  {display: none;}
.breadcrumb-area {
    padding: 30px 0;
    background-color: #f3f3f3;
}
.breadmome-name {
    color: #ff6a00;
    font-size: 24px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 18px;
}
.breadcrumb-content > ul > li {
    display: inline-block;
    list-style: none;
    position: relative;
    font-size: 14px;
    color: #333;
}
.breadcrumb-content > ul > li.active{
    color: #ff6a00;
}
.breadcrumb-content > ul > li:after {
    content: "/";
    vertical-align: middle;
    margin: 0 5px;
    color: #7a7a7a;
}
.breadcrumb-content > ul > li:last-child:after{
    display: none;
}
.mt-80 { margin-top: 80px }.mb-80 { margin-bottom: 80px }
.single-product-name {
    font-size: 22px;
    text-transform: capitalize;
    font-weight: 900;
    color: #444;
    line-height: 24px;
    margin-bottom: 15px;
}
.single-product-reviews {
    margin-bottom: 10px;
}
.single-product-price {
    margin-top: 25px;
}
.single-product-action {
    margin-top: 30px;
    padding-bottom: 30px;
    border-top: 1px solid #ebebeb;
    border-bottom: 1px solid #ebebeb;
    float: left;
    width: 100%;
}
.product-discount {
    display: inline-block;
    margin-bottom: 20px;
}
.product-discount span.price {
    font-size: 28px;
    font-weight: 900;
    line-height: 30px;
    display: inline-block;
    color: #008bff;
}
.product-info {
    color: #333;
    font-size: 14px;
    font-weight: 400;
}
.product-info p {
    line-height: 30px;
    font-size: 14px;
    color: #333;
    margin-top: 30px;
}
.product-add-to-cart span.control-label {
    display: block;
    margin-bottom: 10px;
    text-transform: capitalize;
    color: #232323;
    font-size: 14px;
}
.product-add-to-cart {
    overflow: hidden;
    margin: 20px 0px;
    float: left;
    width: 100%;
}
.cart-plus-minus-box {
    border: 1px solid #e1e1e1;
    border-radius: 0;
    color: #3c3c3c;
    height: 49px;
    text-align: center;
    width: 50px;
    padding: 5px 10px;
}
.product-add-to-cart .cart-plus-minus {
    margin-right: 25px;
}
.cart-plus-minus {
    position: relative;
    width: 75px;
    float: left;
    padding-right: 25px;
}
.add-to-cart {
    background: #008bff;
    border: 0;
    border-bottom: 3px solid #0680e5;
    color: #fff;
    box-shadow: none;
    padding: 0 30px;
    border-radius: 3px;
    font-weight: 400;
    cursor: pointer;
    font-size: 14px;
    text-transform: capitalize;
    height: 50px;
    line-height: 50px;
}
.add-to-cart:hover {
    background: #ff6a00;
    border-color: #e96405;
}






    /* ***************************************************************** */
</style>





<div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="../mainshow.php?page=book" title="Dashboard"><i class="fa fa-home"></i> Home </a>
          </li>

        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
          <a class="nav-link" href=<?php if($_check){echo ' "'.'../../admin/admin.php'.' " ';}else{echo ' "'.'../../login/login_page.php'.' " ';}?>><i class="fas fa-user"></i> Profile</a>

          </li>
          <li id="login_logout" class="nav-item">
            <a class="nav-link" href="../../login/login_page.php"><i class="fas fa-key"></i> LogIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i>Cart</a>
          </li>
          <form action="" method="post">
          <li class="nav-item">
            <!-- <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i>Post Add</a> -->
            <button id="postadd" name="postadd" type="submit" class="btn btn-success" style="margin-left: 5px;">Post Add</button>
          </li>
          </form>
        </ul>
      </div>
    </nav>
    
  </div>









  <div class="wrapper col-md-10" style="margin-left: 200px !important;">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumb-area breadcrumbs overlay-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!-- <div class="breadcrumb-content text-center">
                                    <h1 class="breadmome-name breadcrumbs-title">Lorem Ipsum is simply dummy text</h1>             
                                    <nav class="" role="navigation" aria-label="breadcrumbs">
                                         <ul class="breadcrumb-list">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Sport & Outdoor</a><span>Lorem Ipsum is simply dummy text</span></li>
                                        </ul> 
                                    </nav>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main>
                <div id="shopify-section-product-template" class="shopify-section">
                    <div class="single-product-area mt-80 mb-80">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="product-details-large" id="ProductPhoto">
                                        <img id="ProductPhotoImg" class="product-zoom" data-image-id="" alt="" data-zoom-image="../../add_product/<?php echo $img1;?>" src="../../add_product/<?php echo $img1;?>">
              
                                    </div>
                                    <div id="ProductThumbs" class="product-thumbnail owl-carousel">
                                        <!-- <a class="product-single__thumbnail active" href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-image-id="6995357106246">
                                        <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
              
                                        <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552" 
                                        data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552" data-image-id="6995358023750">
                                        <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
              
                                        <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552" 
                                        data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552" data-image-id="6995357302854">
                                        <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
              
                                        <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552" 
                                        data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552" data-image-id="6995357532230">
                                        <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
              
                                        <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552" 
                                        data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552" data-image-id="6995357728838">
                                        <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a> -->
              




                                        <!-- ********************************************************************************* -->


                                       
                                        <a class="product-single__thumbnail " href="../../add_product/<?php echo $img2;?>" 
                                        data-image="../../add_product/<?php echo $img2;?>" data-image-id="6995357532230">
                                        <img src="../../add_product/<?php echo $img2;?>" alt=""></a>
                                       
                                        <a class="product-single__thumbnail " href="../../add_product/<?php echo $img3;?>" 
                                        data-image="../../add_product/<?php echo $img3;?>" data-image-id="6995357532230">
                                        <img src="../../add_product/<?php echo $img3;?>" alt=""></a>

                                        <a class="product-single__thumbnail " href="../../add_product/<?php echo $img1;?>" 
                                        data-image="../../add_product/<?php echo $img1;?>" data-image-id="6995357532230">
                                        <img src="../../add_product/<?php echo $img1;?>" alt=""></a>
                                        


                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="single-product-content">
                                        <form method="post" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                            <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                                            <div class="product-details">
                                                <h1 class="single-product-name"><?php echo $a ; ?></h1>
                                                <div class="single-product-reviews">
                                                    <span class="shopify-product-reviews-badge" data-id="1912078270534"></span>
                                                </div>
                                                <div class="product-sku">SELLER NAME: <span class="variant-sku">
                                                    <?php 
                                                    if($_check)
                                                    {
                                                        echo $seller_fname." ".$seller_lname;
                                                    }
                                                    else{
                                                        echo "Please Log In to see details";
                                                    }
                                                    
                                                     ?>

                                                </span></div>
                                                <div class="product-sku">SELLER HOSTEL: <span class="variant-sku">
                                                    <?php 
                                                    if($_check)
                                                    {
                                                        echo $seller_add;
                                                    }else{
                                                        echo "Please Log In to see details";
                                                    }
                                                    
                                                     ?>

                                                </span></div>
                                                
                                                <div class="product-sku">SELLER PHONE: <span class="variant-sku">
                                                    <?php 
                                                    if($_check)
                                                    {
                                                        echo $seller_ph;
                                                    }else{
                                                        echo "Please Log In to see details";
                                                    }
                                                    
                                                     ?>

                                                </span></div>

                                                <div class="single-product-price">
                                                    <div class="product-discount"><span  class="price" id="ProductPrice"><span class=money><?php echo $b ; ?></span></span></div>
                                                </div>
                                                <div class="product-info"> <h2>DESCRIPTION</h2> <br><?php echo $e ; ?></div>
                              
                                                <div class="single-product-action">
                                                    <div class="product-variant-option"> 
                                                        <select name="id" id="productSelect" class="product-single__variants" style="display:none;">   
                                                            <option  selected="selected"  data-sku="YQT71020193" value="19506517377094">Default Title - <span class=money>₹<<?php echo $b ; ?></span></option>
                                        
                                                        </select>
                                                        <script>
                                                            jQuery(function() {
                                                              jQuery('.swatch :radio').change(function() {
                                                                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                                var optionValue = jQuery(this).val();
                                                                jQuery(this)
                                                                .closest('form')
                                                                .find('.single-option-selector')
                                                                .eq(optionIndex)
                                                                .val(optionValue)
                                                                .trigger('change');
                                                              });
                                                            });
                                                        </script>
                                                    </div>
                                                    <style>.product-variant-option .selector-wrapper{display: none;}</style>
                                                    <div class="product-add-to-cart">
                                                        <span class="control-label">Quantity</span>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                                        </div>
                                                        <div class="add">
                                                            <button type="submit" class="add-to-cart ajax-spin-cart" id="AddToCart" name="addcart">
                                                                <i class="ion-bag"></i>
                                                                <span class="list-cart-title cart-title" id="AddToCartText">Add to cart</span>
                                                            </button>
                                                            <!-- <script>
                                                                jQuery('#AddToCart').click(function(e) {
                                                                e.preventDefault();
                                                                Shopify.addItemFromFormStart('AddToCartForm', 1912078270534);
                                                                 }); 
                                                            </script> -->
    
                                                            <!-- <div class="single-product-wishlist">                    
                                                                <a class="add-to-cart action-wishlist wishlist" href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="secure-payment"><img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/files/guaranteed_safe_checkout1.png?v=1545216773"></div>                                                                  
                                                </div>                                                        
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style type="text/css">.product-details .countdown-timer-wrapper{display: none !important;}</style>
                                                    
                    <script>$(document).ready(function() {$('.fancybox').fancybox();});</script>
                    <script>function productZoom(){
                            $(".product-zoom").elevateZoom({
                              gallery: 'ProductThumbs',
                              galleryActiveClass: "active",
                              zoomType: "inner",
                              cursor: "crosshair"
                            });$(".product-zoom").on("click", function(e) {
                              var ez = $('.product-zoom').data('elevateZoom');
                              $.fancybox(ez.getGalleryList());
                              return false;
                            });
                            
                            };
                          function productZoomDisable(){
                            if( $(window).width() < 767 ) {
                              $('.zoomContainer').remove();
                              $(".product-zoom").removeData('elevateZoom');
                              $(".product-zoom").removeData('zoomImage');
                            } else {
                              productZoom();
                            }
                          };
    
                          productZoomDisable();
    
                          $(window).resize(function() {
                            productZoomDisable();
                          });
                    </script>
                    <script>
                        $('.product-thumbnail').owlCarousel({
                            loop: true,
                            center: true,
                            nav: true,dots:false,
                            margin:10,
                            autoplay: false,
                            autoplayTimeout: 5000,
                            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                            item: 3,
                            responsive: {
                                0: {
                                    items: 2
                                },
                                480: {
                                    items: 3
                                },
                                992: {
                                    items: 3,
                                },
                                1170: {
                                    items: 3,
                                },
                                1200: {
                                    items: 3
                                }
                            }
                        });
                    </script>
                </div>
            </main>
        </div>
       






  




<!-- ************************************************************************************************** -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>
 
 $(document).ready(function(){
   var msg= <?php echo $user_id; ?>;
   var check= <?php echo $_check;?>;
    //alert(check);




  if(check)
  {
    $("#login_logout").html('<a  class="nav-link " href="../../login/logout.php"><i class="fa fa-fw fa-user"></i> LogOut</a>');
  }

 });
</script>