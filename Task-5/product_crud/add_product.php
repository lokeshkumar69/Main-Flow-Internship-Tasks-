<?php
$conn = new mysqli("localhost", "root", "", "product_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$sql = "INSERT INTO products (name, category, price, quantity, description)
        VALUES ('$name', '$category', '$price', '$quantity', '$description')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
    exit();
} else {
    echo "❌ Error: " . $conn->error;
}
$conn->close();
?>