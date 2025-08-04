<?php
echo "<style>
    body { font-family: 'Segoe UI', sans-serif; background: linear-gradient(to right, #d3cce3, #e9e4f0); padding: 40px; }
    h2 { text-align: center; font-size: 28px; color: #333; }
    table { width: 100%; border-collapse: collapse; background: white; box-shadow: 0 10px 20px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; }
    th, td { padding: 14px 20px; border-bottom: 1px solid #eee; }
    th { background-color: #28a745; color: white; }
    tr:nth-child(even) { background-color: #f9f9f9; }
    tr:hover { background-color: #e8f5e9; }
    a { color: #dc3545; font-weight: bold; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .back { display: block; text-align: center; margin-top: 20px; color: #28a745; font-weight: bold; }
</style>";
$conn = new mysqli("localhost", "root", "", "product_db");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$result = $conn->query("SELECT * FROM buyers");
echo "<h2>📋 Buyer List</h2><table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Action</th></tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td><a href='delete_buyer.php?id={$row['id']}' onclick=\"return confirm('Delete this buyer?')\">❌ Delete</a></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6' style='text-align:center;'>No Buyers Found</td></tr>";
}
echo "</table><a class='back' href='add_buyer.html'>➕ Add New Buyer</a>";
$conn->close();
?>