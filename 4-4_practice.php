<?php

// 1 -100 の範囲にある奇数値の合計を求める
for($i=0; $i < 100; $i ++){
    if($i % 2 === 0){
     continue;
    }
    echo $i;
}

// 配列の値を一律に1.5倍するためのスクリプト
// $data を「&」で参照わたししている

$data = [10,25,50];
foreach($data as &$item){
    $item *=  1.5;
}
print_r($data);

// 変数$language の値が「PHP」、「JSP」、「ASP」であればサーバーサイド技術
// 「JavaScript」、「VBScript」であればクライアントサイド技術をswitch命令を使って
// 作成する


<?php
$language = 'PHP';
switch ($language) {
  case 'PHP' :
  case 'JSP' :
  case 'ASP' :
    print 'サーバサイド技術';
    break;
  case 'JavaScript' :
  case 'VBScript' :
    print 'クライアントサイド技術';
    break;
}

//if文を使ってswitchを書き直す

<?php
$language = 'PHP';
if ($language === 'PHP' || $language === 'JSP' || $language === 'ASP') {
  print 'サーバサイド技術';
} elseif ($language === 'JavaScript' || $language === 'VBScript') {
  print 'クライアントサイド技術';
}

