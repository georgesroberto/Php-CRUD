<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Book</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        background-color: #f8f9fa;
      }
      .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #343a40;
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
          <a href="index.php" class="nav-link text-white">Home</a>
          <a class="nav-link text-white" href="add.php">Add New Book</a>
          <a class="nav-link text-white" href="update.php"
            >Update Book Details</a
          >
          <a class="nav-link text-white" href="delete.php">Delete Book</a>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <h2 class="mb-4">Add a New Book</h2>
      <form
        action="admin.php"
        method="post"
        class="border p-4 rounded bg-white"
      >
        <div class="form-group">
          <label for="title">Title</label>
          <input
            type="text"
            name="title"
            id="title"
            class="form-control"
            placeholder="Enter book title"
            required
          />
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input
            type="text"
            name="author"
            id="author"
            class="form-control"
            placeholder="Enter author name"
          />
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input
            type="text"
            name="price"
            id="price"
            class="form-control"
            placeholder="Enter book price"
          />
        </div>
        <div class="form-group">
          <label for="published_date">Published Date</label>
          <input
            type="date"
            name="published_date"
            id="published_date"
            class="form-control"
          />
        </div>
        <button type="submit" name="action" value="add" class="btn btn-primary">
          Add Book
        </button>
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
