<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tinh lai kep</title>
</head>
<body>

<form action="" method="post">
    <input type="text" value="<?php echo isset($_POST["firstNumber"]) ? ($_POST["firstNumber"]):"" ?>" name="firstNumber"> <br><br>
    <input type="text" value="<?php echo isset($_POST["twoNumber"]) ? ($_POST["twoNumber"]):"" ?>" name="twoNumber"> <br><br>
    <input type="submit" name="summation" value="+">
    <input type="submit" name="Subtraction" value="-">
    <input type="submit" name="multiplication" value="*">
    <input type="submit" name="division" value="/">
    <p>result
    <?php
    if (isset($_POST["summation"])) {
        echo $_POST["firstNumber"] + $_POST["twoNumber"];
    }
    if (isset($_POST["Subtraction"])) {
        echo $_POST["firstNumber"] - $_POST["twoNumber"];
    }
    if (isset($_POST["multiplication"])) {
        echo $_POST["firstNumber"] * $_POST["twoNumber"];
    }
    if (isset($_POST["division"])) {
        echo $_POST["firstNumber"] / $_POST["twoNumber"];
    }
    ?>


</form>


</body>
</html>
