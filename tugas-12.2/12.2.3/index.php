<?php
$arrWarna = array("Red", "Orange", "Yellow", "Green", "Blue", "Purple");

echo "Menampilkan isi array dengan FOR: <br>";
for ($i = 0; $i < count($arrWarna); $i++) {
    echo "Warna Pelangi <font color=$arrWarna[$i]>" . $arrWarna[$i] . "</font><br>";
}

echo "<br>Menampilkan isi array dengan FOREACH: <br>";
foreach ($arrWarna as $warna) {
    echo "Warna Pelangi <font color=$warna>" . $warna . "</font><br>";
}
?>
