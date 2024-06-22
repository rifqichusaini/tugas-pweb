<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan form cara #1</title>
</head>
<body>
    <form action="" method="post" name="input">
        Nama Anda : <input type="text" name="nama"><br>
        <input type="submit" name="submit" value="Tampilkan isi TextBox">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        echo "nama anda  : <b>$nama</b>";
    }
?>