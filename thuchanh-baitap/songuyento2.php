<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label>
        <input type="text" value="" name="nap">
    </label>
    <button type="submit">ket qua</button>
    <p>ket qua
    <?php
    function isPrime($n)
    {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i === 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["nap"];
        $count = 0;
        $N = 2;
        for ($i = 0; $i < $num; $i++) {
            while ($count < $num) {
                if (isPrime($N)) {
                    echo $N . " ";
                    $count++;
                }
                $N++;
            }
        }
    }
    ?>
</form>


</body>
</html>
