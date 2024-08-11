<?php
include 'head.php'; 
?>

<div class="container mt-5">
    <h2 class="text-center">Register</h2>
    <form method="POST" action="process.php" class="mt-4">
        <div class="form-group">
            <label for="user_name">User Name:</label>
            <input type="text" class="form-control" id="user_name" name="user_name" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="Contact">Contact:</label>
            <input type="text" class="form-control" id="Contact" name="Contact">
        </div> 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
</div>

<?php
include '../components/footer.php'; 