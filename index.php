<?php
echo("<h1 style='color:2196f3'>  要让笑起来最好看的女孩教我世界上最美丽的语言 </h1>");

echo "这是一个", "字符串<br>";

$txt1 = "学习PHP";
$txt2 = "RUNOOB.COM";
$cars = array("Volvo", "BMW", "Toyota");

$result = isset($txt1);//判断变量
var_dump($result);//输出类型
unset($result);//销毁变量

$bian_liang = 10;
$bian_liang2 = $bian_liang; //这叫传值
$bian_liang3 = $bian_liang + 1;//这不叫传值
echo "<br>变量2为:",$bian_liang2;
$bian_liang = 11;//改变初始变量的值
echo "<br>变量2为:",$bian_liang2;//---->>10
$bian_liang = 22;//改变初始变量的值
echo "<br>变量2为:",$bian_liang2;//---->>10
/**
 * 值传递总结:
 *      1.在传值的那个时刻,俩个变量的值一样(相等)
 *      2.在传值完成之后,,俩个变量值没有关系(各自独立)
 */
$bian_liang4 = &$bian_liang;//引用传值(赋值是加了一个符号"&")
$bian_liang5 = &$bian_liang;//这里也引用了$bian_liang
// 这也是"传值"的一种,---引用传值
/**
 * 引用传值总结:
 *      1.在引用传值的那个时刻,俩个变量的值一样(相等)
 *      2.在之后,两个变量的值也是一样的:改变其中任何一个,另一个也改变
 */

echo $txt1;
echo "<br>";
echo "在 $txt2 学习PHP";
echo "<br>";
echo "我的汽车品牌是 {$cars[0]}";

print "<h1>PHP很有趣！</h1>";
print $txt1;

function testAdd(){
    $a = 2;
    $b = 3;
    return $a+$b;
}
echo("<br/>");
echo(testAdd());

function testString(){
    $c = '这个是';
    return $c."测试的函数";
}

echo("<br/>");
echo(testString());

// @params  注释
echo '注释';
// 单行注释
/**
 * @params 多行注释
 */
// 变量
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