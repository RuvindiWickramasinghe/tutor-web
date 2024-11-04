<<?php
// Include database connection
require_once 'connect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Prepare SQL query to fetch the user details based on username and role
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ? AND role = ?");
    $stmt->bind_param("ss", $username, $role);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userId, $hashedPassword);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $userId;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            echo "<p style='color:green;'>Sign-in successful! Welcome, $username.</p>";
            // Redirect or load the dashboard for the specific role
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<p style='color:red;'>Invalid password.</p>";
        }
    } else {
        echo "<p style='color:red;'>No account found with the provided username and role.</p>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
