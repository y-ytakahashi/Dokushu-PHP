<?php

/*
配列に特定の要素が存在するかを確認する

bool in_array(mixed $needle, array $haystack[, bool $strict = false])
$needle : 検索すべき値
$hystack: 検索対象の配列
*/

$data = ['PHP', '' => 'JavaScript', 'PHP', 'Java', 'C#', '15'];
if (!array_search('PHP', $data) === false) {
    echo '見つかりませんでした';
}

/*
真偽値を「===」演算子で判定するようなコードは冗長なので、できれば避けたいところ
特定要素の有無を判定したいならば、専用の「in_array」関数を利用する
*/

if (in_array('PHP', $data)) {
    echo '見つかりました';
}
