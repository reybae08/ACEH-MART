<?php
$nama_barang = ["SURYA", "MAGNUM", "TITAN", "ABI", "HELIUM",];
$harga_barang = [35000, 25000, 20000, 21000, 22000];

echo "<h2>-- ACEH MART --</h2>";


$beli = [];
$jumlah = [];
$total = [];
$grandtotal = 0;
$jumlah_item = rand(2, 5);
$pilih_index = array_rand($nama_barang, $jumlah_item);
if (!is_array($pilih_index)) {
    $pilih_index = [$pilih_index];
}


foreach ($pilih_index as $idx) {
    $beli[] = $nama_barang[$idx];
    $jumlah[] = rand(1, 5); 
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama Barang</th><th>Harga</th><th>Jumlah</th><th>Total</th></tr>";

foreach ($beli as $i => $barang) {
    $sub_total = $harga_barang[array_search($barang, $nama_barang)] * $jumlah[$i];
    echo "<tr>
            <td>{$barang}</td>
            <td>Rp " . number_format($harga_barang[array_search($barang, $nama_barang)], 0, ',', '.') . "</td>
            <td>{$jumlah[$i]}</td>
            <td>Rp " . number_format($sub_total, 0, ',', '.') . "</td>
          </tr>";
    $grandtotal += $sub_total;
}
echo "<tr><td colspan='3'><b>Total Belanja</b></td>
      <td><b>Rp " . number_format($grandtotal, 0, ',', '.') . "</b></td></tr>";
echo "</table>";

?>