<?php

/*
バブルソート (bubble sort) は、ソートのアルゴリズムの一つ。
隣り合う要素の大小を比較しながら整列させること。
最悪計算時間がO(n2)と遅いが、アルゴリズムが単純で実装が容易なため、また並列処理との親和性が高いことから、しばしば用いられる。
安定な内部ソート。基本交換法、隣接交換法ともいう。（単に交換法と言う場合もある）

wiki: https://ja.wikipedia.org/wiki/%E3%83%90%E3%83%96%E3%83%AB%E3%82%BD%E3%83%BC%E3%83%88
*/



// $arr = array(0,1,2,3,4,5,6,7,8,9);
// $arr = array(9,8,7,6,5,4,3,2,1,0);
// $arr = array(0,1,2,3,4,5,6,7,9,8);
$arr = array(10,8,11,2,3,4,5,6,100,7,9,30,600,21);


$cnt = count($arr);

for($ii = 0; $ii < $cnt-1; $ii++){

    for($i = 0; $i < $cnt-1; $i++){
        $current = $i;
        $next    = $i + 1;

        if ($arr[$current] > $arr[$next]){
            $tmp = $arr[$current]; //一次保存して、お互い入れ替える
            $arr[$current] = $arr[$next];
            $arr[$next] = $tmp;
        }

    }

}

print_r($arr);
/*
Array
(
    [0] => 2
    [1] => 3
    [2] => 4
    [3] => 5
    [4] => 6
    [5] => 7
    [6] => 8
    [7] => 9
    [8] => 10
    [9] => 11
    [10] => 21
    [11] => 30
    [12] => 100
    [13] => 600
)
*/
?>
