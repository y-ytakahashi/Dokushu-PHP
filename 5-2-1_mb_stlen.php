<?php

//文字列の長さを取得する

/*
int ms_strlen(string $str[,string $enc])

$str : 任意の文字列
$enc : 使用する文字エンコーディング

文字コードによるバイト数の違い

日本語のバイト数

Shift-JIS : 1文字２バイト
UTF-8     : 1文字３バイト

日本語が混在している文字列の長さを取得する場合は、
「mb_strlen」を使うようにする

*/

mb_internal_encoding('UTF-8');
$str = "WINGSプロジェクト";
print mb_strlen($str);
