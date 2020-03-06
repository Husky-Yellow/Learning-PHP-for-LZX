<?php
$users = [
    ['name'=>'百度','url'=>'https://www.baidu.com/'],
    ['name'=>'百度','url'=>'https://www.baidu.com/']
];
foreach ($users as $key=>$user) {
    echo "[{$key}] 姓名:{$user['name']} 网址:{$user['url']} <hr/>";
}
?>