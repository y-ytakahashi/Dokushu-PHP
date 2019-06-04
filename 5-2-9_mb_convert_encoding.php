<?php

/*

マルチバイト文字（日本語）を扱う場合、文字コードを意識しないでいることはできない。
無用な混乱を防ぐためにも、アプリケーション内で使用する文字エンコードは統一する。
しかし、データベースや外部サービスを利用する場合は、統一できない場合もある

そのため、アプリケーション側で文字エンコーディング変換機能を提供する

mb_convert_encoding関数

string mb_convert_encoding(string $str, string $to [,mixed $from])

$str  : 任意の文字列
$to   : 変換後の文字コード
$from : 変換前の文字コード(デフォルトは、mb_internal_encodingの値)
 

*/

//与えられた文字列を「EUC-JP」に変換する
print mb_convert_encoding('こんにちは、世界！','EUC-JP','UTF-8');
