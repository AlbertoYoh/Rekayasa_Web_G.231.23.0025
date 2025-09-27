<?php

$json_siswa_kelas = '{"Peter":"X-Allegiant","Joy":"X-Blissful","Marcel":"X-Caring","Jovita":"X-Delightful"}';

$siswa_kelas = json_decode($json_siswa_kelas);

var_dump ($siswa_kelas);
echo "<br><br>";

echo $siswa_kelas->Peter;
echo "<br>";
echo $siswa_kelas->Joy;
echo "<br>";
echo $siswa_kelas->Marcel;
echo "<br>";
echo $siswa_kelas->Jovita;

?>