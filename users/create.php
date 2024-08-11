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

    $sql = "INSERT INTO users (user_id, user_name, password, Contact, email, date_of_birth, location)
            VALUES ('$user_id', '$user_name', '$password', '$Contact', '$email', '$date_of_birth', '$location')";

    if ($conn->query($sql) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="create_user.php">
    User ID: <input type="text" name="user_id"><br>
    User Name: <input type="text" name="user_name"><br>
    Password: <input type="password" name="password"><br>
    Contact: <input type="text" name="Contact"><br>
    Email: <input type="email" name="email"><br>
    Date of Birth: <input type="date" name="date_of_birth"><br>
    Location: <input type="text" name="location"><br>
    <input type="submit" value="Create User">
</form>



</main>

<?php

include '../components/footer.php';

?>