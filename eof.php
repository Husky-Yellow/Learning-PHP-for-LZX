<?php

echo <<<EOF
    <h1>这是一个标题</h1>
    <p>这是一个段落</p>
EOF;

$name = "runoob";
$a = <<<EOF
    "abc" $name 
    "123"
EOF;

echo $a;

?>