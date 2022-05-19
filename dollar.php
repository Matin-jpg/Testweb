<?php
$res = json_decode(file_get_contents("http://www.megaweb.ir/api/money"));
$price = $res->buy_usd->price;
//$data = str_replace(",","",$price);
$number = explode(",",$price)[0];
$intiger = (int) $number;
$data = $intiger + 1 ."00";
echo($data);
?>