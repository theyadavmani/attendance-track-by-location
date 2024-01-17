<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ua";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$status = $_POST['status'];
$time = $_POST['time'];
$username = $_GET['tirth'];

$sql = "INSERT INTO attendance (status, time, username) VALUES ('$status', '$time', '$username')";

if ($conn->query($sql) === TRUE) {
    echo "Attendance saved successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
