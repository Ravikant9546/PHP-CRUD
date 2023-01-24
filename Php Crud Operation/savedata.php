<?php
 $stu_name=$_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];
                $conn = mysqli_connect("localhost", "root", "", "crud");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } else {
                    $sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
                    $result = mysqli_query($conn, $sql) or die("Query Unsucessful!!");
                    header("Location: http://localhost/RAVI/CRUD/crud_html/index.php");
    mysqli_close($conn);
                }
