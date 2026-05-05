<?php
require "config/db.php";

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=products.csv");

$output = fopen("php://output","w");

fputcsv($output,["Name","Qty","Price","Category"]);

$data = $conn->query("SELECT * FROM products")->fetchAll();

foreach($data as $row){
fputcsv($output,[$row['name'],$row['quantity'],$row['price'],$row['category']]);
}

fclose($output);
?>
