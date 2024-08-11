<?php
include 'head.php';
include '../db_connect.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_name='$user_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];
            echo "Login successful. Welcome, " . $row['user_name'];
            header('location: ../clients/');
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
}

$conn->close();
?>

<div class="container mt-5">
    <h2 class="text-center">Admin Login</h2>
    <form method="POST" action="login.php" class="mt-4">
        <div class="form-group">
            <label for="user_name">User Name:</label>
            <input type="text" class="form-control" id="user_name" name="user_name" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
</div>


<?php include '../components/footer.php'; ?>