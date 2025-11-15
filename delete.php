<?php
include 'db.php';
$id = $_GET['Id'];
mysqli_query($conn, "DELETE FROM students WHERE Id=$id");
header("Location: index.php");
?>
<?php include 'index.php'; ?>