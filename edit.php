<?php
include 'db.php';

$id = $_GET['Id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE Id=$id");
$row = mysqli_fetch_assoc($result);

// Update logic
if (isset($_POST['update'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $course = $_POST['Course'];

    mysqli_query($conn, "UPDATE students SET 
        Name='$name', 
        Email='$email', 
        Course='$course' 
        WHERE Id=$id"
    );

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef2f5;
        }
        .form-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 18px rgba(0,0,0,0.1);
            margin-top: 60px;
        }
        h2 {
            color: #0d6efd;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="form-box">
                <h2>Edit Student</h2>

                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="Name" value="<?= $row['Name']; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="Email" value="<?= $row['Email']; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" name="Course" value="<?= $row['Course']; ?>" class="form-control" required>
                    </div>

                    <button type="submit" name="update" class="btn btn-primary w-100">Update Student</button>

                    <a href="index.php" class="btn btn-secondary w-100 mt-3">Cancel</a>

                </form>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
