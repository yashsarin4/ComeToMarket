
<?php
require_once "../../../description/pdo.php";
$_check = 0;
session_start();
if (isset($_SESSION['email'])) {
    //echo $_SESSION['email'];
    $_check = 1;
    $user_id = $_SESSION['user_id'];
    //echo "<h1>" . $user_id . "</h1>";
}




?>




<?php


if (isset($_POST['checkout']) && isset($_COOKIE['item']) && is_array($_COOKIE['item'])) {
    if (isset($_SESSION['user_id'])) {
        // echo "user";
        // print_r($_SESSION['prod_id']);
        // ***************************************get last ordered_id
        $last = 1;
        $query = "SELECT order_id FROM ordered WHERE order_id=(SELECT MAX(order_id) FROM ordered)";
        foreach ($pdo->query($query) as $row) {
            $last = $row['order_id'];
            // echo "<h1>".$last."</h1>";
            $last = $last + 1;
        }
        // *******************************************************


        // ***********************************insert into ordered table and payment table
        foreach ($_SESSION['prod_id'] as $val) {
            //echo "$val";
            $sql = "INSERT INTO ordered (user_id,product_id, payment_status,date)
            VALUES (:user_id,:product_id, :payment_status,:date)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':user_id' => $_SESSION['user_id'],
                ':product_id' => $val,
                ':payment_status' => '1',
                ':date' => '2020-11-23'
            ));


            // **************************
            $stmt = $pdo->prepare(" UPDATE `product` SET `availability` = '0' WHERE `product`.`product_id` = '$val' ");
            $stmt->execute();


            
            


            // ***********************payment table

            $sql = "INSERT INTO payment (payment_type,payment_status,user_id,order_id)
                VALUES (:payment_type, :payment_status,:user_id,:order_id)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':user_id' => $_SESSION['user_id'],
                ':payment_type' => 'upi',
                ':payment_status' => '1',
                ':order_id' => $last
            ));

            $last = $last + 1;
        }
        // *****************************************************************


        // ***************************************** uset cookies
        if (isset($_COOKIE['item'])) {
            unset($_COOKIE['item']);
            setcookie("item", '', time() - 1800);
            // *********************************************
        }
        // header( 'Location: ../new_home/index.php' ) ;
        // return;
    } else {
        // echo "no user";
        header('Location: ../../login/login_page.php');
        return;
    }
}

// *******************************redirect to home

if (isset($_POST['home']) || isset($_POST['cont_shop'])) {

    header('Location: ../../new_home/index.php');
    return;
}

// ***********************************remove item

if (isset($_COOKIE['item']) && is_array($_COOKIE['item'])) {

    foreach ($_COOKIE['item'] as  $name => $value) {

        if (isset($_POST["del$name"])) {
            // echo "$name";
            setcookie("item[$name]", "", time() - 1800);
?>
            <script type="text/javascript">
                // window.location.href=window.Location.href;
                location.reload()
            </script>

<?php

        }
    }
}



?>







<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->





<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
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
                    $d = 0;
                    $total = 0;
                    if (isset($_COOKIE['item']) && is_array($_COOKIE['item'])) {
                        //echo "done";

                        $a = array();
                        foreach ($_COOKIE['item'] as  $name => $value) {
                            $value1 = explode("__", $value);
                            $price = $value1[3];
                            $product_name = $value1[2];
                            $brand = $value1[4];
                            $total = $total + $price;
                            array_push($a, "$value1[0]");
                            //echo $value1[0];
                            //  echo " ../add_product/<?php echo $value1[0]";
                    ?>

                            <tr>
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../add_product/<?php echo $value1[1]; ?> " style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#"><?php echo $product_name; ?></a></h4>
                                            <h5 class="media-heading"> by <a href="#"><?php echo $brand; ?></a></h5>
                                            <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $price; ?></strong></strong></td>
                                <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $price; ?></strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <form action="" method="post">
                                        <button type="submit" class="btn btn-danger" name="del<?php echo $name; ?>">
                                            <span class="glyphicon glyphicon-remove"></span> Remove
                                        </button>
                                </td>
                                </form>
                            </tr>




                            <!-- <img src="../add_product/<?php echo $value1[1]; ?> " alt=""> -->
                        <?php
                        }
                        $d = $d + 1;
                        $_SESSION['prod_id'] = $a;
                        ?>



                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td class="text-right">
                                <h5><strong><?php echo $total; ?></strong></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h5>Estimated shipping</h5>
                            </td>
                            <td class="text-right">
                                <h5><strong>$0.00</strong></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h3>Total</h3>
                            </td>
                            <td class="text-right">
                                <h3><strong><?php echo $total; ?></strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <form action="" method="post">
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td>
                                    <button type="submit" class="btn btn-default" name="cont_shop">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                                    </button></td>
                                <td>
                                    <button type="submit" class="btn btn-success" name="checkout">
                                        Checkout <span class="glyphicon glyphicon-play"></span>
                                    </button></td>
                            </form>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php


                    } else {
                        echo "No product added";
                        $d = $d + 1;



?>


    <form action="" method="post">
        <td> </td>
        <td> </td>
        <td> </td>
        <button type="submit" class="btn btn-default" name="home">
            <span class="glyphicon glyphicon-shopping-cart"></span> Home
        </button></td>

    </form>

<?php
                    }



?>


