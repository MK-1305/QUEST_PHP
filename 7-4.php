<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-4</title>
</head>
<body>
    <?php
        function sum($x, $y) {
            $sum = 0;
            while ($x <= $y) {
                $sum += $x;
                $x++;
            }
            echo $sum;
        }
        sum(1, 100);
    ?>
</body>
</html>