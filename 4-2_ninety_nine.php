

<h2> php の練習</h2>


<table border="1" aling="center">
<?php
// phpで九九
for($i = 1; $i < 9; $i++){
    echo '<tr>';
    for ($j = 1; $j < 9; $j++ ){
        $ans = $i * $j;
        echo '<td>'.$ans.'</td>';
    }
    echo '</td>';

}