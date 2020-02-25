<?php
    /*
     * 冒泡排序
     * 将相邻的两个数进行比较，大的数往后交换，直到排到最后
     */
    function bubbling($arr){
        $len = count($arr);
        for($i =1;$i<$len;$i++){
            for($j = 0;$j<$len-$i;$j++){
                if($arr[$j] > $arr[$j+1]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }

    $arr = [2,4,67,5,3,1,500,43,2];
    $result = bubbling($arr);
    print_r($result);