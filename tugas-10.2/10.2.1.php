<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi nilai ke ipk</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            margin: 0;
            color: white;
            background-image: url(https://i.ibb.co.com/J3mxBn1/6907397.jpg);
            background-size: cover;
        }
        .wrapper, form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input{
            text-align: center;
            width: 100%;
            margin-bottom:10px;
            border-radius: 20px;
            border: 0px;
            padding: 10px;
            cursor: pointer;
        }
        .form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .tabel{
            border-top: 1px solid white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php
        $ipk='';
        if(isset($_POST['submit'])){
            $nilai = $_POST['nilai'];
            if($nilai >= 80.00 && $nilai <= 100.00){
                $ipk = 'A';
            } else if($nilai >= 76.25 && $nilai <= 79.99){
                $ipk = 'A -';
            } else if($nilai >= 68.75 && $nilai <= 76.24){
                $ipk = 'B +';
            } else if($nilai >= 65.00 && $nilai <= 68.74){
                $ipk = 'B';
            } else if($nilai >= 62.50 && $nilai <= 64.99){
                $ipk = 'B -';
            } else if($nilai >= 57.50 && $nilai <= 62.49){
                $ipk = 'C +';
            } else if($nilai >= 55.00 && $nilai <= 57.49){
                $ipk = 'C';
            } else if($nilai >= 51.25 && $nilai <= 54.99){
                $ipk = 'C -';
            } else if($nilai >= 43.75 && $nilai <= 51.24){
                $ipk = 'D +';
            } else if($nilai >= 40.00 && $nilai <= 43.74){
                $ipk = 'D';
            } else if($nilai >= 0 && $nilai <= 39.99){
                $ipk = 'E';
            } else{
                $ipk = 'nilai minimum 0 dan maksimum 100!';
            }
        }
    ?>
    <div class="wrapper">
        <div class="form">    
            <h2>PROGRAM CEK IPK</h2>
            <form action="" method="POST">
                <input type="number" name="nilai" placeholder="Masukkan nilai anda">
                <input type="submit" name="submit">
            </form>
            <script>
                <?php
                    if(!empty($ipk)){
                        if(strlen($ipk) > 5){
                            echo 'alert("' . $ipk . '");';
                        } else {
                            echo 'alert("nilai anda ' . $nilai . ' dengan IPK ' . $ipk . '");';
                        }
                    }
                ?>
            </script>
        </div>
        <div class="tabel">

            <h2>Tabel Pedoman Akademik Penilaian UAD</h2>
            <table border="1" cellspacing="0" cellpadding="20" style="text-align:center;">
                <tr>
                    <td bgcolor="black">NILAI</td>
                    <td bgcolor="black">IPK</td>
                </tr>
                <tr>
                    <td>80.00 - 100.00</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>76.25 - 79.99</td>
                    <td>A -</td>
                </tr>
                <tr>
                    <td>68.75 - 76.24</td>
                    <td>B +</td>
                </tr>
                <tr>
                    <td>65.00 - 68.74</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>62.50 - 64.99</td>
                    <td>B -</td>
                </tr>
                <tr>
                    <td>57.50 - 62.49</td>
                    <td>C +</td>
                </tr>
                <tr>
                    <td>55.00 - 57.49</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>51.25 - 54.99</td>
                    <td>C -</td>
                </tr>
                <tr>
                    <td>43.75 - 51.24</td>
                    <td>D +</td>
                </tr>
                <tr>
                    <td>40.00 - 43.74</td>
                    <td>D</td>
                </tr>
                <tr>
                    <td>0 - 39.99</td>
                    <td>E</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>