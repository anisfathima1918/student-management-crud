<?php include ('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f4f6f9;
        }
        .container-box{
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
            margin-top: 40px;
        }
        table th{
            background:#0d6efd;
            color: #fff;
        }
        a.btn-add{
            float:right;
            margin-bottom: 15px;
        }
        .table td, .table th{
            vertical-align: middle;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="container-box">
        <h2 class="mb-4 text-primary">📘 Student List</h2>

        <a href="add.php" class="btn btn-success btn-add">+ Add Student</a>

        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result = mysqli_query($conn, "SELECT * FROM students");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['Id']}</td> 
                            <td>{$row['Name']}</td>
                            <td>{$row['Email']}</td>
                            <td>{$row['Course']}</td>
                            <td>
                                <a href='edit.php?Id={$row['Id']}' class='btn btn-sm btn-primary'>Edit</a>
                                <a href='delete.php?Id={$row['Id']}' class='btn btn-sm btn-danger'>Delete</a>
                            </td>
                         </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
