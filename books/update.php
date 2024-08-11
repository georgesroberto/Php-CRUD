<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Gray background */
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
                <a class="nav-link text-white" href="add.html">Add New Book</a>
                <a class="nav-link text-white" href="update.html">Update Book Details</a>
                <a class="nav-link text-white" href="delete.html">Delete Book</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">Update Book Details</h2>
        <form action="admin.php" method="post" class="border p-4 rounded bg-white">
            <?php
            $book_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

            if ($book_id > 0) {
                // Database connection
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

                // Fetch book details
                $sql = "SELECT title, author, price, published_date FROM books WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $book_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $book = $result->fetch_assoc();
                    $title = htmlspecialchars($book['title']);
                    $author = htmlspecialchars($book['author']);
                    $price = htmlspecialchars($book['price']);
                    $published_date = htmlspecialchars($book['published_date']);
                } else {
                    echo "<p class='text-danger'>No book found with ID $book_id</p>";
                }

                $conn->close();
            }
            ?>
            <input type="hidden" name="id" value="<?php echo $book_id; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter new book title" value="<?php echo isset($title) ? $title : ''; ?>">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" placeholder="Enter new author name" value="<?php echo isset($author) ? $author : ''; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Enter new book price" value="<?php echo isset($price) ? $price : ''; ?>">
            </div>
            <div class="form-group">
                <label for="published_date">Published Date</label>
                <input type="date" name="published_date" id="published_date" class="form-control" value="<?php echo isset($published_date) ? $published_date : ''; ?>">
            </div>
            <button type="submit" name="action" value="update" class="btn btn-primary">Update Book</button>
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
