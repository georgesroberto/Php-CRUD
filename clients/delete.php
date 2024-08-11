<?php

include '../components/head.php';
include '../db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_POST['client_id'];

    $sql = "DELETE FROM clients WHERE client_id='$client_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Client deleted successfully";
    } else {
        echo "Error deleting client: " . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="delete_client.php">
    Client ID (to delete): <input type="text" name="client_id"><br>
    <input type="submit" value="Delete Client">
</form>


</main>

<?php

include '../components/footer.php';

?>