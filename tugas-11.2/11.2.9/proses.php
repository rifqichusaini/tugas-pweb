<?php
    if(isset($_POST['proses'])){
        $saran=nl2br($_POST['saran']);
        echo "kritik / saran saudara adalah : <br>";
        echo "<font color=blur><b>$saran</b></font>";
    }
?>