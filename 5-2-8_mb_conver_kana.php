<?php

/*
mb_convert_kana関数

string mb_convert_kana(string $str[,string $option ="KV[,string $enc]])

$str    : 任意の文字列
$option : 変換オプション
$enc    : 使用する文字エンコーディング

詳しくは独習PHP 5.4 章
*/

mb_internal_encoding('UTF-8');
$str = 'WINGSプロジェクト';

print mb_convert_kana($str,'RKV');

// 結果：　ＷＩＮＧＳプロジェクト
