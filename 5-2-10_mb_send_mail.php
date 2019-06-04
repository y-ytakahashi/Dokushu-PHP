<?php

/*

bool mb_send_mail(string $to , string $subjectm string $msg[,string $headers[, string $param]])

$subject : 件名
$msg     : 本文
$headers : メールヘッダ
$param   : その他、メールシステムにわたすパラメータ

*/

$to = 'wings@example.com';
$subject = '独習PHP 改訂版';
$body = "こんにちは、mb_send_mail関数！\nどうですか？";
$headers = "Form: user01@example.com\n";
$headers = "Cc : yamada@example.com\n";
$headers = "X-mailer :PHP 7\n";

if (mb_send_mail($to, $subject, $body, $headers)) {
    echo 'メール送信に成功しました';
} else {
    echo 'メール送信に失敗しました';
}
