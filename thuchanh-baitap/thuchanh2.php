<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>thực hành 2</title>
</head>
<body>
<form method="post" >
    <table >
        <tr>
            <td>
                Username
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" value="" name="username" placeholder="enter">
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
        </tr>
        <tr>
            <td>
                <input type="password" value="" name="password" placeholder="enter">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit"   value="">sign in</button>
            </td>
        </tr>
    </table>
</form>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
     $username = $_POST["username"];
     $password = $_POST["password"];

     if ($username === "admin" && $password === "admin"){
         echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>" ;
     }else{
         echo 'login error';
     }
 }
 ?>


</body>
</html>
