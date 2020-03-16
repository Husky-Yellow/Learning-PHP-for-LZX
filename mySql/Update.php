<?php
header("Access-Control-Allow-Origin: *");//这个必写，允许请求的IP,*:所有IP
$con=mysqli_connect("localhost","root","","myDB");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}else{
    echo "连接成功: ";
}

mysqli_query($con,"UPDATE myguests SET email='473795376@qq.com'
WHERE firstname='Mary' AND lastname='Moe'");

mysqli_close($con);