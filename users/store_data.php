<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "kapetann";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO payment_form (name_on_card, card_number, expiry_date, cvv, billing_address, country, state, city, zip_code, captcha, date_submitted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
$stmt->bind_param("ssssssssss", $nameOnCard, $cardNumber, $expiryDate, $cvv, $billingAddress, $country, $state, $city, $zipCode, $captcha);

// Set parameters
$nameOnCard = $_POST['nameOnCard'];
$cardNumber = $_POST['cardNumber'];
$expiryDate = $_POST['expiryDate'];
$cvv = $_POST['cvv'];
$billingAddress = $_POST['billingAddress'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$zipCode = $_POST['zipCode'];
$captcha = $_POST['captcha'];

// Execute SQL statement
if ($stmt->execute()) {
    echo "Form data inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
