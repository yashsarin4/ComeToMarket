

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
   $sql = "SELECT * FROM product WHERE category_id=:category_id AND availability=1 LIMIT $limits ";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([':category_id' => $cat_id]);

   // $result = $pdo->query($sql);
   return $stmt;
}

function lowquery($limits, $cat_id)
{
   global $pdo;
   $sql = "SELECT * FROM product WHERE category_id=:category_id AND availability=1 ORDER BY price LIMIT $limits ";

   $stmt = $pdo->prepare($sql);
   $stmt->execute([':category_id' => $cat_id]);

   // $result = $pdo->query($sql);
   return $stmt;
}

function highquery($limits, $cat_id)
{
   global $pdo;
   $sql = "SELECT * FROM product WHERE category_id=:category_id AND availability=1 ORDER BY price DESC LIMIT $limits ";

  
   $stmt = $pdo->prepare($sql);
   $stmt->execute([':category_id' => $cat_id]);

   // $result = $pdo->query($sql);
   return $stmt;
}


function search($limits, $key)
{
   global $pdo;
   $sql = "SELECT * FROM product WHERE description LIKE :key OR brand LIKE :key OR price LIKE :key AND availability=1 ORDER BY product_id LIMIT $limits ";

  
   $stmt = $pdo->prepare($sql);
   $stmt->execute([':key' => '%'.$key.'%']);

   // $result = $pdo->query($sql);
   return $stmt;
}

?>