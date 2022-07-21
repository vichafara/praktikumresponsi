<?php
echo "<head><title>Jasa Pengiriman Barang</title></head>";
$fp = fopen("struk.txt", "r");
echo "<table border='1'>";

while ($sisi = fgets($fp)) {
    $pisah = explode('|', $sisi);
    echo "<tr><td>Nama         : </td><td> : $pisah[0] </td></tr>";
    echo "<tr><td>Alamat       : </td><td> : $pisah[1] </td></tr>";
    echo "<tr><td>Jarak (KM)   : </td><td> : $pisah[2] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}
echo "</table>";
echo "<a href = a.html> Goto Home </a><br>";
?>