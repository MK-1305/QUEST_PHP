<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-3</title>
</head>
<body>
    <?php
        function sum_1_100() {
            $sum = 0;
            for ($i = 1; $i <= 100; $i++) {
                $sum += $i;
            }
            echo $sum;
        }
        sum_1_100();
    ?>
</body>
</html>