<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* G<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'title' is set
if (isset($_GET['title'])) {
    $title = $_GET['title'];

    // Prepare and execute delete statement
    $stmt = $conn->prepare("DELETE FROM books WHERE title = ?");
    $stmt->bind_param("s", $title);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "<p>Book deleted successfully</p>";
        } else {
            echo "<p>No book found with title: " . htmlspecialchars($title) . "</p>";
        }
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "<p>No title provided for deletion.</p>";
}

$conn->close();
?>

<a href="index.html" class="btn btn-primary">Back to Book List</a>
ray background */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40; /* Dark footer */
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="m-0">Smart Art and Design Studio</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-nav">
                <a class="nav-link text-white" href="index.html">Book List</a>
                <a class="nav-link text-white" href="add.html">Add New Book</a>
                <a class="nav-link text-white" href="update.html">Update Book Details</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">Delete a Book</h2>
        <form action="admin.php" method="post" class="border p-4 rounded bg-white">
            <div class="form-group">
                <label for="title">Book Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter book title to delete" required>
            </div>
            <button type="submit" name="action" value="delete" class="btn btn-danger">Delete Book</button>
        </form>
    </div>

    <footer class="footer">
        &copy; 2024 Smart Art and Design Studio. All rights reserved.
    </footer>

    <!-- Bootstrap JS and dependencies (Optional for Bootstrap functionalities) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
