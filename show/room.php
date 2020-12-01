
<?php 

include '../../show_products/includes/connection.php';
$cat_id=4;








 ?>



<!-- ********************************************************************* -->






<style>
    /* ******************************************************************** */








    .product-grid8{font-family:Poppins,sans-serif;position:relative;z-index:1}
.product-grid8 .product-image8{border:1px solid #e4e9ef;position:relative;transition:all .3s ease 0s}
.product-grid8:hover .product-image8{box-shadow:0 0 10px rgba(0,0,0,.15)}
.product-grid8 .product-image8 a{display:block}
.product-grid8 .product-image8 img{width:100%;height:auto}
.product-grid8 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid8:hover .pic-1{opacity:0}
.product-grid8 .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .5s ease-out 0s}
.product-grid8:hover .pic-2{opacity:1}
.product-grid8 .social{padding:0;margin:0;list-style:none;position:absolute;bottom:13px;right:13px;z-index:1}
.product-grid8 .social li{opacity:0;transform:translateY(3px);transition:all .5s ease 0s}
.product-grid8:hover .social li{margin:0 0 10px;opacity:1;transform:translateY(0)}
.product-grid8:hover .social li:nth-child(1){transition-delay:.1s}
.product-grid8:hover .social li:nth-child(2){transition-delay:.2s}
.product-grid8:hover .social li:nth-child(3){transition-delay:.4s}
.product-grid8 .social li a{color:grey;font-size:17px;line-height:40px;text-align:center;height:40px;width:40px;border:1px solid grey;display:block;transition:all .5s ease-in-out}
.product-grid8 .social li a:hover{color:#000;border-color:#000}
.product-grid8 .product-discount-label{display:block;padding:4px 15px 4px 30px;color:#fff;background-color:#0081c2;position:absolute;top:10px;right:0;-webkit-clip-path:polygon(34% 0,100% 0,100% 100%,0 100%);clip-path:polygon(34% 0,100% 0,100% 100%,0 100%)}
.product-grid8 .product-content{padding:20px 0 0}
.product-grid8 .price{color:#000;font-size:19px;font-weight:400;margin-bottom:8px;text-align:left;transition:all .3s}
.product-grid8 .price span{color:#999;font-size:14px;font-weight:500;text-decoration:line-through;margin-left:7px;display:inline-block}
.product-grid8 .product-shipping{color:rgba(0,0,0,.5);font-size:15px;padding-left:35px;margin:0 0 15px;display:block;position:relative}
.product-grid8 .product-shipping:before{content:'';height:1px;width:25px;background-color:rgba(0,0,0,.5);transform:translateY(-50%);position:absolute;top:50%;left:0}
.product-grid8 .title{font-size:16px;font-weight:400;text-transform:capitalize;margin:0 0 30px;transition:all .3s ease 0s}
.product-grid8 .title a{color:#000}
.product-grid8 .title a:hover{color:#0081c2}
.product-grid8 .all-deals{display:block;color:#fff;background-color:#2e353b;font-size:15px;letter-spacing:1px;text-align:center;text-transform:uppercase;padding:22px 5px;transition:all .5s ease 0s}
.product-grid8 .all-deals .icon{margin-left:7px}
.product-grid8 .all-deals:hover{background-color:#0081c2}
@media only screen and (max-width:990px){.product-grid8{margin-bottom:30px}
}
img{height: 300px !important;width: 235px !important;}






/* ****************************search css************************** */

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
  padding-bottom: 25px;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}



/* *******************************button css************************ */






  
.containerbtn .btnselect {
    background-color: #ff8300;
    border:5px solid #fff;
    border-radius: 10px;
    width: 33.3%;
    color:#fff
}
.containerbtn .btnselect:hover {
    background-color: #0098d0;
}





    /* ************************************************************************ */
</style>







<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<!-- <link rel="stylesheet" href="showcss/show.css"> -->









<div id="wrapper" class="container-fluid">
    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Posted Adds
            </div>
            <div class="panel-body">

                <!-- ****************************************************************** -->
                <div class="container" style=" margin-right: 200px;margin-left: 100px;">
                    <h3 class="h3">shopping Demo </h3>


                    <!-- ****************************search bar*********************************** -->
                    <form action="" method="post">
                    <div class="wrap">
                        <div class="search">
                           
                                <input name="searchkey" type="text" class="searchTerm" placeholder="What are you looking for?" required>
                                    <button name="search" type="submit" class="searchButton">
                                            <i class="fa fa-search"></i>
                                    </button>
                            
                        </div>
                    </div>
                    </form>
                    <!-- ******************************************buttons********************************** -->


                    <form action="" method="post">

                        <div class='containerbtn'>
                            <div class="btn-group btn-group-justified col-sm-12 m-2">
                                <!-- <a href="index.php?pricedp" class="btn btnselect btn-warning">Lowest price</a>
    <a href="index.php?pricepd" class="btn btnselect btn-warning ">Highest price</a>
    <a href="index.php?New" class="btn btnselect btn-warning button ">New</a> -->
                                <button type="submit" class="btn btnselect btn-warning" name="low">Lowest price </button>
                                <button type="submit" class="btn btnselect btn-warning" name="high">Highest price </button>
                                <button type="submit" class="btn btnselect btn-warning" name="all">All Products </button>
                            </div>
                        </div>

                    </form>
                    <!-- ************************************************************************* -->

                    <?php

if (isset($_POST['search'])) {
    $key=$_POST['searchkey'];
    ?>


        <div class="row">

            <!-- ********************************************************php function********************* -->

            <?php

            $result = search(12, $key);
            if ($result->rowCount() > 0) {   //start of if 
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {    //start of while
                    $price = $row['price'];
                    $description = $row['description'];
                    $image1 = $row['image1'];
                    $image2 = $row['image2'];
                    $prod_id = $row['product_id'];
                    $prod_name=$row['product_name'];

            ?>







                    <!-- ************************************************************************** -->
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid8">
                            <div class="product-image8">
                                <a href="description/description.php?product_id=<?php echo $prod_id ?>">
                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-1.jpg">
                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-2.jpg">

                                    <!-- ********************database images**************** -->
                                    <!-- <img style="" class="pic-1" src="../../add_product/<?php echo $image1; ?>">
<img class="pic-2" src="../../add_product/<?php echo $image2; ?>"> -->
                                    <!-- ******************************************************** -->

                                </a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                                <span class="product-discount-label">-20%</span>
                            </div>
                            <div class="product-content">
                                <div class="price">₹ <?php echo $price; ?>
                                    <span>₹ 10.00</span>
                                </div>
                                <span class="product-shipping">Free Shipping</span>
                                <h3 class="title"><a href="#"><?php echo $prod_name ; ?></a></h3>
                                <a class="all-deals" href="description/description.php?product_id=<?php echo $prod_id ?>">See all details <i class="fa fa-angle-right icon"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- ***********************end of div************************************************************** -->
            <?php
                } //end of while
            } //end of if
            ?>

        </div>

    <?php
    } 
                    else if (isset($_POST['low'])) {
                    ?>


                        <div class="row">

                            <!-- ********************************************************php function********************* -->

                            <?php

                            $result = lowquery(12, $cat_id);
                            if ($result->rowCount() > 0) {   //start of if 
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {    //start of while
                                    $price = $row['price'];
                                    $description = $row['description'];
                                    $image1 = $row['image1'];
                                    $image2 = $row['image2'];
                                    $prod_id = $row['product_id'];
                                    $prod_name=$row['product_name'];

                            ?>







                                    <!-- ************************************************************************** -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="product-grid8">
                                            <div class="product-image8">
                                                <a href="description/description.php?product_id=<?php echo $prod_id ?>">
                                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-1.jpg">
                                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-2.jpg">

                                                    <!-- ********************database images**************** -->
                                                    <!-- <img style="" class="pic-1" src="../../add_product/<?php echo $image1; ?>">
                <img class="pic-2" src="../../add_product/<?php echo $image2; ?>"> -->
                                                    <!-- ******************************************************** -->

                                                </a>
                                                <ul class="social">
                                                    <li><a href="" class="fa fa-search"></a></li>
                                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                                </ul>
                                                <span class="product-discount-label">-20%</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="price">₹ <?php echo $price; ?>
                                                    <span>₹ 10.00</span>
                                                </div>
                                                <span class="product-shipping">Free Shipping</span>
                                                <h3 class="title"><a href="#"><?php echo $prod_name ; ?></a></h3>
                                                <a class="all-deals" href="description/description.php?product_id=<?php echo $prod_id ?>">See all details <i class="fa fa-angle-right icon"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ***********************end of div************************************************************** -->
                            <?php
                                } //end of while
                            } //end of if
                            ?>

                        </div>

                    <?php
                    } //end of if
                    elseif (isset($_POST['high'])) {
                    ?>

                        <div class="row">

                            <!-- ********************************************************php function********************* -->

                            <?php

                            $result = highquery(12, $cat_id);
                            if ($result->rowCount() > 0) {   //start of if 
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {    //start of while
                                    $price = $row['price'];
                                    $description = $row['description'];
                                    $image1 = $row['image1'];
                                    $image2 = $row['image2'];
                                    $prod_id = $row['product_id'];
                                    $prod_name=$row['product_name'];



                            ?>







                                    <!-- ************************************************************************** -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="product-grid8">
                                            <div class="product-image8">
                                                <a href="description/description.php?product_id=<?php echo $prod_id ?>">
                                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-1.jpg">
                                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-2.jpg">

                                                    <!-- ********************database images**************** -->
                                                    <!-- <img style="" class="pic-1" src="../../add_product/<?php echo $image1; ?>">
                <img class="pic-2" src="../../add_product/<?php echo $image2; ?>"> -->
                                                    <!-- ******************************************************** -->

                                                </a>
                                                <ul class="social">
                                                    <li><a href="" class="fa fa-search"></a></li>
                                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                                </ul>
                                                <span class="product-discount-label">-20%</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="price">₹ <?php echo $price; ?>
                                                    <span>₹ 10.00</span>
                                                </div>
                                                <span class="product-shipping">Free Shipping</span>
                                                <h3 class="title"><a href="#"><?php echo $prod_name ; ?></a></h3>
                                                <a class="all-deals" href="description/description.php?product_id=<?php echo $prod_id ?>">See all details <i class="fa fa-angle-right icon"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ***********************end of div************************************************************** -->
                            <?php
                                } //end of while
                            } //end of if
                            ?>

                        </div>

                    <?php
                    } else {

                    ?>





                        <!-- ************************************************************ -->
                        <div class="row">

                            <!-- ********************************************************php function********************* -->

                            <?php

                            $result = myquery(12, $cat_id);
                            if ($result->rowCount() > 0) {   //start of if 
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {    //start of while
                                    $price = $row['price'];
                                    $description = $row['description'];
                                    $image1 = $row['image1'];
                                    $image2 = $row['image2'];
                                    $prod_id = $row['product_id'];
                                    $prod_name=$row['product_name'];



                            ?>







                                    <!-- ************************************************************************** -->
                                    <div class="col-md-3 col-sm-6">
                                        <div class="product-grid8">
                                            <div class="product-image8">
                                                <a href="description/description.php?product_id=<?php echo $prod_id ?>">
                                                    <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-1.jpg">
                                                    <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-2.jpg">

                                                    <!-- ********************database images**************** -->
                                                    <!-- <img style="" class="pic-1" src="../../add_product/<?php echo $image1; ?>">
                                        <img class="pic-2" src="../../add_product/<?php echo $image2; ?>"> -->
                                                    <!-- ******************************************************** -->

                                                </a>
                                                <ul class="social">
                                                    <li><a href="" class="fa fa-search"></a></li>
                                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                                </ul>
                                                <span class="product-discount-label">-20%</span>
                                            </div>
                                            <div class="product-content">
                                                <div class="price">₹ <?php echo $price; ?>
                                                    <span>₹ 10.00</span>
                                                </div>
                                                <span class="product-shipping">Free Shipping</span>
                                                <h3 class="title"><a href="#"><?php echo $prod_name ; ?></a></h3>
                                                <a class="all-deals" href="description/description.php?product_id=<?php echo $prod_id ?>">See all details <i class="fa fa-angle-right icon"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ***********************end of div************************************************************** -->
                            <?php
                                } //end of while
                            } //end of if
                            ?>

                        </div>

                    <?php
                    } //end of else
                    ?>

                </div>
            </div>
        </div>
    </div>
    <hr>


    <hr>
</div>