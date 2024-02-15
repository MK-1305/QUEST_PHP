<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quest4</title>
</head>
<body>
    <br>
    <?php
        function hello() {
        echo "Hello world\n";
        }
        hello();
    ?>
    <form method="post">
        <label for="name">あなたは誰？</label>
        <input type="text" name="name" id="name">
        <button type="submit">送信</button>
    </form>
    <?php
    function greeting($name) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input_name = $_POST["name"];
            echo "おはよう、$input_name";
        }
    }
    greeting("渡辺");
    ?>

</body>
</html>