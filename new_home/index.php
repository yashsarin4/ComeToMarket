<?php

$_check = 0;
$check_ph = 0;
//session_start();
if (isset($_SESSION['email'])) {
  //  echo $_SESSION['email'];
  $_check = 1;
  $user_id = $_SESSION['user_id'];
}

//  retrieve phone to check seller or not

if (isset($_SESSION['phone'])) {
  //  echo $_SESSION['phone'];
  $check_ph = 1;
}




?>



<!-- include header -->
<?php include "includes/header.php"; ?>

<body>



  <!-- NAVBAR -->
  







  <!-- HEADER -->


  <!-- CATEGORY -->

  <!-- first row -->
  <section id="category">
    <div class="wrapper"></div>
    <!-- Grid Category Start -->
    <section class="grid-category">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="box-title no-border">
              <div class="inner">
                <h3 class="section-title" style="margin-left: 37%;padding-bottom: 2rem;"><span>Browse by</span> Category
                </h3>
              </div>
            </div>
          </div>
          <div id="hov" class="col-lg-2 col-md-4 col-xs-12 f-category i-category wow fadeIn" data-wow-delay="0s">
            <a href="../show/mainshow.php?page=book">
              <div class="icon">
                <img src="https://img.icons8.com/pastel-glyph/64/000000/books.png" />
              </div>
              <h6>Books</h6>

            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12 f-category i-category wow fadeIn" data-wow-delay="0.2s">
            <a href="../show/mainshow.php?page=cycles">
              <div class="icon">
                <img src="https://img.icons8.com/windows/64/000000/bicycle.png" />
              </div>
              <h6>Cycles</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12 f-category i-category wow fadeIn" data-wow-delay="0.4s">
            <a href="../show/mainshow.php?page=electronics">
              <div class="icon">
                <img src="https://img.icons8.com/windows/64/000000/iphone-x.png" />
              </div>
              <h6>Electronics</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12 f-category i-category wow fadeIn" data-wow-delay="0.6s">
            <a href="../show/mainshow.php?page=formals">
              <div class="icon">
                <img src="https://img.icons8.com/windows/64/000000/black-tie.png" />
              </div>
              <h6>Formals</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12 f-category i-category wow fadeIn" data-wow-delay="1.2s">
            <a href="../show/mainshow.php?page=room">
              <div class="icon">
                <img src="https://img.icons8.com/windows/64/000000/living-room.png" />
              </div>
              <h6>Room Decoration</h6>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-xs-12 f-category  i-category wow fadeIn" data-wow-delay="1.6s">
            <a href="../show/mainshow.php?page=fashion">
              <div class="icon">
                <img src="https://img.icons8.com/windows/64/000000/hair-dryer.png" />
              </div>
              <h6>Fashion & Beauty</h6>
            </a>
          </div>

        </div>
    </section>
    </div>
  </section>

  <!-- end of category -->



  <!-- LATEST PRODUCTS -->


  <section id="ltates-products">
    <div class="container latest-product-container">
      <div class="owl-carousel owl-theme">
        <div class="latest-product-image">
          <img src="images/product/img1.jpg" alt="">
        </div>
        <div class="latest-product-image">
          <img src="images/product/img2.jpg" alt="">
        </div>
        <div class="latest-product-image">
          <img src="images/product/img3.jpg" alt="">
        </div>
        <div class="latest-product-image">
          <img src="images/product/img4.jpg" alt="">
        </div>
        <div class="latest-product-image">
          <img src="images/product/img5.jpg" alt="">
        </div>
        <div class="latest-product-image">
          <img src="images/product/img6.jpg" alt="">
        </div>
        <div class="latest-product-image">
          <img src="images/product/img7.jpg" alt="">
        </div>
      </div>

    </div>


  </section>

  <!-- end of latest product -->



  <!-- HOW TO POST ADD -->
  <section id="procedure">

    <div class="container procedure-container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="procedure-heading">
            <h1 class="section-title">How It Works?</h1>
            <h4 class="sub-title">Discover & Buy top-rated local stuffs</h4>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="works-item">
            <div class="icon-box">
              <img src="https://img.icons8.com/fluent/96/000000/create-new.png" />
            </div>
            <p>
              <h4>Create an Account</h4>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="works-item">
            <div class="icon-box">
              <img src="https://img.icons8.com/color/96/000000/open-in-window.png" />
            </div>
            <p>
              <h4>Post Free Ad</h4>
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="works-item">
            <div class="icon-box">
              <img src="https://img.icons8.com/color/96/000000/ok--v1.png" />
            </div>
            <p>
              <h4>Deal Done</h4>
            </p>
          </div>
        </div>
        <hr class="works-line">
      </div>

    </div>
  </section>

  <!-- end of how to post add -->


  <!-- FOOTER -->
  <footer>

   <<?php include 'includes/footer.php' ; ?>
  </footer>

  <!-- FEEDBACKS -->
 




  <!-- <script src="js/jquery.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- jquery cdn -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- owl-carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- my-js -->
  <script src="index.js"></script>




  <!-- javascript to change login & logout -->
  <script>
    $(document).ready(function() {

      var check = <?php echo $_check; ?>
     
      if (check) {

        $("#login_logout").html('<a  class="nav-link " href="../login/logout.php"><i class="fa fa-fw fa-user"></i> LogOut</a>');
        $("#tog_Register").html('<a class="nav-link " href="../seller_dashboard/seller_dash.php?seller_id=<?php echo $user_id ?>"><i class="fa fa-pencil"></i>My Profile</a>');
        

        
        $("#post_add_btn").on('click', function() {
          $("#post_add").attr("href", "../add_product/controller.php");

        });
      
      }



    });
  </script>



</body>

</html>


<?php
