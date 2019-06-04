<?php
/*
mixed str_replace(mixed $src ,mixed $rep mixed $str[, int &$cnt])

$src    : 置き換える部分文字列
$rep    : 置き換え後の文字列
$str    : 対象の文字列
&$cnt   : 置き換えた文字列の個数を格納する変数

*/

$str = 'にわにはにわにわとりがいる';
echo str_replace('にわ', 'ニワ', $str, $cnt).'<br/>';
echo "{$cnt}個の置き換えをしました。";
