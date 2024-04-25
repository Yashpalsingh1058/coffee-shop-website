<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "kapetann";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are set and not empty
    $required_fields = ['name_on_card', 'card_number', 'expiry_date', 'cvv', 'billing_address', 'country', 'state', 'city', 'zip_code', 'captcha'];
    $errors = [];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            $errors[] = "Error: Please fill out " . str_replace('_', ' ', $field) . ".";
        }
    }

    // If there are no errors, proceed with database insertion
    if (empty($errors)) {
        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO payment_form (name_on_card, card_number, expiry_date, cvv, billing_address, country, state, city, zip_code, captcha, date_submitted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssssssssss", $nameOnCard, $cardNumber, $expiryDate, $cvv, $billingAddress, $country, $state, $city, $zipCode, $captcha);

        // Set parameters
        $nameOnCard = $_POST['name_on_card'];
        $cardNumber = $_POST['card_number'];
        $expiryDate = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];
        $billingAddress = $_POST['billing_address'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $zipCode = $_POST['zip_code'];
        $captcha = $_POST['captcha'];

        // Execute SQL statement
        if ($stmt->execute()) {
            header("Location: orderconfirmation.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        // Output all errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
} else {
    echo "Error: Form submission method not allowed.";
}

// Close connection
$conn->close();
?>
