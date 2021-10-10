<?php
$price = $_POST["price"];
$percent = $_POST["percent"];
$luongchietkhau = $price * ($percent / 100);
$giasauchietkhau= $price - $luongchietkhau;
echo "Discount Amount ".$luongchietkhau."<br>"."Discount Price: ".$giasauchietkhau;

