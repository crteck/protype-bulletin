<?php
header('Location: https://www.coosbaysda.org/iBulletin/ibulletinONE.php');

$servername = "gator4301.hostgator.com";
$username = "crteck_austin1";
$password = "godisgod";
$dbname = "crteck_one";

$Time = $_POST['Time'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (empty($_POST['Time'])) {
    echo "not working!!!";
  } else {
   $sql = "UPDATE `sTime` SET `num`='1',`sTime`='$Time' WHERE 1";
  } 



if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>