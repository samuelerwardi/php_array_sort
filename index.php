<?php
$lines = file("data-not-order.txt");
natsort($lines);
$datas = file_put_contents("data-order.txt", implode("\n", $lines));
?>