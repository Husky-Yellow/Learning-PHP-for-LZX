<?php
/**
 * PHP 常量
 */

// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;
echo '<br>';

// 不区分大小写的常量名
define("GREET", "欢迎访问 Runoob.com", true);
echo greet;
echo '<br>';

function getGreet()
{
    echo greet;
    echo '<br>';
    echo GREETING;
    echo '<br>';
}

getGreet();
?>