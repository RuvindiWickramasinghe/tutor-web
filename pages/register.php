<?php

include'connectSign.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $inputRole = $_POST['role']
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $inputUsername);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        // Verify password
        if (password_verify($inputPassword, $hashedPassword)) {
            echo "Sign-in successful! Welcome, " . htmlspecialchars($inputUsername) . ".";
            // You can start a session here or redirect the user to another page.
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
}
?>