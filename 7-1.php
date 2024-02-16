<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-1</title>
</head>
<body>
    <?php
        function hello() {
            // 初期化; 条件; 増減;
            for ($i = 1; $i <= 100; $i++) {
                echo "こんにちは！";
            }
        }
        hello();
    ?>
</body>
</html>