<?php
header("Access-Control-Allow-Origin: *");//这个必写，允许请求的IP,*:所有IP
$con = mysqli_connect("localhost","root","");

if (!$con) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db("test", $con);

$sql = "INSERT INTO user (username,password)
  VALUES
  ('$_POST[username]','$_POST[password]')";

if (!mysqli_query($sql,$con)) {
    die('Error: ' . mysqil_error());
}

echo "1 record added";

mysqli_close($con);