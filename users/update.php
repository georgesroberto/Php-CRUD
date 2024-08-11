<?php

include '../components/head.php';
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $Contact = $_POST['Contact'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];
    $location = $_POST['location'];

    $sql = "UPDATE users SET user_name='$user_name', password='$password', Contact='$Contact', email='$email', date_of_birth='$date_of_birth', location='$location'
            WHERE user_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully";
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

$conn->close();
?>


<form method="POST" action="update_user.php">
    User ID (to update): <input type="text" name="user_id"><br>
    New User Name: <input type="text" name="user_name"><br>
    New Password: <input type="password" name="password"><br>
    New Contact: <input type="text" name="Contact"><br>
    New Email: <input type="email" name="email"><br>
    New Date of Birth: <input type="date" name="date_of_birth"><br>
    New Location: <input type="text" name="location"><br>
    <input type="submit" value="Update User">
</form>



</main>

<?php

include '../components/footer.php';

?>