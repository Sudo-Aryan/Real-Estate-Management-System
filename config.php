<?php
$conn =mysqli_connect('127.0.0.1','root','','rs');
if(!$conn)
{
    die("Could not connect to MySQL server " . mysqli_connect_error());
}
?>