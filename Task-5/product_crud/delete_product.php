<?php
$conn = new mysqli("localhost", "root", "", "product_db");
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    echo "✅ Product deleted successfully!<br><a href='list_products.php'>Go Back</a>";
} else {
    echo "❌ Error: " . $conn->error;
}
$conn->close();
?>