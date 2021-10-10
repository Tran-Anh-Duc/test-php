<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chiet khau</title>
</head>
<body>

<form action="congthucchietkhau.php" method="post">
    <table>
        <tr>
            <td> Mô tả của sản phẩm: </td>
            <td><input type="text" name="desc"></td>
        </tr>
        <tr>
            <td>Giá niêm yết của sản phẩm : </td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Tỷ lệ chiết khấu (phần trăm): </td>
            <td><input type="text" name="percent"></td>
        </tr>
        <tr>
            <td><button type="submit">Tính chiết khấu</button></td>
        </tr>
    </table>
</form>


</body>
</html>
