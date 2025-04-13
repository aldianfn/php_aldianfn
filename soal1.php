<?php

$jml = $_GET['jml'];
echo "<table border=1 style='border-collapse:collapse;'>\n";
for ($a = $jml; $a > 0; $a--) {
    $total = 0;     // Deklarasi variabel total untuk menyimpan total angka
    $value = [];    // Deklarasi variabel value untuk menyimpan setiap pengurangan angka dari $jml

    for ($b = $a; $b > 0; $b--) {
        // Hitung total setiap baris
        $total += $b;
        // Simpan nilai pengurangan angka pada array
        $value[] = $b;
    }

    // Tampil hasil total
    echo "<tr><td colspan='$jml'>TOTAL: $total</td></tr>";

    // Tampil hasil pengurangan angka dari $jml
    echo "<tr>";
    foreach ($value as $number) {
        echo "<td>$number</td>";
    }
    echo "</tr>";
}
echo "</table>";
