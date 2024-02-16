<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-2</title>
</head>
<body>
    <?php
        function sheep($n) {
            // $n回出力しないといけないので$iと比較させる
            for ($i =1; $i <= $n; $i++) {
                echo "羊が" . $i . "匹\n";   
            }
        }
        sheep(76);
    ?>
</body>
</html>