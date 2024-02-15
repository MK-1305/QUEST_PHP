<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6-3</title>
</head>
<body>
    <?php
        function xor_logic($x, $y) {
            //2つの入力が異なる時にtrueを返し、それ以外はfalseを返す
            if (($x && !$y) || (!$x && $y)) {
                echo "true";
            } else {
                echo "false";
            }
        }

        xor_logic(false, true);
    ?>
</body>
</html>