<?php
$money = $_POST["money"];
$interesTrate = $_POST["interesTrate"];
$numberMonth= $_POST["numberMonth"];
for ($i = 0; $i < $numberMonth; $i++){
    $money = $money + ($money *($interesTrate /100));
}
echo " tong so tien nhan duoc la".$money;