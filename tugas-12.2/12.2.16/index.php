<?php
if (function_exists('exif_read_data')) {
    echo "Fungsi exif_read_data ada di PHP versi ini.";
} else {
    echo "Fungsi exif_read_data tidak ada di PHP versi ini.";
}
?>
