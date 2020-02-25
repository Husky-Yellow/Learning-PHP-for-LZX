<?php
$x = 5;
$y = 6;
$z = $x + $y;
echo $z;
echo PHP_EOL;

//全局变量
$txt = "Hello World!";
function getData()
{
    //局部变量
    $data = 10;
    echo $data;
    echo PHP_EOL;
}

getData();

function globalTest()
{
    //global 函数内访问全局变量
    global $z;
    echo $z;
    echo PHP_EOL;
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}

globalTest();
echo $z;
echo PHP_EOL;


// Static 作用域
// 当一个函数完成时，它的所有变量通常都会被删除,某个局部变量不要被删除
function staticTest()
{
    //static 局部变量使用后不被删除
    static $s = 0;
    echo $s;
    $s++;
    echo PHP_EOL;
}

staticTest();
staticTest();
staticTest();

function varTest($a)
{
    echo $a;
}

varTest(1);
?>