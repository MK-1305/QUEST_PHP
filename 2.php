<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quest2</title>
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
</body>
</html>