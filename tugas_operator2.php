<?php

$saldoawal = 1000000;
$bunga = 0.03;
$bulan = 11;
 
$saldoAkhir = $saldoawal + ($saldoawal * $bunga * $bulan);

echo "saldo akhir setelah " . $bulan . " bulan adalah : rp." . $saldoAkhir . ",-";
?>