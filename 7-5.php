<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-5</title>
</head>
<body>
    <?php
        function fibonacci($n) {
            if ($n == 0) {
                return 0;
            } elseif ($n == 1) {
                return 1;
            } else {
                $prev = 0;
                $curr = 1;
                for ($i = 2; $i <= $n; $i++) {
                    $temp = $curr;
                    $curr = $prev + $curr;
                    $prev = $temp;
                }
                return $curr;
            }
        }
        echo fibonacci(10);
    ?>
</body>
</html>