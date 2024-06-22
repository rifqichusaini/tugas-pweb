<?php
if(isset($_POST['Pilih'])){
    echo "Band Favorit Saudara adalah : <br>";
    $selectedBands = "";
    if(isset($_POST['band']) && is_array($_POST['band'])){
        foreach($_POST['band'] as $band){
            echo "+ " . $band . "<br>";
        }
        $selectedBands = implode(', ', $_POST['band']) . "\n";
    } else {
        echo "Tidak ada band yang dipilih.";
        $selectedBands = "Tidak ada band yang dipilih.\n";
    }
    
    // Menyimpan ke file txt
    $file = fopen("band_favorit.txt", "a");
    fwrite($file, $selectedBands);
    fclose($file);
}
?>
