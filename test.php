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
<?php

function demo(){
   static $x = 5 ;
    echo $x . "<br>";
    $x++;
}
demo();
demo();
demo();
class greeting
{
    public static function welcome()
    {
        echo "hello World";
    }

    public function __construct()
    {
        self::welcome();
    }
}

new greeting();

?>


</body>
</html>
