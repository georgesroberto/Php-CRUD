<?php

include '../components/head.php';
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_POST['client_id'];
    $client_name = $_POST['client_name'];
    $Contact = $_POST['Contact'];
    $email = $_POST['email'];
    $location = $_POST['location'];

    $sql = "UPDATE clients SET client_name='$client_name', Contact='$Contact', email='$email', location='$location'
            WHERE client_id='$client_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Client updated successfully";
    } else {
        echo "Error updating client: " . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="update_client.php">
    Client ID (to update): <input type="text" name="client_id"><br>
    New Client Name: <input type="text" name="client_name"><br>
    New Contact: <input type="text" name="Contact"><br>
    New Email: <input type="text" name="email"><br>
    New Location: <input type="text" name="location"><br>
    <input type="submit" value="Update Client">
</form>


</main>

<?php

include '../components/footer.php';

?>