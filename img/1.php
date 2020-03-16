<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>小黄验证码</title>
</head>

<body>
    <form action="2.php" method="post">
        <table>
            <tr>
                <td>
                    <input type="text" name="captcha">
                </td>
                <td>
                    <img src="code.php" alt="验证码" onclick="this.src='code.php?v='+Math.random()">
                </td>
            </tr>
        </table>
        <button class="">提交</button>
    </form>
</body>

</html>