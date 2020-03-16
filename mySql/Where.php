<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$con=mysqli_connect("localhost","root","","myDB");
// 检测连接
if (mysqli_connect_errno()) {
    echo "连接失败: " . mysqli_connect_error();
}else{
    echo "连接成功: ";
}

$result = mysqli_query($con,"SELECT * FROM myguests
WHERE firstname='John'");

while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'] . " " . $row['lastname'];
    echo "<br>";
}