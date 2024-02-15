<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quest3</title>
</head>
<body>
    quest3
    <br>
    <?php
    function fizz_buzz() {
        // $iに1を入れて100になるまでインクリメント
        for ($i = 1; $i <= 100; $i++) {
            // $iが3か5で割り切れる時
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz.\n";
            } elseif ($i % 3 == 0) {
                echo "Fizz.\n";
            } elseif ($i % 5 == 0) {
                echo "Buzz.\n";
            } else {
                echo "$i.\n";
            }
        }
    }
    // 関数の呼び出し
    fizz_buzz();
    ?>
</body>
</html>