<?php
require "config/db.php";

$id = $_GET['id'];

$product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch();

if(isset($_POST['update'])) {

$conn->prepare("UPDATE products SET name=?, quantity=?, price=?, category=? WHERE id=?")
->execute([$_POST['name'],$_POST['quantity'],$_POST['price'],$_POST['category'],$id]);

header("Location: dashboard.php");
}
?>

<form method="POST">
<input name="name" value="<?= $product['name'] ?>"><br>
<input name="quantity" value="<?= $product['quantity'] ?>"><br>
<input name="price" value="<?= $product['price'] ?>"><br>
<input name="category" value="<?= $product['category'] ?>"><br>

<button name="update">Update</button>
</form>
