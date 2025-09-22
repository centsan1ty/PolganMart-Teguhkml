<?php
$nama_barang = ["Indomie Goreng", "Aqua 600ml", "Chitato", "Beras 5kg", "Telur 1kg"];
$harga_barang = [3500, 5000, 12000, 60000, 28000];

echo "--POLGAN MART--\n\n";

$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;

for ($i = 0; $i < 5; $i++) {
    $index = rand(0, count($nama_barang) - 1);  // pilih barang random
    $qty   = rand(1, 5);                        // jumlah random

    $beli[]   = $nama_barang[$index];
    $jumlah[] = $qty;
    $total[]  = $harga_barang[$index] * $qty;
}

foreach ($beli as $key => $barang) {
    echo $barang . " x " . $jumlah[$key] . " = Rp " . number_format($total[$key], 0, ',', '.') . "\n";
    $grandtotal += $total[$key];
}

echo "-----------------------\n";
echo "Total Belanja : Rp " . number_format($grandtotal, 0, ',', '.') . "\n";
echo "-----------------------\n";
?>