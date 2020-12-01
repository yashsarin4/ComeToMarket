<?php
include 'connection.php';

$limits = $_POST['limits'];
$cat_id = $_POST['cat_id'];

$result = myquery($limits, $cat_id);
if ($result->rowCount() > 0) {   //start of if 

  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $price = $row['price'];
    $description = $row['description'];
    $image1 = $row['image1'];
    $prod_id= $row['product_id'];


?>



    <div class="col-md-6 col-lg-4">
      <div class="product-description">
        <a href="../description/descc.php?product_id=<?php echo $prod_id ?>"><img class="product-img" src="images/<?php echo $image1; ?> " alt="" width="330px">
          <div class="product-price" style="color: red;">
            <h4>price: <?php echo $price; ?></h4>
          </div>
          <div class="product-info">
            <p class="card-text" style="color: red;"><?php echo $description; ?>
            </p>

          </div>
        </a>
      </div>
    </div>



<?php


  }  //end of while loop
}  //end of if
else {
  echo ("<h1 style='color: green;'>Sorry No product to show till now..  😅 </h1>");
}
?>