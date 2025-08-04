<?php
echo "<style>
    body { font-family: 'Segoe UI', sans-serif; background: linear-gradient(to right, #FFDEE9, #B5FFFC); padding: 40px; }
    h2 { text-align: center; font-size: 30px; color: #333; margin-bottom: 30px; }
    table { width: 100%; border-collapse: collapse; background: white; box-shadow: 0 8px 16px rgba(0,0,0,0.1); border-radius: 10px; overflow: hidden; }
    th, td { padding: 14px 20px; text-align: left; font-size: 16px; }
    th { background-color: #007bff; color: white; font-weight: bold; }
    tr:nth-child(even) { background-color: #f9f9f9; }
    tr:hover { background-color: #e1f5fe; }
    a { color: #dc3545; text-decoration: none; font-weight: bold; }
    a:hover { text-decoration: underline; }
    .back { display: block; text-align: center; margin-top: 20px; font-weight: bold; color: #007bff; text-decoration: none; }
</style>";
$conn = new mysqli("localhost", "root", "", "product_db");
if ($conn->connect_error) { die("❌ Connection failed: " . $conn->connect_error); }
$result = $conn->query("SELECT * FROM products");
echo "<h2>📋 Product List</h2><table border='1'><tr><th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Quantity</th><th>Description</th><th>Action</th></tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['category']}</td>
                <td>₹ {$row['price']}</td>
                <td>{$row['quantity']}</td>
                <td>{$row['description']}</td>
                <td><a href='delete_product.php?id={$row['id']}'>❌ Delete</a></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='7' style='text-align:center;'>No Products Found</td></tr>";
}
echo "</table><a class='back' href='add_product.html'>➕ Add New Product</a>";
$conn->close();
?>