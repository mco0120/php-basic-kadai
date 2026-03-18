<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

function sort_2way($array,$order) {
    if ($order == TRUE) {
        echo '昇順にソートします。<br>';
        sort($array);
    } else {
        echo '降順にソートします。<br>';
        rsort($array);
    }
// ソートした配列を1つずつ表示する
foreach ($array as $value) {
    echo $value . '<br>';
    }    
}

$nums = [15, 4, 18, 23, 10]; // 並べ替えたい数字の集まり

sort_2way($nums, TRUE);  // 昇順で実行
sort_2way($nums, FALSE); // 降順で実行
    ?>
    </p>
</body>

</html>