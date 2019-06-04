<?php

/* 方の相互変換　

キャスト

整数型 int integer



論理型 bool boolen

不動小数点 float double real

文字列 string

バイナリ binary

配列 array

オブジェクト object

null unset



*/

// 章末問題

/*
定数を使って値引き率10%を定義し、元値である500円の支払額を求めるスクリプトです。
*/

const DISCONT = 0.9;
$price = 500;
$sum = $price * DISCONT;
echo "値引き後の価格は{$sum}円です。";

// 練習問題5

var_dump((int)155.36);

$fruit = [
    'りんご','みかん','かき'
];
print_r($fruit);

$vagetables=[
    'red' => 'トマト',
    'yellow'=>'かぼちゃ',
    'green'=>'レタス'
];

print_r($vagetables);