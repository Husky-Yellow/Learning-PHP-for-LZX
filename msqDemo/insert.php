<?php
header("Access-Control-Allow-Origin: *");//这个必写，允许请求的IP,*:所有IP
$con=mysqli_connect("localhost","root","","myDB");

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

mysqli_select_db("myguests", $con);

$result = mysqli_query("SELECT * FROM user");

echo "<table border='1'>
  <tr>
  <th>Username</th>
  <th>Password</th>
  </tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);