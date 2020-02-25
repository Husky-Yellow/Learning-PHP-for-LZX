<?php
    /*
     * 快速排序
     * 选取一个中间数据，然后将比它小的数放在左边，比它大的数放在右边
     * 对新的左边和右边的数组，选择新的中间数，进行递归排序，直到只剩下一个数据
     * */
    function quick_sort($arr){
        $len = count($arr);
        if($len < 2)
            return $arr;
        $middle = $arr[0];
        $left_arr = $right_arr = [];
        for($i = 1;$i<$len;$i++){
            if($arr[$i] <= $middle){
                $left_arr[] = $arr[$i];
            }else{
                $right_arr[] = $arr[$i];
            }
        }

        $left_arr = quick_sort($left_arr);
        $right_arr = quick_sort($right_arr);
        return array_merge($left_arr,array($middle),$right_arr);
    }

    $arr = [98,45,100,34,23,104,78,128,111];
    $result = quick_sort($arr);
    print_r($result);