<?php
/**
 * PHP 类型比较
 */
if (42 == "42") {
    echo '1、值相等';
    echo "<br>";
}

echo "<br>";

if (42 === "42") {
    echo '2、类型相等';
    echo "<br>";
} else {
    echo '3、不相等';
    echo "<br>";
}

echo '0 == false: ';
var_dump(0 == false);
echo '0 === false: ';
var_dump(0 === false);
echo "<br>";
echo '0 == null: ';
var_dump(0 == null);
echo '0 === null: ';
var_dump(0 === null);
echo "<br>";
echo 'false == null: ';
var_dump(false == null);
echo 'false === null: ';
var_dump(false === null);
echo "<br>";
echo '"0" == false: ';
var_dump("0" == false);
echo '"0" === false: ';
var_dump("0" === false);
echo "<br>";
echo '"0" == null: ';
var_dump("0" == null);
echo '"0" === null: ';
var_dump("0" === null);
echo "<br>";
echo '"" == false: ';
var_dump("" == false);
echo '"" === false: ';
var_dump("" === false);
echo "<br>";
echo '"" == null: ';
var_dump("" == null);
echo '"" === null: ';
var_dump("" === null);

?>