<?php
session_start();
include './config.php'; // Adjust path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['SignIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Use a prepared statement to fetch user details securely
        $sql = "SELECT * FROM registration WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Debugging: Display entered and stored passwords (remove in production)
            // echo "Entered Password: $password<br>";
            // echo "Stored Password Hash: {$row['password']}<br>";

            // Verify the password using password_verify()
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $row['email']; // Save email in session

                // Redirect to the profile page
                header("Location: /Crypto-Website/profile/profile/admin_dashboard.php");
                exit();
            } else {
                // Redirect back with an error message
                header("Location: /Crypto-Website/profile/profile/admin_dashboard.php");
                exit();
            }
        } else {
            echo "No user found with this email.";
        }

        $stmt->close();
    }
}

$conn->close();
?>
