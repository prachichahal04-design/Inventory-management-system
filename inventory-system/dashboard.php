<?php
session_start();
if(!isset($_SESSION['user'])){
header("Location: login.php");
}
require "config/db.php";

$total = $conn->query("SELECT COUNT(*) FROM products")->fetchColumn();
?>

<link rel="stylesheet" href="style.css">

<div class="sidebar">
<h2>InventorySys</h2>

<a href="dashboard.php">Dashboard</a>
<a href="add.php">Add Product</a>
<a href="logout.php">Logout</a>
</div>

<div class="main">

<div class="topbar">
<h1>Welcome Admin 👋</h1>
<p>Modern Inventory Management System</p>
</div>

<div class="cards">

<div class="card">
<h3>Total Products</h3>
<p><?= $total ?></p>
</div>

<div class="card">
<h3>Status</h3>
<p>Active</p>
</div>

<div class="card">
<h3>System</h3>
<p>Secure</p>
</div>

</div>

<div id="data"></div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function load(){
$.ajax({
url:"fetch.php",
success:function(data){
$("#data").html(data);
}
});
}
load();
</script>
