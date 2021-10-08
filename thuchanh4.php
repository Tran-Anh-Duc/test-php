
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>thuc hanh 4</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="search" placeholder="enter">
    <input type="submit" id="submit" value="Tim">
</form>
<?php
$dictionary = [
    "hello" =>"xin chào",
    "how" => "the nao",
    "book" =>"quyen vo",
    "computer" =>"may tinh"
];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $key => $value){
        if ($key === $searchWord){
            echo "Từ: " .$key .". <br/>Nghĩa của từ: " . $value;
            echo "<br>";
            $flag = 1;
        }
    }
    if ($flag == 0){
        echo "khong tim thay tu can tra";
    }
}
?>
</body>
</html>
