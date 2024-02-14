<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    quest2
    <br>
    <form method="post">
        <label for="number">好きな数値を入力してください</label>
        <input type="text" name="number" id="number">
        <button type="submit">2倍にする</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input_number = $_POST['number'];
            $double_number = $input_number * 2;
            echo "2倍にした数値です:" .$double_number;
        }
    ?>
    <br>
    quest3
    <br>
    <?php
    function fizz_buzz() {
        // $iに1を入れて100になるまでインクリメント
        for ($i = 1; $i <= 100; $i++) {
            // $iが3か5で割り切れる時
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz";
            } elseif ($i % 3 == 0) {
                echo "Fizz\n";
            } elseif ($i % 5 == 0) {
                echo "Buzz\n";
            } else {
                echo $i;
            }
        }
    }
    // 関数の呼び出し
    fizz_buzz();
    ?>
</body>
</html>