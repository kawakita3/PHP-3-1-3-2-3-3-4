<?php
$result = dubleArr(array(1,2,3));

// 引数に配列以外を渡した場合
if (!$result) {
    echo "引数が不正です!";
    return;
}

foreach ($result as $num) {
    echo $num;
    echo "\n";
}
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/**
引数として受け取った配列の数値をすべて2倍にして返却する
**/
function dubleArr($arr) {
    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
    // TODO 引数が配列型であるか判定する
    // TODO 配列でなければfalseを返却し関数の処理を終える
    // TODO 結果返却用の空配列を定義する
    // TODO 配列の中身をループで１つずつ取り出し、２倍にして結果返却用に詰める
    // TODO 結果返却用をreturnする

    if(!is_array($arr))return false;
    $ret=array();
    foreach($arr as $num) {
        $ret[]=$num*2;
    }
   return $ret;
}
