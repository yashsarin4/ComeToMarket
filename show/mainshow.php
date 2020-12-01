<?php

$_check=0;
session_start() ;
if(isset($_SESSION['email']))
{
//echo $_SESSION['email'];
 $_check=1;
 $user_id = $_SESSION['user_id'];

}
$temp=1;







// ********************************count cart items********************


 ?>









<!-- ********************************************************************** -->
<style>
/* ************************************************************** */


body{background:#f9f9f9;}
#wrapper{padding:90px 15px;}
.navbar-expand-lg .navbar-nav.side-nav{flex-direction: column;}
.card{margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); }
.header-top{box-shadow: 0 3px 5px rgba(0,0,0,.1)}
.leftmenutrigger, .navbar-nav li a .shortmenu{display: none}
.card-title{ font-size: 28px}
@media(min-width:992px) {
#wrapper{padding: 90px 15px 15px 75px; }
.navbar-nav.side-nav:hover {left:0;}
.side-nav li a {padding: 20px}
.navbar-nav li a .shortmenu {float: right;display: block;opacity: 1}
.navbar-nav.side-nav:hover li a .shortmenu{opacity: 0}
.navbar-nav.side-nav{background: #585f66;box-shadow: 2px 1px 2px rgba(0,0,0,.1);position:fixed;top:56px;flex-direction: column!important;left:-140px;width:200px;overflow-y:auto;bottom:0;overflow-x:hidden;padding-bottom:40px}
}
.animate{-webkit-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;-ms-transition:all .2s ease-in-out;transition:all .2s ease-in-out}
.navbar-nav li a svg{font-size: 25px;float: left;margin: 0 10px 0 5px;}
.side-nav li { border-bottom: 1px solid #50575d;}






    /* ***************************************************************** */
</style>


<?php
        @$page =  $_GET['page'];
        if ($page != "") {
            if ($page == "book" || $_GET['page']=="book") {
                include('book.php');
            }
            if ($page == "electronics" || $_GET['page']=="electronics") {
                include('electronics.php');
            }
            if ($page == "cycles" || $_GET['page']=="cycles") {
                include('cycles.php');
            }
            if ($page == "room" || $_GET['page']=="room") {
                include('room.php');
            }
            // if ($page == "home") {
            //   include('../new_home/index.php');

          //}
        }else{
            // include('../new_home/index.php');

        }
        
if(isset($_POST['postadd']))
{
    if(isset($_SESSION['user_id'])){
        header( "Location: ../add_product/controller.php" ) ; 

    }else{
        header( "Location: ../login/login_page.php" ) ; 

    }
}
        
        
        
        
        ?>











<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark bg-dark">
      <!-- logo -->
      <a class="navbar-brand" href="#">VICINAGE SALE</a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="mainshow.php?page=home" title="Dashboard"><i class="fa fa-home"></i> Home <i class="fa fa-home shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mainshow.php?page=book" title="Cart"><i class="fa fa-book"></i> Books <i class="fa fa-book shortmenu animate"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mainshow.php?page=electronics" title="Comment"><i class="fa fa-mobile"></i> Electronics <i class="fa fa-mobile shortmenu animate"></i></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="mainshow.php?page=cycles" title="Comment"><i class="fa fa-bicycle"></i> Cycles <i class="fa fa-bicycle shortmenu animate"></i></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="mainshow.php?page=room" title="Comment"><i class="fa fa-bed"></i> Room Stuff <i class="fa fa-bed shortmenu animate"></i></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li id="profile" class="nav-item">
            <a class="nav-link" href=<?php if($_check){echo ' "'.'../admin/admin.php'.' " ';}else{echo ' "'.'../login/login_page.php'.' " ';}?>><i class="fas fa-user"></i> Profile</a>
          </li>
          <li id="login_logout" class="nav-item">
            <a class="nav-link" href="../login/login_page.php"><i class="fas fa-key"></i> LogIn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="description/cart.php"><i class="fa fa-shopping-cart"></i>Cart</a>
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
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



  <script>
   
   $(document).ready(function(){
     var msg= <?php echo $user_id; ?>;
     var check= <?php echo $_check;?>;
 //alert(check);




    if(check)
    {
      $("#login_logout").html('<a  class="nav-link " href="../login/logout.php"><i class="fa fa-fw fa-user"></i> LogOut</a>');

    }
 
   });
 </script>

  