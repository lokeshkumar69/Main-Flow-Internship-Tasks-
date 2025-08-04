<?php
$conn = new mysqli("localhost", "root", "", "product_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = "INSERT INTO buyers (name, email, phone, address)
        VALUES ('$name', '$email', '$phone', '$address')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
    exit();
} else {
    echo "❌ Error: " . $conn->error;
}
$conn->close();
?>