<?php 
require_once "pdo.php";
session_start();

// check user, already a seller or not

$sql_id = "SELECT user_id FROM user WHERE email=:email";
$id_stmt = $pdo->prepare($sql_id);
$id_stmt->execute(array(
  ':email' => $_SESSION['email']));
$row_id=$id_stmt->fetch(PDO::FETCH_ASSOC);
$id = $row_id['user_id'];



$sql_id = "SELECT * FROM user WHERE user_id=:user_id";
$id_stmt = $pdo->prepare($sql_id);
$id_stmt->execute(array(
  ':user_id' => $row_id['user_id']));
$row_id=$id_stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['phone']=$row_id['ph_no'];



if(  isset($_SESSION['phone']))
{  
    header("Location: add_new_product.php");
    return;
}
else{  
    header("Location: seller.php");
    return;
}



 ?>