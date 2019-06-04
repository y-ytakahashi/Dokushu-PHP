<?php
/*
explode関数

array explode(string $delimiter,string $str [,int $limit])
$delimiter  : 区切り文字
$str        : 分割する文字列
$limit      : 分割の最大数（デフォルトは制限なし）

*/
// 文字列を特定の区切り文字で分割する

$data = 'リオとニンザブロウとナミとリンリン';
print_r(explode('と', $data));

print_r(explode('や', $data));

print_r(explode('と', $data, 2));

print_r(explode('と', $data, -2));
