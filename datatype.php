<?php
/**
 * 数据类型
 */

//字符串
$x = "Hello World!";
echo $x;
echo "<br>";
//整数
//十进制
$x = 456;
var_dump($x);
echo "<br>";
$x = -345;
var_dump($x);
echo "<br>";
//十六进制
$x = 0x8C;
var_dump($x);
echo "<br>";
//八进制
$x = 047;
var_dump($x);
echo "<br>";
//浮点型
$x = 10.368;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
echo "<br>";
//布尔型
$x = true;
$x = false;

//对象
class Car
{
    var $color;

    public function __construct($color = "green")
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}

//NULL
$x = null;
var_dump(x);

?>