<?php
//++++++++++++ここから+++++++++++++++++++++
$val = 100;
if (isNumber($val)) {
  echo "valは数字です";
} else {
  echo "valは数字ではありません";
}
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/**
引数が数値が数値であるか判定する
**/
function isNumber() {
    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
}

function isNumber($val){
    return isNumber($val);
}