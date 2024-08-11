<?php

include '../components/head.php';
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cp_id = $_POST['cp_id'];

    $sql = "DELETE FROM copyrights WHERE cp_id='$cp_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Copyright deleted successfully";
    } else {
        echo "Error deleting copyright: " . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="delete_copyright.php">
    Copyright ID (to delete): <input type="text" name="cp_id"><br>
    <input type="submit" value="Delete Copyright">
</form>


</main>

<?php

include '../components/footer.php';

?>