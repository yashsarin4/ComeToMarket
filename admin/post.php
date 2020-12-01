<?php 
try {
    $pdo = new PDO('mysql:host=localhost;dbname=vicinage_sale3', 
    'root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch (Exception $ex ) { 
    echo("Internal error, please contact support");
    error_log("pdo.php, SQL error=".$ex->getMessage());
    return;
 }


?>
<?php
// $user_id = $_GET['seller_id'];

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





<!-- ************************************************************************************** -->


<div class="col-md-10 content">
    <div class="panel panel-default">
        <div class="panel-heading">
            Posted Adds
        </div>
        <div class="panel-body">
            <!-- ****************************************************************** -->


            <?php

            // if (isset($_POST['see_adds'])) {
            ?>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-md-offset-1">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $result = myquery(3, 1);
                                // if ($result->rowCount() > 0) {   //start of if 
                                //     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {    //start of while
                                //         $price = $row['price'];
                                //         $description = $row['description'];
                                //         $image1 = $row['image1'];

                                        $query = "SELECT * FROM product WHERE product.user_id= '$user_id' ";
                                        foreach ($pdo->query($query) as $row) {
                                            $price = $row['price'];
                                            $description = $row['description'];
                                            $image1 = $row['image1'];


                                ?>



                                        <tr>
                                            <td class="col-sm-8 col-md-6">
                                                <div class="media">
                                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../add_product/<?php echo $row['image1']; ?> " style="width: 100px; height: 100px;"> </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><a href="#"><?php echo $row['product_name']; ?></a></h4>
                                                        <h5 class="media-heading"> by <a href="#"><?php echo $row['brand']; ?></a></h5>
                                                        <!-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> -->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                                <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                                            </td>
                                            <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $row['price']; ?></strong></strong></td>
                                            <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $row['price']; ?></strong></td>
                                            <!-- <td class="col-sm-1 col-md-1">
                                                <form action="" method="post">
                                                    <button type="submit" class="btn btn-warning" name="edit">
                                                        <span class="glyphicon glyphicon-remove"></span> Edit
                                                    </button>
                                            </td>
                                            <td class="col-sm-1 col-md-1">
                                                <form action="" method="post">
                                                    <button type="submit" class="btn btn-danger" name="del">
                                                        <span class="glyphicon glyphicon-remove"></span> Remove
                                                    </button>
                                            </td> -->
                                        </tr>

                                <?php

                                    // }
                                 }
                                ?>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <?php
            // }





            ?>





            <!-- ************************************************************************* -->
        </div>
    </div>
</div>