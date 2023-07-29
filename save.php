<?php 

include 'conn.php';

if(isset($_POST['Save'])){

// save value in $var
$x = $_POST['convert_text'];
$sql = "INSERT INTO text (texts) VALUES ('$x')";
mysqli_query($conn,$sql);
echo "<script>alert('Converted Text Saved *-* '); window.location = 'index.php';</script>";
}
$conn->close();     // Close the database connection



?>
