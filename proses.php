<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jarak = $_POST['jarak'];
$biaya = 5000;
$total = $jarak * $biaya;

echo "Jarak = $jarak km <br>";
echo "Total = Rp $total" ;
echo "<head><title>Jasa Pengiriman Barang</title></head>";
$fp = fopen("struk.txt","a+");
fputs($fp,"$nama|$alamat|$total\n");
fclose($fp);
echo "<br>Terima kasih telah menggunakan layanan kami :D<br>";
echo "<a href = lihat.php>Lihat Struk</a><br>";