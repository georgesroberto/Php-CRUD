<?php

include '../components/head.php';
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];

    $sql = "DELETE FROM users WHERE user_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="delete_user.php">
    User ID (to delete): <input type="text" name="user_id"><br>
    <input type="submit" value="Delete User">
</form>


</main>

<?php

include '../components/footer.php';

?>