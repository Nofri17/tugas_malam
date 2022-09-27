<?php
$nama = "Ali";
$kamar = "Deluxe";
$lama_hari = 4;

if ($kamar == "Deluxe") {
    $harga_sewa = 650000;
} elseif ($kamar == "Standar") {
    $harga_sewa = 450000;
} elseif ($kamar == "Ekonomi") {
    $harga_sewa = 300000;
} else {
    $harga_sewa = 0;
}

$total_tagihan = $harga_sewa * $lama_hari;
echo "Tagihan atas Nama " . $nama . " adalah " . $total_tagihan;
