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

foreach($data as $row){
    echo $row["id_wisata"]."<br/>";
    echo $row["kota"]."<br/>";
    echo $row["landmark"]."<br/>";
    echo $row["tarif"]."<br/><hr/>";
}

?>