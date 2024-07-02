<?php
$arrNilai = array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo "Menampilkan isi array asosiatif dengan foreach: <br>";
foreach($arrNilai as $nama=>$nilai){
    echo "Nilai $nama=$nilai<br>";
}

echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST:<br>";
reset($arrNilai);
while ($element = current($arrNilai)) {
    $nama = key($arrNilai);
    $nilai = current($arrNilai);
    echo "Nilai $nama=$nilai<br>";
    next($arrNilai);
}
?>
