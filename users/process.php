<?php
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $user_name = trim($_POST['user_name']);
    $password = trim($_POST['password']);
    $Contact = trim($_POST['Contact']);
    $email = trim($_POST['email']);
    $date_of_birth = $_POST['date_of_birth'];
    $location = trim($_POST['location']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE user_name = ? OR email = ?");
    $stmt->bind_param("ss", $user_name, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username or email already taken.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hash the password

        $stmt = $conn->prepare("INSERT INTO users (user_name, password, Contact, email, date_of_birth, location) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $user_name, $hashed_password, $Contact, $email, $date_of_birth, $location);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>




