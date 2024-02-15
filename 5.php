<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quest5</title>
</head>
<body>
    <form method="post">
        <label for="input-second">秒数を入れてね</label>
        <input type="text" name="input-second">
        <button type="submit">送信</button>
    </form>
    <?php
    function convertSeconds() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalSeconds = $_POST["input-second"];
            // floor関数で小数点以下を切り捨てる
            $hours = floor($totalSeconds / 3600);
            $minutes = floor(($totalSeconds % 3600) / 60);
            $seconds = ($totalSeconds % 60);
        }
        echo "$hours 時間 $minutes 分 $seconds 秒";
    }
    convertSeconds();
    ?>
</body>
</html>