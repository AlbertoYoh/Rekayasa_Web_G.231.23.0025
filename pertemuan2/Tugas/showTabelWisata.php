<?php

function curl($url){
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    
    return $output;
}

$send = curl("http://localhost/Rekayasa_Web_G.231.23.0025/pertemuan2/getWisata.php");

$data = json_decode($send, true);

echo "<table border='1' style='width: 70%; border-collapse: collapse; text-align: left;'>"; // border='1' untuk garis sederhana

echo "<thead>";
echo "<tr style='background-color: #f2f2f2;'>"; // Baris header
echo "<th style='padding: 8px;'>ID</th>";
echo "<th style='padding: 8px;'>Kota</th>";
echo "<th style='padding: 8px;'>Landmark</th>";
echo "<th style='padding: 8px;'>Tarif</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";
foreach ($data as $row) {
    echo "<tr>";
    // Menampilkan nilai dari setiap kolom (<td>)
    echo "<td style='padding: 8px;'>" . $row["id_wisata"] . "</td>";
    echo "<td style='padding: 8px;'>" . $row["kota"] . "</td>";
    echo "<td style='padding: 8px;'>" . $row["landmark"] . "</td>";
    echo "<td style='padding: 8px;'>" . $row["tarif"] . "</td>";
    echo "</tr>";
}
echo "</tbody>";

echo "</table>";

?>