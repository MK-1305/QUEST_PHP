<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quest6-2</title>
</head>
<body>
    <form method="post">
        <label for="greater">年齢を入力してください</label>
        <input type="text" name="age" id="age">
        <button type="submit">料金を知る</button>
    </form>
    <?php
    function train_fare() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $age = $_POST["age"];
        }

        if ($age < 6) {
            echo "0円です";
        } elseif ($age >= 6 && $age < 12) {
            echo "100円です";
        } elseif ($age >= 12) {
            echo "600円です";
        }
    }
    train_fare();
    ?>
</body>
</html>