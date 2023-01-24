<?php
$stu_id=$_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "crud");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "DELETE FROM student WHERE sid={$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsucessful!!");
    header("Location: http://localhost/RAVI/CRUD/crud_html/index.php");
   

}
?>