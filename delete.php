<?php
$conn =mysqli_connect('127.0.0.1','root','','rs');
?>
<?php
include 'config.php';
$IDnum = $_GET['id'];
mysqli_query($conn, "DELETE FROM `property` WHERE hid=$IDnum");   

header('location:admin.php');
?>