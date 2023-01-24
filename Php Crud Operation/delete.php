<?php include 'header.php';
if (isset($_POST['deletebtn'])) {
    $stu_id = $_POST['sid'];
    $conn = mysqli_connect("localhost", "root", "", "crud");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "DELETE FROM student WHERE sid={$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsucessful!!");
        header("Location: http://localhost/RAVI/CRUD/crud_html/index.php");
    }
}
?>


    <div id="main-content">
        <h2>Delete Record</h2>
        <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Id</label>
                <input type="text" name="sid" />
            </div>
            <input class="submit" type="submit" name="deletebtn" value="Delete" />
        </form>
    
    </div>
    </div>
    </body>

    </html>