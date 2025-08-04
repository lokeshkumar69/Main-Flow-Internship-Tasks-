<?php
$conn = new mysqli("localhost", "root", "", "product_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM buyers WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "✅ Buyer deleted successfully.<br><a href='list_buyers.php'>🔙 Back to Buyer List</a>";
    } else {
        echo "❌ Error deleting buyer: " . $conn->error;
    }
} else {
    echo "⚠️ Invalid request.";
}
$conn->close();
?>