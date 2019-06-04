<?php
$url = 'https://api.repl-ai.jp/v1/registration';
 
// POST送信するデータ
$data = array(
    'data' => 'postdata',
);
 
// URL エンコード
$data = http_build_query($data, "", "&");
 
// 送信時のオプション
$options = array('http' => array(
    'method' => 'POST',
    'content' => $data,
));
 
// ストリームコンテキストを作成
$options = stream_context_create($options);
 
// file_get_contents
$contents = file_get_contents($url, false, $options);
 
// 出力
echo $contents;
?>