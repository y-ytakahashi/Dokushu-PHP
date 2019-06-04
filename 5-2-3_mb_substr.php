<?php

/*

string mb_substr(string $str, int $start [,int $len [string $enc]])

$str    : 任意の文字列
$start  : 取得開始位置（文字位置は0スタート)
$len    : 取り出す文字数
$enc    : 使用する文字エンコーディング（省略時は「mb_internal_encoding」の値）
*/

mb_internal_encoding('UTF-8');

$str = 'WINGSプロジェクト';
echo mb_substr($str, 5, 2)."\n";
// 6文字目から２文字を取得

echo mb_substr($str, 5)."\n";
//6文字目移行を取得

echo mb_substr($str, 5, -4)."\n";
//６文字目以降で末尾４文字カットしたものを取得

echo mb_substr($str, -6, 2)."\n";
//広報6文字目から２文字を取得
