

<?php

$user = 'root';
$pass = 'root';
$dbname = 'vicinage_sale3';
$host = 'localhost';
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
//connection
$pdo = new PDO($dsn, $user, $pass);




// to fetch product list from selected table

function myquery($limits, $cat_id)
{
   global $pdo;
   $sql = "SELECT * FROM product WHERE category_id=:category_id LIMIT $limits";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([':category_id' => $cat_id]);

   // $result = $pdo->query($sql);
   return $stmt;
}

?>