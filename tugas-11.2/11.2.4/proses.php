<?php
    if($_POST['login']){
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        if($user=="admin" && $pass == "rahasia"){
            echo "<h2>Login Berhasil, Selamat</h2>";
        } else{
            echo "<h2>Login Gagal</h2>";
        }

    }
?>