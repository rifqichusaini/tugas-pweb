<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas-09</title>
</head>

<body>
    <?php 
        // program 9.1
        $gaji = 10000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);

        echo "gaji sebelum pajak = Rp. $gaji<br>";
        echo "total pajak = $pajak<br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
        echo "<br><br><br><br><br><br><br>";

        ?>
    <?php
        // program 9.2
        $a = 5;
        $b = 4;

        echo "$a == $b : ".($a == $b);
        echo "<br>$a != $b : ".($a != $b);
        echo "<br>$a > $b : ".($a > $b);
        echo "<br>$a < $b : ".($a < $b);
        echo "<br>($a == $b) && ($a > $b) : ".(($a == $b) && ($a > $b));
        echo "<br>($a == $b) || ($a > $b) : ".(($a == $b) || ($a > $b));
    ?>
</body>
</html>