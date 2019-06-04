<?

$str = 'PHP(PHP:Hypertext Preprocessor)';
$msg = <<< EOD
{$str}は、サーバーサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎固めしましょう。<br />
"Let's start , everyone!!"
EOD;

print $msg;

/*
ヒアドキュメントでは、<<<EOD から　EOD　までを文字リテラルとみなす。
「EOD」は文字列の開始と終了を表すためのデリミタなので、開始と終了が
対応していれば適当に変更してよい
*/