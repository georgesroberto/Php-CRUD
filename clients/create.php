<?php

include '../components/head.php';
include '../db_connect.php';
include 'head.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_POST['client_id'];
    $client_name = $_POST['client_name'];
    $Contact = $_POST['Contact'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $user_id = $_POST['user_id'];

    $sql = "UPDATE clients (client_id, client_name, Contact, email, location, user_id)
            VALUES ('$client_id', '$client_name', '$Contact', '$email', '$location', '$user_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Client Updated successfully";
        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<main>
<div class="container mt-5">
    <h2 class="text-center">Add new Clinet</h2>
    <form method="POST" action="create.php">
        <div class="form-group">
            Client ID: <input type="text" name="client_id" class="form-control" ><br>
        </div>
        <div class="form-group">
            Client Name: <input type="text" class="form-control" required name="client_name"><br>
        </div>
        <div class="form-group">
            Contact: <input type="text" class="form-control" required name="Contact"><br>
        </div>
        <div class="form-group">
            Email: <input type="text" class="form-control" required name="email"><br>
        </div>
        <div class="form-group">
            Location: <input type="text" class="form-control" required name="location"><br>
        </div>
        <div class="form-group">
            User ID: <input type="text" class="form-control" required name="user_id"><br>
        </div>
        <div class="form-group">
            <input type="submit"class="btn btn-primary" value="Update Client">
        </div>
    </form>
</div>

</main>

<?php

include '../components/footer.php';

?>