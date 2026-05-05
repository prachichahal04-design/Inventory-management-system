<?php
require "config/db.php";

$data = $conn->query("SELECT * FROM products")->fetchAll();

echo "<table>
<tr>
<th>Name</th>
<th>Qty</th>
<th>Price</th>
<th>Category</th>
<th>Action</th>
</tr>";

foreach($data as $p){

echo "<tr>
<td>{$p['name']}</td>
<td>{$p['quantity']}</td>
<td>{$p['price']}</td>
<td>{$p['category']}</td>
<td>
<a href='edit.php?id={$p['id']}'>Edit</a>
<a href='delete.php?id={$p['id']}'>Delete</a>
</td>
</tr>";
}

echo "</table>";
?>
