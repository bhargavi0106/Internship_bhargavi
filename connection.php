<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhargavi";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
echo "";
}
else
{
echo "connection failed";
}