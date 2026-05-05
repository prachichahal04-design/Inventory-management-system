<?php
session_start();
require "config/db.php";

$message = "";

if(isset($_POST['add'])){

    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    try {
        $stmt = $conn->prepare("INSERT INTO products (name, quantity, price, category) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $quantity, $price, $category]);

        header("Location: dashboard.php");
        exit();

    } catch(PDOException $e){
        $message = $e->getMessage();
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="main">
<div class="topbar"><h2>Add Product</h2></div>

<?php if($message){ echo "<p>$message</p>"; } ?>

<form method="POST">
<input type="text" name="name" placeholder="Product Name" required>
<input type="number" name="quantity" placeholder="Quantity" required>
<input type="number" step="0.01" name="price" placeholder="Price" required>

<select name="category" required>
<option value="Electronics">Electronics</option>
<option value="Clothing">Clothing</option>
<option value="Furniture">Furniture</option>
</select>

<button type="submit" name="add">Save Product</button>
</form>
</div>
