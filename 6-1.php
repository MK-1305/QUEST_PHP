<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quest6</title>
</head>
<body>
    <form method="post">
        <label for="greater">２つの数値を入れてね</label>
        <input type="text" name="number1" id="number1">
        <input type="text" name="number2" id="number2">
        <button type="submit">比較する</button>
    </form>
    <?php
    function greater() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];

        if ($number1 < $number2) {
            echo "$number1 < $number2";
        } elseif ($number1 > $number2) {
            echo "$number > $number2";
        } elseif ($number1 == $number2) {
            echo "$number1 == $number2";
        }
    }
    }
    greater();
    ?>
</body>
</html>