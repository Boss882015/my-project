<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 3/25/2017
 * Time: 8:12 PM
 */?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<div class="container">
    <div class="table-responsive">
        <h2>LIST</h2>
        <a href="index.html" class="btn btn-danger" met>Submit</a><br>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr class="table" style="color: #2aabd2">
                <th class="active">Id</th>
                <th class="active">Name</th>
                <th class="active">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM student";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['status']?></td>
                </tr>
            <?php
            }
            } else {
            echo "0 results";
            }
            $conn->close();
            ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
