<?php
header("Access-Control-Allow-Origin: *");//这个必写，允许请求的IP,*:所有IP
$con = mysqli_connect("localhost","root","");
if (!$con) {
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db("test", $con);

mysqli_query("DELETE FROM user WHERE username = '$_POST[username]'");

mysqli_close($con);