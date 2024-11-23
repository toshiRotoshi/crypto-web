<?php
include('config.php');

// Collect data from the form
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt password

// Check if the email already exists
$sql = "SELECT * FROM registration WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "User already exists!";
} else {
    // Insert user into the database
    $sql = "INSERT INTO registration (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password); // Use the correct variable $password
    $stmt->execute();

    if ($stmt->affected_rows > 0) { // Check if insert was successful
        // Redirect to profile page
        header("Location: /Crypto-Website/profile/profile/admin_dashboard.php");
        exit(); // Stop further script execution
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
